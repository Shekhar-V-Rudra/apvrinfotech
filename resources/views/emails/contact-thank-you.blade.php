<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Contacting Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #13114C;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .content {
            background-color: #f9f9f9;
            padding: 30px;
            margin-top: 20px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #666;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Apvr Infotech</h1>
    </div>
    
    <div class="content">
        <h2>Thank You for Connecting with Us!</h2>
        
        <p>Dear {{ $name }},</p>
        
        <p>Thank you for contacting Apvr Infotech! We have received your inquiry regarding <strong>{{ $service }}</strong>.</p>
        
        <p>Our team has been notified and will review your message shortly. We aim to respond to all inquiries within 24-48 hours.</p>
        
        <p>If you have any urgent questions, please feel free to contact us directly at:</p>
        <p><strong>Phone:</strong> +91 99099971138<br>
        <strong>Email:</strong> info@apvrinfotech.com</p>
        
        <p>We appreciate your interest in our services and look forward to helping you achieve your goals.</p>
        
        <p>Best regards,<br>
        <strong>The Apvr Infotech Team</strong></p>
    </div>
    
    <div class="footer">
        <p>&copy; {{ date('Y') }} Apvr Infotech. All Rights Reserved.</p>
        <p>Surat (Regd.Office): J-162, Japan Market, Near Delhi Gate, Surat, Gujarat - 395003</p>
    </div>
</body>
</html>

