<?php

namespace App\Actions\PostBack;

use Illuminate\Http\Request;

class GetSmsAction extends Action
{

    public function execute(Request $request)
    {
        $this->getClient();
        $response = $this->client->get('', [
            'json' => [
                'action' => $this->getAction(),
                'activation' => $request->get('activation'),
                'token' => self::TOKEN,
            ]
        ]);
        return response()->json(json_decode($response->getBody()->getContents(), true), $response->getStatusCode());
    }

    public function getAction(): string
    {
        return "getSms";
    }
}
