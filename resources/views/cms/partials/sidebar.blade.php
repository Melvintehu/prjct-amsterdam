  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/images/user_icon.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
<!--       <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">CRM Beheer</li>
        <!-- CUSTOM NAVIGATION GOES BETWEEN THIS AND -->





        <!-- ////////////  THIS  ////////////////////// -->

        <li class="header">Website beheer</li>

        <!--  pages and sections -->
        @include('cms.navigation.navigation-dropdown', [
          'title' => "Pagina's",
          'icon' => 'ion ion-document',
          'linkGroup' => [
            [
              'header' => "Pagina's",
              'cms/page' => 'Overzicht',
              'cms/page/create' => 'Toevoegen',
            ],
            [
              'header' => 'Secties',
              'cms/section' => 'Overzicht',
              'cms/section/create' => 'Toevoegen',
            ]
          ]
        ])


        <!-- CUSTOM NAVIGATION LINKS GO UNDERNEATH HERE -->






      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
