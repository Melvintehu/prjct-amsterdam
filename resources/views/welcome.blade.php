<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PRJCT Amsterdam || Music ensemble by Maarten Engeltjes</title>
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,500,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <script>
            window.Laravel = { csrfToken: '{{ csrf_token() }}' };
        </script>
        <div style="position: relative; z-index: 20"
            class="
                container-fluid
                lg-space-inside-sides-xl md-space-inside-sides-xl sm-space-inside-sides-xl
                bg-main
                shadow-xs">
            @include('partials.navigation')
        </div>
        <div id="app">
            @include('partials.banner')
        </div>

        <div class="container-fluid space-inside-sides-xl  space-inside-lg bg-accent">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-color-main text-bold">About</h1>
                </div>
                <div class="col-lg-8">
                    <p class="space-outside-up-md">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div>

        <div id="buy-tickets" class="container-fluid space-inside-sides-xl space-inside-xl">
            <div class="row all-row-centered">
                <div class="col-lg-12 col-centered space-outside-down-xl">
                    <h1 class="text-color-main text-bold text-center ">Tickets kopen</h1>
                </div>
                <div class="col-lg-3 all-col-centered">
                    <div style="width: 100%; height: 100%;" class=" shadow-xs shadow-sm-hover transition-normal pointer">
                        <div class="image">
                            <img src="/images/foto1.jpg">
                        </div>
                        <div class="bg-accent space-inside-sides-sm space-inside-sm" style="min-height: 150px; height: 150px;">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            </p>
                        </div>
                        <div>
                            <button href="javascript:void(0)"
                                style="position: relative;"
                                class="
                                    height-auto
                                    bg-secondary
                                    border-none
                                    space-inside-sm
                                    ripplelink
                                    text-color-light
                                    position-bottom
                            "> Tickets kopen </button>
                        </div>

                    </div>
                </div>
                <!-- end of card -->
                <div class="col-lg-3 all-col-centered">
                    <div style="width: 100%; height: 100%;" class="
                        shadow-xs shadow-sm-hover
                        transition-normal
                        pointer
                    ">
                        <div class="image">
                            <img src="/images/foto1.jpg">
                        </div>
                        <div class="bg-accent space-inside-sides-sm space-inside-sm" style="min-height: 150px; height: 150px;">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            </p>
                        </div>
                        <div>
                            <button href="javascript:void(0)"
                                style="position: relative;"
                                class="
                                    height-auto
                                    bg-secondary
                                    border-none
                                    space-inside-sm
                                    ripplelink
                                    text-color-light
                                    position-bottom
                            "> Tickets kopen </button>
                        </div>

                    </div>
                </div>
                <!-- end of card -->
                <div class="col-lg-3 all-col-centered">
                    <div style="width: 100%; height: 100%;" class="
                        shadow-xs shadow-sm-hover
                        transition-normal
                        pointer
                    ">
                        <div class="image">
                            <img src="/images/foto1.jpg">
                        </div>
                        <div class="bg-accent space-inside-sides-sm space-inside-sm" style="min-height: 150px; height: 150px;">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            </p>
                        </div>
                        <div>
                            <button href="javascript:void(0)"
                                style="position: relative;"
                                class="
                                    height-auto
                                    bg-secondary
                                    border-none
                                    space-inside-sm
                                    ripplelink
                                    text-color-light
                                    position-bottom
                            "> Tickets kopen </button>
                        </div>

                    </div>
                </div>
                <!-- end of card -->
            </div>
        </div>


        <div class="container-fluid space-inside-sides-xl  space-inside-lg bg-accent">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-color-main text-bold">Projecten</h1>
                </div>
                <div class="col-lg-8">
                    <p class="space-outside-up-md">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div>


        <div id="contact" class="container-fluid space-inside-sides-xl space-inside-lg">
            <div class="row">
                <div class="col-lg-12 space-inside-down-lg">
                    <h1 class="text-color-main text-bold">Contact</h1>
                </div>
                <div class="col-lg-4 clear-floats space-inside-xs">
                    <p class="space-inside-sm text-bold">Naam</p>
                    <input type="text" name="name"
                    class="
                        border border-accent border-curved
                        height-auto
                        bg-accent
                        text-color-light
                        space-inside-left-sm
                    ">
                </div>
                <div class="col-lg-4 clear-floats space-inside-xs">
                    <p class="space-inside-sm text-bold">Telefoonnummer</p>
                    <input type="text" name="name"
                    class="
                        border border-accent border-curved
                        height-auto
                        bg-accent
                        text-color-dark
                        space-inside-left-sm
                    "
                    >
                </div>
                <div class="col-lg-7 clear-floats space-inside-xs">
                    <p class="space-inside-sm text-bold">Uw bericht</p>
                    <textarea style="resize: none; min-height: 200px;" type="text" name="name"
                    class="
                        border border-accent border-curved
                        height-auto
                        bg-accent
                        text-color-dark
                        space-inside-left-sm
                        space-inside-up-sm
                    "
                    > </textarea>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="/js/vue.js"></script>
        <script type="text/javascript" src="/js/app.js"></script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-96178157-1', 'auto');
          ga('send', 'pageview');

        </script>
    </body>
</html>
