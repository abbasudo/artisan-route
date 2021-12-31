<?php


namespace Llabbasmkhll\ArtisanRoute\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Artisan;

class ArtisanController extends BaseController
{
    /**
     * run an artisan command by api.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        abort_if(app()['env'] === 'production', 404);

        $data    = Artisan::call($request->input('command'), $request->except('command'));
        $message = Artisan::output();
        $status  = 'successful';

        return response()->json(compact(['data', 'message', 'status']), 201);
    }
}
