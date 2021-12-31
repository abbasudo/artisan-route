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
     * @return string
     */
    public function store(Request $request)
    {
        abort_if(app()['env'] === 'production' or app()['debug'] === false, 404);

        Artisan::call($request->input('command'), $request->except('command'));

        return Artisan::output();
    }
}
