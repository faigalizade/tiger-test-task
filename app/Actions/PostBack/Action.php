<?php

namespace App\Actions\PostBack;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

abstract class Action
{
    const BASE_URL = "https://postback-sms.com/api/";
    const TOKEN = "5994c91001f57eea808aff11738d752a";
    protected null|Client $client;

    public function execute(Request $request)
    {

    }

    public function getClient()
    {
        $this->client = new Client([
            'base_uri' => self::BASE_URL
        ]);
    }

    public function getAction(): string
    {
        return "action";
    }
}
