<!-- Collect the nav links, forms, and other content for toggling -->
  <a href="/">

    <div class="col-lg-1 col-md-1 col-sm-2  main-logo hidden-xs space-inside-up-xs ">
      <img src='../images/logo-1.jpg' />
    </div>

    <div class="col-lg-3 col-md-2 col-sm-1  main-logo visible-lg space-inside-up-xs ">
      <img src='../images/prjct-amsterdam.jpg' />
    </div>

  </a>
<nav class="navbar navbar-default navbar-right xs-clear-float bg-main ">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>


<div class="collapse navbar-collapse bg-main" id="bs-example-navbar-collapse-1">

  <ul class="nav navbar-right navbar-nav xs-text-center xs-space-inside-down-sm bg-main">

    <li class="{{ Request::path() == '/' ? 'active ripplelink' : 'ripplelink' }} ">
      <a class="text-color-light " href="#">Home <span class="sr-only">(current)</span></a>
    </li>

    <li class="{{ Request::path() == '/actueel' ? 'active  ' : '' }}  ">
      <a class="text-color-light text-hover-dark" href="#">About</a>
    </li>

    <li class="{{ Request::path() == '/actueel' ? 'active  ' : '' }}  ">
      <a class="text-color-light text-hover-dark" href="#">Projects</a>
    </li>

    <li class="{{ Request::path() == '/actueel' ? 'active  ' : '' }}  ">
      <a class="text-color-light text-hover-dark" href="#">Donate</a>
    </li>

    <li class="{{ Request::path() == '/actueel' ? 'active  ' : '' }}  ">
      <a class="text-color-light text-hover-dark" href="#">Contact</a>
    </li>

    <a
    style="position: relative; top: 12px;"
    class="
      text-color-light
      circle
      bg-secondary bg-secondary-hover-darken-xs ripplelink
      space-inside-xs space-inside-sides-sm space-outside-left-xl

    " href="#">Buy tickets</a>



<!--
    <li class="{{ Request::path() == '/contact' ? 'active ' : '' }} ">
      <a class="text-color-light text-hover-dark" href="{{ URL::to('contact') }}">Donate</a>
    </li> -->

  </ul>

</div>

          </nav>