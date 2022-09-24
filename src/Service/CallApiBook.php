<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiBook
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this -> client = $client;
    }
    public function getBookData(): array
    {
       $response = $this -> client -> request(
        'GET',
        'https://127.0.0.1:8000/apip/books?page=1',
        ['auth_bearer' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2NjM5NTQ5NDMsImV4cCI6MTY2Mzk1ODU0Mywicm9sZXMiOlsiUk9MRV9BRE1JTiIsIlJPTEVfVVNFUiJdLCJ1c2VybmFtZSI6ImFkbWluQGJvb2thcGkuY29tIn0.rou24cENVYDYiuLYs_MS8dsXZyLlv6VB1CPG6TslPOcE0-AhygnAzWYzWEQp_GJRfPoDjvUDYoUTDJzNBu0wT6VkVdrnmiVyhj4NCdYi2I2WWAQPGul1UQuokK2TU_iqmR_eQIwir2LvNsE0GRMyS0CcsxzlSWxVXYQ2VhUNk4haDesM3ScIS_vCJxL0eqos0Rk-6-tCk-COcLL27LcAFydwGX4oRuMaXeeP2TEytjnHqjKONr-5fnEbkdEmmoBSH8nuk1RdDTaGZDu6gSiGzEV2u59lX0DY1MCwlKtPsExvJpiuhIBq8WaOkBiuDUswu1ej15_QI8e7M-eKKZh7IgJw1y8n0iwndwIGPGCzNAenkutXUjxm0D9VbgVWbgebmod5sjtElyXDrla_xg1kb_fJf8iJ0yGThUdewQ_-2T7XHsEHjKlpm7UMIZW7FiqEbGtHyTXoCJycUMmqVk2F3RYJKFJW2nuwaO1aCUrv4B6DlssZgEETja5X6Xrl0qKra2LdD9TUDI0-Ph2JZTwnQKJJGzsrzmjP-dVFZ1e3GQDFWeI6px4vDwsq8Ncn1P9dlNpccF79Cmw4aQMpdaNKy-S2bsShl85qFRDo3YF7-4W0kRPKqKoePWOW9F39qZxxUA4Hm9wjVyAcIoYC7NxBx4cvT-_tBrnlUF6vmfpZWn4']

       );

        return $response -> toArray();
    }
}