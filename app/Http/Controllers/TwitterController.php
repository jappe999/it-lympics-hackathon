<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Codebird;

class TwitterController extends Controller
{
    private $twitter;
    private $tweet;

    public function __construct()
    {
        Codebird::setConsumerKey(env('TWITTER_PUBLIC', 'null'), env('TWITTER_PRIVATE', 'null'));

        $this->twitter = Codebird::getInstance();
    }

    public function getAll()
    {
        return (array) $this->twitter->search_tweets('q=ITlympics', true);

    }

    public function showTweets()
    {
        //query to see all tweets
        $tweet = (array) $this->twitter->search_tweets('q=ITlympics'|| 'q=it-lympics' || 'q=Itlympics', true);
        
    }
    public function searchAll()
    {
        //query to search for tweets
    }
}
