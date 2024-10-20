<!-- resources/views/emails/otp.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Your OTP Code</title>
    <style>
        body {
            font-family: 'Noto Sans', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .email-header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 2px solid #b78027;
        }

        .email-header img {
            max-width: 150px;
        }

        .email-body {
            padding: 20px;
            text-align: center;
            color: #520055;
        }

        .email-body h1 {
            font-size: 24px;
            color: #b78027;
        }

        .otp-code {
            font-size: 32px;
            font-weight: bold;
            color: #520055;
            margin: 20px 0;
        }

        .email-footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }

        .email-footer p {
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="email-header">
            <img src="http://irvasca.com/images/logo/logo_putih.jpg" alt="IRVASCA">
        </div>

        <div class="email-body">
            <h1>Your OTP Code</h1>
            <p>Use the OTP code below to complete your registration:</p>
            <p class="otp-code">{{ $otp }}</p>
            <p>Thank you for choosing IRVASCA!</p>
        </div>

        <div class="email-footer">
            <p>&copy; 2024 IRVASCA. All rights reserved.</p>
            <p>Fashion with elegance and style.</p>
        </div>
    </div>
</body>

</html>