<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Codebird;

class TwitterController extends Controller
{
    private $twitter;

    public function __construct()
    {
        Codebird::setConsumerKey(env('TWITTER_PUBLIC', 'null'), env('TWITTER_PRIVATE', 'null'));

        $this->twitter = Codebird::getInstance();
    }

    public function getAll()
    {
        return (array) $this->twitter->search_tweets('q=ITlympics', true);
    }
}
