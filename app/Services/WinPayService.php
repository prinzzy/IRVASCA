<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log; // Import the Log facade

class WinPayService
{
    protected $merchantId;
    protected $secretKey;
    protected $baseUrl;

    public function __construct()
    {
        $this->merchantId = config('services.winpay.merchant_id');
        $this->secretKey = config('services.winpay.secret_key');
        $this->baseUrl = config('services.winpay.base_url');
    }

    /**
     * Create an invoice with WinPay.
     *
     * @param float $amount
     * @param string $orderId
     * @param string $customerName
     * @param string $customerEmail
     * @param string $customerPhone
     * @return array
     */
    public function createInvoice($totalAmount, $orderId, $customerName, $customerEmail, $customerPhone, $backUrl, $products)
    {
        // Generate the timestamp in the required format
        $timestamp = now()->setTimezone('Asia/Jakarta')->format('Y-m-d\TH:i:sP');

        // Prepare the invoice products array
        $invoiceProducts = [];

        // Populate the products array from the received data
        foreach ($products as $product) {
            $invoiceProducts[] = [
                'name' => $product['name'], // Use the filtered product name
                'qty' => $product['qty'], // Use the quantity from the adjusted product array
                'price' => (float) str_replace(',', '', $product['price']), // Convert price to float and remove any formatting
            ];
        }

        // Prepare the payload for the request
        $payload = [
            'customer' => [
                'name' => $customerName,
                'email' => $customerEmail,
                'phone' => $customerPhone, // Include the customer's phone
            ],
            'invoice' => [
                'ref' => $orderId,
                'products' => $invoiceProducts, // Include the dynamically created products array
            ],
            'back_url' => $backUrl, // Use the passed back URL
            'interval' => 120, // Set the interval as required
        ];

        // Generate the signature for the request
        $payload['signature'] = $this->generateSignature($timestamp);

        // Prepare headers for the request
        $headers = [
            'X-Winpay-Timestamp' => $timestamp,
            'X-Winpay-Signature' => $payload['signature'],
            'X-Winpay-Key' => $this->merchantId,
            'Content-Type' => 'application/json',
        ];

        // Log the request payload and headers
        Log::info('WinPay Invoice Request:', [
            'headers' => $headers,
            'payload' => $payload
        ]);

        // Send a POST request to WinPay to create the invoice
        $response = Http::withHeaders($headers)->post("{$this->baseUrl}/api/create", $payload);

        // Log the response from the WinPay API
        Log::info('WinPay Invoice Response:', [
            'status' => $response->status(), // Get the HTTP status code
            'body' => $response->json(), // Convert the response body to JSON
            'headers' => $response->headers(), // Log the response headers
        ]);

        return $response; // Return the response object directly
    }



    /**
     * Generate a SHA-256 signature using the payload data and secret key.
     *
     * @param string $timestamp
     * @return string
     */
    protected function generateSignature($timestamp)
    {
        // Use hash_hmac with the timestamp and the secret key
        return hash_hmac('sha256', $timestamp, $this->secretKey);
    }
}
