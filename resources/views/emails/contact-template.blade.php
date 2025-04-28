
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Notification</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f4f4f4; color: #333333;">
    <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 600px; margin: auto; background-color: #ffffff; border-spacing: 0; border-collapse: collapse;">
        <!-- Header -->
        <tr>
            <td style="padding: 20px 0; text-align: center; background-color: #4a90e2;">
                <h1 style="color: #ffffff; margin: 0; padding: 0; font-size: 24px;">New contact message</h1>
            </td>
        </tr>

        <!-- Content -->
        <tr>
            <td style="padding: 30px;">
                <p style="margin-top: 0; margin-bottom: 20px; font-size: 16px;">You have received a new message from your website contact form.</p>

                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-spacing: 0; border-collapse: collapse;">
                    <!-- Name -->
                    <tr>
                        <td style="padding: 10px 0; border-bottom: 1px solid #eeeeee;">
                            <strong style="display: inline-block; width: 100px; color: #555555;">Name:</strong>
                            <span style="color: #333333;">{{$data['name']}}</span>
                        </td>
                    </tr>

                    <!-- Email -->
                    <tr>
                        <td style="padding: 10px 0; border-bottom: 1px solid #eeeeee;">
                            <strong style="display: inline-block; width: 100px; color: #555555;">Email:</strong>
                            <span style="color: #333333;">{{$data['email']}}</span>
                        </td>
                    </tr>

                    <!-- Phone -->
                    <tr>
                        <td style="padding: 10px 0; border-bottom: 1px solid #eeeeee;">
                            <strong style="display: inline-block; width: 100px; color: #555555;">Phone:</strong>
                            <span style="color: #333333;">{{$data['phone']}}</span>
                        </td>
                    </tr>

                    <!-- Message Heading -->
                    <tr>
                        <td style="padding: 20px 0 10px 0;">
                            <strong style="color: #555555;">Message:</strong>
                        </td>
                    </tr>

                    <!-- Message Content -->
                    <tr>
                        <td style="padding: 0 0 20px 0; background-color: #f9f9f9; border-radius: 4px;">
                            <div style="padding: 15px; line-height: 1.6; color: #333333;">
                                {{$data['message']}}
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <!-- Footer -->
        <tr>
            <td style="padding: 20px; text-align: center; background-color: #f4f4f4; font-size: 12px; color: #777777;">
                <p style="margin: 0;">This is an automated email. Please do not reply to this message.</p>
            </td>
        </tr>
    </table>
</body>
</html>
