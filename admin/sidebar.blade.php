<nav class="sidenav @if(config('valexo.sidebar_class')) {{ config('valexo.sidebar_class') }} @endif">
    <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">
            <!-- Sidenav Menu Heading (Account)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <div class="sidenav-menu-heading d-sm-none">Account</div>
            <!-- Sidenav Link (Alerts)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <a class="nav-link d-sm-none" href="starter-default.html#!">
                <div class="nav-link-icon"><i data-feather="bell"></i></div>
                Alerts
                <span class="badge badge-warning-soft text-warning ml-auto">4 New!</span>
            </a>
            <!-- Sidenav Link (Messages)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <a class="nav-link d-sm-none" href="starter-default.html#!">
                <div class="nav-link-icon"><i data-feather="mail"></i></div>
                Messages
                <span class="badge badge-success-soft text-success ml-auto">2 New!</span>
            </a>
            <!-- Sidenav Menu Heading (Core)-->
            <div class="sidenav-menu-heading">Core</div>
            <!-- Sidenav Accordion (Dashboard)-->
            <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
                <div class="nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                {{ __('messages.dashboards') }}
            </a>
            <!-- Sidenav Accordion (Ststistic)-->
            <a class="nav-link" href="{{ route('admin.statistic.index') }}">
                <div class="nav-link-icon"><i class="mr-1" data-feather="trending-up"></i></div>
                {{ __('admin.statistic') }}
            </a>
            <!-- Sidenav Link (CategorySeeder)-->
            <a class="nav-link" href="{{ route('admin.category.index') }}">
                <div class="nav-link-icon"><i class="fas fa-line-columns"></i></div>
                {{ __('messages.category') }}
            </a>
            <!-- Sidenav Link (Pages)-->
            <a class="nav-link" href="{{ route('admin.pages.index') }}">
                <div class="nav-link-icon"><i class="fas fa-file"></i></div>
                {{ __('messages.pages') }}
            </a>
            <!-- Sidenav Link (Articles)-->
            <a class="nav-link" href="{{ route('admin.articles.index') }}">
                <div class="nav-link-icon"><i class="fas fa-book-spells"></i></div>
                {{ __('messages.articles') }}
            </a>
            <!-- Sidenav Link (Settings)-->
            <a class="nav-link" href="{{ route('admin.settings.index') }}">
                <div class="nav-link-icon"><i class="fas fa-cogs"></i></div>
                {{ __('messages.settings') }}
            </a>

        </div>
    </div>
    <!-- Sidenav Footer-->
    <div class="sidenav-footer">
        <div class="sidenav-footer-content">
            <div class="sidenav-footer-subtitle">{{ __('auth.loggedinas') }}:</div>
            <div class="sidenav-footer-title">{{ Auth::user()->name }}</div>
        </div>
    </div>
</nav>
