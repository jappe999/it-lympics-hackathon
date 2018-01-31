<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div id="navigation">
            <navbar id="header" :open="menuOpen" class="position-fixed w-100">
                <div class="navbar px-0 py-0 py-md-2">
                    <div class="container-fluid px-4 px-sm-5 d-flex justify-content-between">
                        <div class="d-flex flex-row justify-content-between">
                            <a href="/" class="d-flex flex-row color-black">
                                <div class="navbar-brand mx-0 d-flex align-items-center p-0">
                                    <img src="/img/logo.svg" alt="Logo" class="h-75">
                                </div>

                                <div class="ml-2 my-auto d-none d-md-block">
                                    <strong class="d-block m-0 mt-1 p-0 font-1 line-height-0">
                                        IT-Lympics
                                    </strong>
                                    <small class="m-0 p-0 line-height-0">
                                        Team Packet
                                    </small>
                                </div>
                            </a>
                        </div>

                        <div class="mr-3 d-block d-md-none">
                          Team Packet
                        </div>

                        <div>
                            <div class="d-none d-md-flex flex-row justify-content-between">
                                @include('layouts.navigation', [ 'direction' => 'row' ])
                            </div>

                            <button class="menuicon d-block d-md-none" type="button" @click="toggleMenu()" aria-expanded="false" aria-label="Toggle navigation">
                                <div class="menuicon__lines">
                                    <div class="menuicon__lines__line"></div>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </navbar>

<<<<<<< HEAD
            <sidebar :open="menuOpen">
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/gallery">Gallery</a>
                    </li>
                    <li>
                        <a href="/datetype">Datetype</a>
                    </li>
                    <li>
                        <a href="/api">Api</a>
                    </li>
                </ul>
            </sidebar>

            <sidebar :open="menuOpen" class="pt-4 d-md-none">
                <div class="px-5 py-3 my-auto">
                    <a href="/about" class="color-black">
                        <strong class="d-block m-0 p-0 font-4 line-height-0">
                            IT-Lympics
                        </strong>
                        <small class="m-0 p-0 line-height-0">
                            Team Packet
                        </small>
                    </a>
                </div>


                @include('layouts.navigation', [ 'direction' => 'column' ])
            </sidebar>
        </div>

        <div id="app">
            @yield('app')
            @include('layouts.footer')
        </div>

        <script src="/js/app.js" charset="utf-8"></script>
        @yield('scripts')
    </body>
</html>
