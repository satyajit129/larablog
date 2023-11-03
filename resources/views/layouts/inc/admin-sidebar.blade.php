<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-grip"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href=" {{ route('admin.PostCategory.index') }} ">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-bars-progress"></i></div>
                    Category
                </a>
                <a class="nav-link" href="{{ route('admin.PostSubCategory.index') }} ">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    SubCategory
                </a>
                <a class="nav-link" href="{{ route('admin.PostTag.index') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-chart-simple"></i></i></div>
                    Tag
                </a>
                <a class="nav-link" href="">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Post
                </a>
                <a class="nav-link" href="">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-book"></i></div>
                    Banner
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>
