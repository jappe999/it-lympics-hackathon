@extends('layouts.app')
<title>Packet</title>
@section('scripts')
    <script src="/js/instagram.js" charset="utf-8"></script>
@endsection

@section('app')


    <!-- This is where the tweets and Instagram photos eventually appear. -->
    <div class="col-sm-8 col-md-6 mt-5 mx-auto" id="feed">
        <card :key="card.id" :card="card" v-for="card of feed"></card>
    </div>
@endsection
