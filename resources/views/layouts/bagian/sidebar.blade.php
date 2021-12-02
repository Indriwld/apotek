<div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="supplier" class="active"><i class="fa fa-dashboard fa-fw"></i> Beranda</a>
                            </li>
 <li>
                                <a href="obat" ><i class="fa fa-table fa-fw"></i>  Data Obat</a>
                            </li>

                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="transaksi"><i class="fa fa-table fa-fw"></i>Transaksi</a>
                            </li>
 <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i> secondtruth <b class="caret"></b>
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
            </li>
            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
            </li>
            <li><a class="dropdown-item" href="{{ route('logout')}}"
            onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out fa-fw"></i>Logout</a>
            </li>
            <form id="logout-form" action="{{ route('logout')}}" method="POST" class="d-none">
                @csrf
            </form>

            </li>
        </ul>
    </li>
                                        <!-- /.nav-third-level -->

                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                </div>
