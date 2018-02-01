<?php

namespace App\Http\Controllers;

use App\Services\Instagram;
use Illuminate\Http\Request;

class InstagramController extends Controller
{
    private $instagram;

    public function __construct()
    {
        $auth_config = array(
            'client_id'         => env('INSTAGRAM_PUBLIC'),
            'client_secret'     => env('INSTAGRAM_PRIVATE')

        );

        $this->instagram = new Instagram\Auth( $auth_config );
    }

    public function getAll()
    {

    }

}
