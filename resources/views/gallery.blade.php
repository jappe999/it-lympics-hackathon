@extends('layouts.app')

@section('app')
    <div class="album py-5 ">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card mb-4 box-shadow">
                            <img src="images/broodje-kroket.jpg">
                        {{--<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">--}}
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection