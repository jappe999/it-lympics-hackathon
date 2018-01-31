<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Onze app</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div id="app">
            <navbar id="header" :open="menuOpen">
                <div class="collapse">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-md-7 py-4">
                                <h4 class="text-white">About</h4>
                                <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
                            </div>
                            <div class="col-sm-4 offset-md-1 py-4">
                                <h4 class="text-white">Contact</h4>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#" class="text-white">Follow on Twitter</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white">Like on Facebook</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-white">Email me</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="navbar box-shadow">
                    <div class="container d-flex justify-content-between">
                        <div class="d-flex flex-row justify-content-between">
                            <a href="/" class="navbar-brand d-flex align-items-center">
                                <img src="/img/logo.svg" alt="Logo">
                            </a>

                            <div class="ml-4">
                                <div class="d-block p-0" style="font-size:32px">
                                    ITlympics
                                </div>
                                <small class="p-0">
                                    Team Packet
                                </small>
                            </div>
                        </div>

                        <button class="menuicon" type="button" @click="toggleMenu()" aria-expanded="false" aria-label="Toggle navigation">
                            <div class="menuicon__lines">
                                <div class="menuicon__lines__line"></div>
                            </div>
                        </button>
                    </div>
                </div>
            </navbar>

            <sidebar :open="menuOpen">
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Home</a>
                    </li>
                </ul>
            </sidebar>


            @yield('app')
        </div>

        <script src="/js/app.js" charset="utf-8"></script>
    </body>
</html>
