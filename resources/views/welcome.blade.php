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
        <div id='top' style="position: relative; z-index: 20"
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

        <div id='over' class="container-fluid space-inside-sides-xl  space-inside-lg bg-accent">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-color-main text-bold">Over</h1>
                </div>
                <div class="col-lg-8">
                    <p class="space-outside-up-md font-md">
                        <b>PRJCT Amsterdam</b> is een nieuw barokensemble rondom countertenor <b>Maarten Engeltjes</b> en is een combinatie van een vaste kern van uitmuntende, recent afgestudeerde en in Nederland woonachtige barokmusici die een eigen muzikale en vooraanstaande visie hebben, samen met vooraanstaande internationale barokmusici. Het ensemble wordt geleid door een concertmeester van internationale allure die per project gekozen wordt. Zo wordt een omgeving gecreëerd waarin jong en oud elkaar inspireren.
                    </p>

                    <p class="font-md space-inside-md">
                        Engeltjes is de nummer vijf van de meest gevraagde countertenoren ter wereld en studeerde cum laude af aan het Koninklijk Conservatorium in Den Haag, maar pas toen hij met de wereldtop mocht gaan zingen, ontdekte hij dat hij nog veel te leren had. Het kunstvakonderwijs kan in een dergelijk leerproces niet voorzien. Engeltjes wil daarom zijn naam en faam inzetten om <b>jonge musici </b> in een vroeg stadium de kans te bieden om <b>samen met de wereldtop</b> te musiceren , op een manier die past bij hun generatie.
                    </p>
                </div>
            </div>
        </div>

        <div id="buy-tickets" class="container-fluid  space-inside-xl no-overflow">
            <div class="row all-row-centered">
                <div class="col-lg-12 col-centered space-outside-down-xl">
                    <h1 class="text-color-main text-bold text-center ">Tickets kopen</h1>
                </div>
                <div class="hidden-xs">
                    @include('partials.homepage.ticket')
                    @include('partials.homepage.ticket')
                    @include('partials.homepage.ticket')
                </div>

                <div id="app" class="visible-xs">
                    <p class="text-bold">Swipe naar links of rechts voor meer tickets</p>
                    <image-slider>
                        <slide height="520px">
                            <div slot="content" class="">
                                @include('partials.homepage.ticket')
                            </div>
                        </slide>
                        <slide height="520px">
                            <div slot="content" class="">
                                @include('partials.homepage.ticket')
                            </div>
                        </slide>
                        <slide height="520px">
                            <div slot="content" class="">
                                @include('partials.homepage.ticket')
                            </div>
                        </slide>
                    </image-slider>
                </div>

            </div>
        </div>

        <div id='projecten' class="container-fluid space-inside-sides-xl   bg-accent">
            <div class="row">
                <div class="col-lg-12 space-inside-lg">
                    <h1 class="text-color-main text-bold">Projecten</h1>
                </div>

                <div id="app" class="">
                    <image-slider>
                        <slide height="300px">
                            <div slot="content" class="">
                                @include('partials.homepage.project')
                            </div>
                        </slide>
                        <slide height="300px">
                            <div slot="content" class="">
                                @include('partials.homepage.project')
                            </div>
                        </slide>
                    </image-slider>
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

            @include('partials.top-scroll')
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
        <script>
          new WOW().init();
        </script>
    </body>
</html>
