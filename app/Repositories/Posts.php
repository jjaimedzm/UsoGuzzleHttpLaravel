<?php

namespace App\Repositories;
use GuzzleHttp\Client;

Class Posts
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://jsonplaceholder.typicode.com',
        ]);
    }

    public function all()
    {
        $response = $this->client->request('GET', 'posts');

        return json_decode($response->getBody()->getContents());
    }

    public function find($id)
    {
        $response = $this->client->request("GET", "posts/{$id}");

        return json_decode($response->getBody()->getContents());
    }
}