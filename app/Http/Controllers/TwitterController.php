<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Codebird;

class TwitterController extends Controller
{
    private $twitter;
    private $tweet;

    private $tags = [
        '#itlympics',
        '#it-lympics',
        '#almere',
        '@almere',
        '#windesheimflevoland',
        '#floriade',
        '@ggcAlmere',
        '@vba_almere',
    ];

    private $filters = [
        '',
    ];

    public function __construct()
    {
        Codebird::setConsumerKey(env('TWITTER_PUBLIC', 'null'), env('TWITTER_PRIVATE', 'null'));

        $this->twitter = Codebird::getInstance();
    }

    private function getTags()
    {
        $tags = [];
        $filters = implode(' ', $this->filters);

        foreach ($this->tags as $tag) {
            $tags[] = "$tag $filters";
        }

        return $tags;
    }

    public function query()
    {
        $queries = [];

        foreach ($_GET as $key => $query) {
            $queries[] = "$key=$query";
        }

        $query = implode('&', $queries);

        return (array) $this->twitter->search_tweets("$query&tweet_mode=extended", true);

    }

    public function showTweets()
    {
        // Query to see all tweets that match the tags.
        $query = implode(' OR ', $this->tags);
        $query = urlencode($query);

        return (array) $this->twitter->search_tweets("q=$query&tweet_mode=extended", true);

    }
    public function searchAll()
    {
        //query to search for tweets
    }
}
