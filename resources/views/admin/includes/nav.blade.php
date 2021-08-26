

  <nav class="navbar-default navbar-static-side" role="navigation">
<div class="sidebar-collapse">
    <ul class="nav metismenu" id="side-menu">
        <li class="nav-header">
            <div class="dropdown profile-element">
                <img alt="image" style="width: 90%;" src="{{asset('/admin/')}}/logo.png"/>
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="block m-t-xs font-bold">Admin Panel</span>
                    <span class="text-muted text-xs block">Actions <b class="caret"></b></span>
                </a>
                <ul class="dropdown-menu animated fadeInRight m-t-xs">


                    <li><a class="dropdown-item" href="#">Çıkış Yap</a></li>
                </ul>
            </div>
            <div class="logo-element">
                English
            </div>
        </li>


        <li>
            <a href="#"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Words</span> <span class="fa arrow"></span></a>

              <ul class="nav nav-second-level collapse">
                <li><a href="{{route('words')}}">Words</a></li>
                <li><a href="{{route('adminHome')}}">Add New Word</a></li>
              </ul>
        </li>

    </ul>

</div>
</nav>
