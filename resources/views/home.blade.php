@extends('layouts.app')

@section('scripts')
    <script src="/js/twitter.js" charset="utf-8"></script>
@endsection

@section('app')

<form action="{{route('apiAll')}}">
    {{csrf_field()}}
    <input type="submit" class="btn-primary" value="See all tweets">
</form>

<br>

<form action="{{route('apiSearch')}}">
    {{csrf_field()}}
    <input type="submit" class="btn-primary" value="Search tweets">
</form>


    <!-- This is where the tweets and Instagram photos eventually appear. -->
    <div class="col-sm-8 col-md-6 mt-5 mx-auto" id="feed">
        <card :card="card" v-for="card of feed"></card>
    </div>
@endsection

