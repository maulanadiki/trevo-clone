<div class="navigasi">
    <div class="logo_trevo">
        <a href="#">
            <img src="{{asset('/asset/navbar/logo_trevo.png') }}" alt="" class="navigasi__logo">
        </a>
    </div>
    <div class="navbar__support" id="mainNavbar">
        <ul class="navbar__nav">
            <li class="navbar__item"><a href="{{route('webpage') }}" class="{{Request::is('host') ? 'aktif' : '' }}"> GUEST </a></li>
            <li class="navbar__item {{Request::is('host') ? 'aktif' : '' }}"><a href="{{route('host') }}" class="{{Request::is('host') ? 'aktif' : '' }}"> HOST </a></li>
            <li class="navbar__item submenu"><a href="#"> BLOG</a>
                <ul class="navbar__subnav">
                    <li class="navbar__subnav__item"><a href="#" class="{{Request::is('host') ? 'story' : '' }}"> Trevo Story</a></li>
                    <li class="navbar__subnav__item"><a href="#" class="{{Request::is('host') ? 'community' : '' }}"> Host Community</a></li>
                </ul>
            </li>
            <li class="navbar__item submenu"><a href="#"> PELAJARI LEBIH LANJUT</a>
                <ul class="navbar__subnav pelajarLebihLanjut" id="pelajarLebihLanjut">
                    <li class="navbar__subnav__item" id="kepercayaan"><a href="#" class="{{Request::is('kepercayaan') ? 'aktif' : '' }}"> Kepercayaan dan keamanan</a></li>
                    <li class="navbar__subnav__item" id="FAQ"><a href="#" class="{{Request::is('FAQ') ? 'aktif' : '' }}"> FAQ</a></li>
                    <li class="navbar__subnav__item" id="hubungi__kami"><a href="#" class="{{Request::is('hubungi') ? 'aktif' : '' }}"> Hubungi Kami</a></li>
                </ul>

            </li>
            <li class="navbar__item"><a href="#" class="{{Request::is('login') ? 'aktif' : '' }}"> Login </a></li>
        </ul>
    </div>
    <div class="navbar__mobile">
        <a class="mobile__humberger" id="humberger">
            <div class="navbar__humberger"></div>
            <div class="navbar__humberger"></div>
            <div class="navbar__humberger"></div>
        </a>
    </div>
</div>
