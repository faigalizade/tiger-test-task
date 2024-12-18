<?php

namespace App\Actions\PostBack;

use Illuminate\Http\Request;

class GetStatusAction extends Action
{

    public function execute(Request $request)
    {
        $this->getClient();
        $response = $this->client->get('', [
            'json' => [
                'action' => $this->getAction(),
                'token' => self::TOKEN,
                'activation' => $request->get('activation'),
            ]
        ]);
        return response()->json(json_decode($response->getBody()->getContents(), true), $response->getStatusCode());
    }

    public function getAction(): string
    {
        return "getStatus";
    }
}
