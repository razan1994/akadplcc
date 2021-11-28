<?php

namespace App\Http\Services;

use App\Model\Tax;
// use http\Client;
use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Psr7\Request;

class FatoorahServices
{
    private $base_url;
    private $headers;
    private $request_client;

    public function __construct(Client $request_client)
    {
        $this->request_client = $request_client;
        // $this->base_url = 'https://apitest.myfatoorah.com';
        $this->base_url = 'https://api.myfatoorah.com/';
        $this->headers = [
            'Content-Type' => 'application/json',
            // 'authorization' => 'Bearer ' . 'rLtt6JWvbUHDDhsZnfpAhpYk4dxYDQkbcPTyGaKp2TYqQgG7FGZ5Th_WD53Oq8Ebz6A53njUoo1w3pjU1D4vs_ZMqFiz_j0urb_BH9Oq9VZoKFoJEDAbRZepGcQanImyYrry7Kt6MnMdgfG5jn4HngWoRdKduNNyP4kzcp3mRv7x00ahkm9LAK7ZRieg7k1PDAnBIOG3EyVSJ5kK4WLMvYr7sCwHbHcu4A5WwelxYK0GMJy37bNAarSJDFQsJ2ZvJjvMDmfWwDVFEVe_5tOomfVNt6bOg9mexbGjMrnHBnKnZR1vQbBtQieDlQepzTZMuQrSuKn-t5XZM7V6fCW7oP-uXGX-sMOajeX65JOf6XVpk29DP6ro8WTAflCDANC193yof8-f5_EYY-3hXhJj7RBXmizDpneEQDSaSz5sFk0sV5qPcARJ9zGG73vuGFyenjPPmtDtXtpx35A-BVcOSBYVIWe9kndG3nclfefjKEuZ3m4jL9Gg1h2JBvmXSMYiZtp9MR5I6pvbvylU_PP5xJFSjVTIz7IQSjcVGO41npnwIxRXNRxFOdIUHn0tjQ-7LwvEcTXyPsHXcMD8WtgBh-wxR8aKX7WPSsT1O8d8reb2aR7K3rkV3K82K_0OgawImEpwSvp9MNKynEAJQS6ZHe_J_l77652xwPNxMRTMASk1ZsJL',
            'authorization' => 'Bearer ' . 'x_mbzKbQ_uo6EU7G6jmjVdDq0mMjz8KLBT7ElPhZCz4SvsPA37mONmfijCT9KE1BCEYNmRpiJwfBBnzFJfCO3dWUKuiUROoEkc4KQmwdoOWChKBz2UO6kAytn7C6sOwDU_zEaffa1HWXynpwYNkHtaCk3v7uccOkT9TYoGLLucC93PiWytURIlMgK_sihy6ECZmbH4QhK2ZCZDP9g2cAiq1db2M7bcQV-sF9226k_z6zN4vO2lwawm0Pb9EPY2D3exghIhTiSf_e6VNwLZEBiLw5s5vLpvngry45WJvkxDrBNvQONYQbSwXB8wMNz6OxGcPrBP5GX7VZLTQgu2kSgT8QRRSKiBDRZ_CqGhRz2RNxBdXGknSvzYuZryGpkC5Y4DQPPqqHVJmwWIa6SGu0yzWry50tmjc3B4viT4GAmr-05XZk6ejJyNvF8w55HrsG3yToVg0qKDHf3JuRFPsg909zTn8pd6AOM5dmSnscp6A_EfPKcayx7uSq-SclzKa7nw4gnsiA-GBwjcOYJKyKDjpEsorsH-Qsrmsg1QVFdJ4rGinAt8UDTEpPhs7SFw5CHPAkaSWxi9OQCVEBUN9Z6mnCIDEjUjTUjbaw_KZUNVj4kgeHY02AlOsf-bX0cQtgnW0oTtqanBs6Hc-xnBjeKbNl9LEIx2tqpxIbzERA7cRMadPZ',
        ];
    }

    private function buildRequest($uri, $method, $data = [])
    {
        // dd($this->base_url . $uri);
        $request = new Request($method, $this->base_url . $uri, $this->headers);
        // if (!$data) {
        //     return false;
        // }
        $response = $this->request_client->send($request, [
            'json' => $data
        ]);

        if ($response->getStatusCode() != 200) {
            return false;
        }

        $response = json_decode($response->getBody(), true);
        return $response;
    }

    public function sendPayment($data)
    {
        return $response = $this->buildRequest('/v2/SendPayment', 'POST', $data);
    }
    
    public function getPaymentStatus($data)
    {
        return $response = $this->buildRequest('/v2/getPaymentStatus', 'POST', $data);
    }
}
