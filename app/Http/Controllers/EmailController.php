<?php

namespace App\Http\Controllers;

use App\Services\EmailService;
use GuzzleHttp\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function contact(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|regex:/^[0-9]{10}$/',
            'message' => 'required|string|min:10',
            'g-recaptcha-response' => 'required'
        ]);

        $recaptchaResponse = $request->input('g-recaptcha-response');
        $response = $this->validateRecaptcha($recaptchaResponse);

        if (!$response->success) {
            return back()->withErrors(['recaptcha' => 'reCAPTCHA validation error.'])->withInput();
        }

        $subject= 'Contact - From Encodyn Website';
        $data = array(
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'message' => $request->input('message')
        );
        try {
            Mail::to(env('ADMIN_EMAIL'))->send(new EmailService($data, $subject, 'contact-template'));
        } catch (\Exception $exception){
            Log::info($exception->getMessage());
            return redirect()->route('contact-us')->withErrors(['Error sending mail.']);
        }

        return redirect()->route('contact-us')->with('success', 'Contact successfully.');
    }
    protected function validateRecaptcha($recaptchaResponse)
    {
        $client = new Client();
        $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret' => env('RECAPTCHA_SECRET_KEY'),
                'response' => $recaptchaResponse,
                'remoteip' => request()->ip(),
            ],
        ]);

        return json_decode($response->getBody());
    }
}
