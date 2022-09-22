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
        'https://127.0.0.1:8000/apip/books?page=1'
       );

        return $response -> toArray();
    }
}