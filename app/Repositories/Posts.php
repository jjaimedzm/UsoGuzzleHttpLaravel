<?php

namespace App\Repositories;
use GuzzleHttp\Client;

Class Posts
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
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