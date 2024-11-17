<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            color: #333;
            padding: 20px;
        }

        .invoice-container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            color: #5a2d82;
            /* Purple */
            margin-bottom: 20px;
        }

        .header h2 {
            color: #f0a500;
            /* Gold */
        }

        .details {
            border-bottom: 2px solid #5a2d82;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }

        .info {
            margin-bottom: 10px;
        }

        .info span {
            font-weight: bold;
            color: #5a2d82;
        }

        .total {
            text-align: right;
            font-size: 18px;
            font-weight: bold;
            color: #5a2d82;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>

<body>
    <div class="invoice-container">
        <div class="header">
            <h2>Irvasca Payment Invoice</h2>
            <p>Thank you for your purchase!</p>
        </div>

        <div class="details">
            <div class="info">
                <span>Order ID:</span> {{ $order->order_id }}
            </div>
            <div class="info">
                <span>Customer Name:</span> {{ $order->customer_name }}
            </div>
            <div class="info">
                <span>Email:</span> {{ $order->customer_email }}
            </div>
            <div class="info">
                <span>Phone:</span> {{ $order->customer_phone }}
            </div>
        </div>

        <h3>Order Summary</h3>
        <ul>
            @foreach (json_decode($order->products) as $product)
            <li>{{ $product->name }} (x{{ $product->qty }}) - Rp {{ number_format($product->price, 0, ',', '.') }}</li>
            @endforeach
        </ul>

        <div class="total">
            Total: Rp {{ number_format($order->total_amount, 0, ',', '.') }}
        </div>

        <div class="footer">
            <p>For any queries, contact us at <strong>support@irvasca.com</strong></p>
        </div>
    </div>
</body>

</html>