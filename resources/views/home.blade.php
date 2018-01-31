@extends('layouts/app')

@section('scripts')
    <script src="/js/twitter.js" charset="utf-8"></script>
@endsection

@section('app')
    <!-- This is where the tweets and Instagram photos eventually appear. -->
    <div class="col-sm-8 col-md-6 mt-5 mx-auto" id="feed">
        <card :card="card" v-for="card of feed"></card>
    </div>
@endsection
