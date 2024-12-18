<?php

namespace App\Http\Controllers;

use App\Actions\PostBack\Action;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostBackController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $action)
    {
        /**
         * @var Action $action
         */
        $action = "\App\Actions\PostBack\\".Str::studly($action."Action");
        return (new $action())->execute($request);
    }
}
