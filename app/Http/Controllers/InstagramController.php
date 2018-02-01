<?php

namespace App\Http\Controllers;

use App\Services\Instagram;
use Illuminate\Http\Request;

class InstagramController extends Controller
{
    private $instagram;

    private $tags = [
        'itlympics',
        'it-lympics',
        'almere',
        'windesheimflevoland',
        'floriade',
    ];

    public function __construct()
    {
        $this->instagram = new Instagram(env('INSTAGRAM_PUBLIC'));
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

    public function getAll()
    {
        $tagFeed = [];
        $userFeed = [];

        return (array) $this->instagram->getTagMedia($this->tags[0]);

        foreach ($this->tags as $tag) {
            $tagFeed = array_merge($tagFeed, json_encode($this->instagram->getTagMedia($tag))['data']);
        }

        return $tagFeed;
    }
}
