<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="/" class="b-brand">
                <img src="/assets/img/tayhu-logo-white-2.png" alt="" class="logo logo-lg" style="width: 100px;">
                <img src="/assets/img/tayhu-logo-white-2.png" alt="" class="logo logo-sm">
            </a>
        </div>
        <div class="navbar-content">
            <ul class="nxl-navbar">
                <li class="nxl-item nxl-caption">
                    <label>Navigation</label>
                </li>
                <li class="nxl-item">
                    <a @if( auth()->user()->role == 'admin')
                           href="{{ route('dashboard') }}"
                       @endif class="nxl-link">
                        <span class="nxl-micon"><i class="feather-airplay"></i></span>
                        <span class="nxl-mtext">Dashboards</span>
                    </a>
                </li>
                <li class="nxl-item">
                    <a href="{{ route('slider.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-users"></i></span> <!-- Employees icon -->
                        <span class="nxl-mtext">Home Slider</span>
                    </a>
                </li>
                <li class="nxl-item">
                    <a href="{{ route('contact.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-home"></i></span> <!-- Building icon -->
                        <span class="nxl-mtext">Contact</span>
                    </a>
                </li>
                <li class="nxl-item">
                    <a href="{{ route('categories.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-home"></i></span> <!-- Building icon -->
                        <span class="nxl-mtext">Category</span>
                    </a>
                </li>

                <li class="nxl-item">
                    <a href="{{ route('products.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-user"></i></span> <!-- Client icon -->
                        <span class="nxl-mtext">Products</span>
                    </a>
                </li>

                <li class="nxl-item">
                    <a href="{{ route('teams.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-file-text"></i></span> <!-- Contracts icon -->
                        <span class="nxl-mtext">Team</span>
                    </a>
                </li>
                <li class="nxl-item">
                    <a href="{{ route('portfolios.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-file-text"></i></span> <!-- Contracts icon -->
                        <span class="nxl-mtext">Portfolio</span>
                    </a>
                </li>
                <li class="nxl-item">
                    <a href="{{ route('licences.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-file-text"></i></span> <!-- Contracts icon -->
                        <span class="nxl-mtext">Litsenziya</span>
                    </a>
                </li>


            </ul>
        </div>
    </div>
</nav>
