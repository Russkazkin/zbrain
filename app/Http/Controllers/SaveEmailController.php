<?php

namespace App\Http\Controllers;

use App\Email;
use App\Http\Requests\SaveEmailRequest;

class SaveEmailController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(SaveEmailRequest $request)
    {
        Email::create([
            'email' => $request['email'],
        ]);
        return response('Operation successful', 200)
            ->header('Content-Type', 'text/plain');
    }
}
