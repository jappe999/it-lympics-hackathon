@extends('layouts.app')
<title>Packet</title>
@section('scripts')
    <script src="/js/twitter.js" charset="utf-8"></script>
@endsection

@section('app')
    <!-- This is where the tweets and Instagram photos eventually appear. -->
    <div class="col-sm-8 col-md-6 mt-5 mx-auto" id="feed">
        <h1 class="text-center font-9 mb-5">Twitter Feed</h1>

        <card :key="card.id" :card="card" v-for="card of feed"></card>

        <div id="endfeed"></div>

        <div id="loader" class="mx-auto" v-if="loading">Loading</div>
    </div>
@endsection
