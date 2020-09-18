<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="/html/ltr/vertical-collapsed-menu-template/index.html">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">dbBook</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item">
                <a href="#"><i class="feather icon-pie-chart"></i><span class="menu-title">Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a href="#"><i class="feather icon-book"></i><span class="menu-title">Book</span></a>
            </li>
            <li class="nav-item"><a href="#"><i class="feather icon-list"></i><span class="menu-title">Master Data</span></a>
                <ul class="menu-content">
                    <li>
                        <a href="{{ route('category.index') }}"><i></i><span class="menu-item">Category</span></a>
                    </li>   
                </ul>
            </li>
            <li class="nav-item">
                <a href="#"><i class="feather icon-users"></i><span class="menu-title">Users</span></a>
            </li>
            <li class="nav-item">
                <a href="#"><i class="feather icon-log-out"></i><span class="menu-title">Logout</span></a>
            </li>
        </ul>
    </div>
</div>