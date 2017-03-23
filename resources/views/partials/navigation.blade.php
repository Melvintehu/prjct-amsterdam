<!-- Collect the nav links, forms, and other content for toggling -->
  <a href="/">

    <div class="col-lg-1 col-md-1 col-sm-1  main-logo hidden-xs  ">
      <img src='../images/logo-small.png' />
    </div>

    <div class="col-lg-3 col-md-3 col-sm-3  main-logo hidden-xs  ">
      <img src='../images/logo.png' />
    </div>

  </a>


  <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">

  <ul class="nav navbar-right navbar-nav xs-text-center xs-space-inside-down-sm">

    <li class="{{ Request::path() == '/' ? 'active bg-secondary' : 'transition-normal' }} transition-normal">
      <a class="text-color-light" href="/">Home <span class="sr-only">(current)</span></a>
    </li>

    <li class="{{ Request::path() == '/actueel' ? 'bg-secondary ' : '' }} transition-normal bg-hover-secondary">
      <a class="text-color-light text-hover-dark" href="{{ URL::to('actueel') }}">About</a>
    </li>

    <li class="{{ Request::path() == '/ervaringen' ? 'bg-secondary ' : 'transition-normal' }} transition-normal">
      <a class="text-color-light text-hover-dark" href="/ervaringen">Buy tickets</a>
    </li>

    <li class="{{ Request::path() == '/contact' ? 'bg-secondary transition-normal' : 'transition-normal' }} transition-normal">
      <a class="text-color-light text-hover-dark" href="{{ URL::to('contact') }}">Donate</a>
    </li>

  </ul>

</div>