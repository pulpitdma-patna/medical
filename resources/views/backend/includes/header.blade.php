<!-- Page Loader -->
    
<!-- Top navbar div start -->
    <div class="container-fluid">
        <div class="navbar-brand">
            <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-bars"></i></button>
            <button type="button" class="btn-toggle-fullwidth"><i class="fa fa-bars"></i></button>
            <a href="index.html">MEDICAL</a>                
        </div>
        
        <div class="navbar-right">
            <form id="navbar-search" class="navbar-form search-form">
                <input value="" class="form-control" placeholder="Search here..." type="text">
                <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
            </form>                

            <div id="navbar-menu">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ route('frontend.auth.logout') }}" class="icon-menu"><i class="fa fa-power-off"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>