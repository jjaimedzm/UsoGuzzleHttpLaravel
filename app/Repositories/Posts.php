<?php

namespace App\Repositories;
use GuzzleHttp\Client;

Class Posts extends GuzzleHttpRequest
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function all()
    {
        return $this->get('posts');
    }

    public function find($id)
    {
        return $this->get("posts/{$id}");
    }
}