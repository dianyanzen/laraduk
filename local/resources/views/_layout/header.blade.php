<div id="topbar" class="topbar-transparent topbar-fullwidth dark visible-md visible-lg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="top-menu">
                            <li><a href="#">Phone: (022) 420-9891</a>
                            </li>
                            <li><a href="#">Email: <span>info@disdukcapil.bandung.go.id</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 hidden-xs">
                        <div class="social-icons social-icons-colored-hover">
                            <ul>
                                <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="social-instagram"><a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li class="social-youtube"><a href="#"><i class="fa fa-globe"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <header id="header" class="header-fullwidth header-transparent dark">
            <div id="header-wrap">
                <div class="container">

                    <div id="logo">
                        <a href="index.html" class="logo" data-dark-logo="{{ URL::asset('assets/images/logo-dark.png')}}">
                            <img src="{{ URL::asset('assets/images/logo-sidebar.png')}}" alt="Disduk Logo">
                        </a>
                    </div>

                    <div class="header-extras">
                        <ul>
                            <li class="dropdown">
                                <a @if ($page == 'home') href="#" onclick="gotolink()" @else href="#" @endif>
                                    <i class="fa fa-link"></i>
                                </a>
                            </li>
                            <li class="hidden-xs">

                                <div id="shopping-cart">
                                    <a href="#">
                                        <span class="shopping-cart-items">8</span>
                                        <i class="fa fa-download"></i>
                                    </a>
                                </div>

                            </li>
                        </ul>
                    </div>

                    <div id="mainMenu-trigger">
                        <button class="lines-button x"> <span class="lines"></span> </button>
                    </div>

                    <div id="mainMenu" class="menu-creative">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li @if ($page == 'home') class="current" @endif><a href="index.html">Home</a>
                                    </li>
                                    <li @if ($page == 'profil') class="current dropdown" @else class="dropdown" @endif> <a href="#">Profil</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#"><i class="fa fa-users"></i>Visi Dan Misi</a></li>
                                            <li><a href="#"><i class="fa fa-sitemap"></i>Struktur Organisasi</a></li>
                                            <li><a href="#"><i class="fa fa-tasks"></i>Tugas Pokok</a></li>
                                            <li><a href="#"><i class="fa fa-shield"></i>Dasar Hukum</a></li>
                                            <li><a href="#"><i class="fa fa-universal-access"></i>Maklumat Pelayanan</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li @if ($page == 'data') class="current dropdown" @else class="dropdown" @endif> <a href="#">Data Kependudukan</a>
                                       <ul class="dropdown-menu">
                                            <li><a href="#"><i class="fa fa-bar-chart"></i>Jenis Kelamin</a></li>
                                            <li><a href="#"><i class="fa fa-bar-chart"></i>Kartu Keluarga</a></li>
                                            <li><a href="#"><i class="fa fa-bar-chart"></i>Jenis Pendidikan</a></li>
                                            <li><a href="#"><i class="fa fa-bar-chart"></i>Status Pekawinan</a></li>
                                            <li><a href="#"><i class="fa fa-bar-chart"></i>Agama</a></li>
                                            <li><a href="#"><i class="fa fa-bar-chart"></i>Golongan Darah</a></li>
                                            <li><a href="#"><i class="fa fa-bar-chart"></i>Jenis Pekerjaan</a></li>
                                        </ul>
                                    </li>
                                    <li @if ($page == 'berita') class="current" @endif> <a href="#">Berita</a></li>
                                    <li @if ($page == 'layanan') class="current" @endif> <a href="#">Layanan</a></li>
                                    <li @if ($page == 'hubungi_kami') class="current" @endif> <a href="#">Hubungi Kami</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        