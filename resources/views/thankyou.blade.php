<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Your Order</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> {{-- Include your CSS file --}}
    <style>
        body {
            background-color: #f5f5f5;
            color: #333;
            font-family: 'Arial', sans-serif;
            text-align: center;
            padding: 50px;
        }

        .thank-you-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        h1 {
            color: #5c3f8c;
            /* Purple color */
        }

        .message {
            margin: 20px 0;
            font-size: 1.2em;
        }

        .order-summary {
            background-color: #f8f0ff;
            border: 1px solid #d3c0f0;
            border-radius: 5px;
            padding: 15px;
            margin-top: 20px;
        }

        .back-home {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            color: white;
            background-color: #b493e5;
            /* Light purple */
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .back-home:hover {
            background-color: #9e7cbe;
            /* Darker purple */
        }
    </style>
</head>

<body>
    <div class="thank-you-container">
        <h1>Thank You for Your Order!</h1>
        <div class="message">
            Your order has been placed successfully. We'll process it and send you a confirmation email shortly.
        </div>
        <div class="order-summary">
            <h2>Order Summary</h2>
            <p>Order ID: {{ session('order_id') }}</p>
            <p>Total Amount: Rp {{ number_format(session('total_amount'), 0, ',', '.') }},00</p>
            <!-- <p>Status: Waiting for payment</p> -->
        </div>
        <a href="{{ url('/shop') }}" class="back-home">Return to Home</a>
    </div>
</body>

</html>