<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $urls = [
            url('/'),
            url('/services'),
            url('/services/web-design'),
            url('/services/software-development'),
            url('/services/seo-optimization'),
            url('/services/brand-design'),
            url('/portfolio'),
            url('/contact-us'),
        ];

        $content = view('sitemap', compact('urls'));

        return response($content, 200)
            ->header('Content-Type', 'text/xml; charset=UTF-8');
    }
}
