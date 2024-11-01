<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

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
     * @return array
     */
    public function createInvoice($amount, $orderId, $customerName, $customerEmail)
    {
        $payload = [
            'merchant_id' => $this->merchantId,
            'order_id' => $orderId,
            'amount' => $amount,
            'customer_name' => $customerName,
            'customer_email' => $customerEmail,
        ];

        // Generate the signature for the payload
        $payload['signature'] = $this->generateSignature($payload);

        // Send a POST request to WinPay to create the invoice
        $response = Http::post("{$this->baseUrl}/invoice/create", $payload);

        return $response->json();
    }

    /**
     * Generate a SHA-256 signature using the payload data and secret key.
     *
     * @param array $data
     * @return string
     */
    protected function generateSignature($data)
    {
        $signData = implode('', array_values($data)) . $this->secretKey;
        return hash('sha256', $signData);
    }
}
