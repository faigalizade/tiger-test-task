<?php

namespace App\Actions\PostBack;

use Illuminate\Http\Request;

class GetNumberAction extends Action
{

    public function execute(Request $request)
    {
        $this->getClient();
        $response = $this->client->get('', [
            'json' => [
                'action' => $this->getAction(),
                'country' => $request->get('country'),
                'service' => $request->get('service'),
                'token' => self::TOKEN,
                'rent_time' => $request->get('rent_time')
            ]
        ]);
        return response()->json(json_decode($response->getBody()->getContents(), true), $response->getStatusCode());
    }

    public function getAction(): string
    {
        return "getNumber";
    }
}
