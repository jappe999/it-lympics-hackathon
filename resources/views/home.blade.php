@extends('layouts.app')

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

@endsection

