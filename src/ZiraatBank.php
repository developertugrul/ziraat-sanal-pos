<?php

namespace ZiraatBank;

class ZiraatBank
{
    private $apiKey;
    private $apiSecret;

    public function __construct()
    {
        $this->apiKey = $_ENV['ZIRAAT_API_KEY'];
        $this->apiSecret = $_ENV['ZIRAAT_API_SECRET'];
    }

    /**
     * Ödeme başlat
     *
     * @param float $amount
     * @param string $currency
     * @return array
     */
    public function initPayment(float $amount, string $currency): array
    {
        // API endpoint
        $url = "https://api.ziraatbankasi.com/initPayment";

        // Ödeme bilgileri
        $data = [
            'amount' => $amount,
            'currency' => $currency,
            'apiKey' => $this->apiKey,
            'apiSecret' => $this->apiSecret
        ];

        // API isteği
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($ch);
        curl_close($ch);

        // Yanıtı döndür
        return json_decode($response, true);
    }

    /**
     * Ödeme durumunu sorgula
     *
     * @param string $paymentId
     * @return array
     */
    public function confirmPayment(string $paymentId): array
    {
        // API endpoint
        $url = "https://api.ziraatbankasi.com/confirmPayment";

        // Ödeme bilgileri
        $data = [
            'paymentId' => $paymentId,
            'apiKey' => $this->apiKey,
            'apiSecret' => $this->apiSecret
        ];

        // API isteği
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($ch);
        curl_close($ch);

        // Yanıtı döndür
        return json_decode($response, true);
    }
}