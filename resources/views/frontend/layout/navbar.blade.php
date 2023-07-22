<div class="navigasi">
    <div class="logo_trevo">
        <a href="#">
            <img src="{{asset('/asset/navbar/logo_trevo.png') }}" alt="" class="navigasi__logo">
        </a>
    </div>
    <div class="navbar__support" id="mainNavbar">
        <ul class="navbar__nav">
            <li class="navbar__item"><a href="#"> GUEST </a></li>
            <li class="navbar__item"><a href="#"> HOST </a></li>
            <li class="navbar__item submenu"><a href="#"> BLOG</a>
                <ul class="navbar__subnav">
                    <li class="navbar__subnav__item"><a href="#"> Trevo Story</a></li>
                    <li class="navbar__subnav__item"><a href="#"> Host Community</a></li>
                </ul>
            </li>
            <li class="navbar__item submenu"><a href="#"> PELAJARI LEBIH LANJUT</a>
                <ul class="navbar__subnav pelajarLebihLanjut" id="pelajarLebihLanjut">
                    <li class="navbar__subnav__item" id="kepercayaan"><a href="#"> Kepercayaan dan keamanan</a></li>
                    <li class="navbar__subnav__item" id="FAQ"><a href="#"> FAQ</a></li>
                    <li class="navbar__subnav__item" id="hubungi__kami"><a href="#"> Hubungi Kami</a></li>
                </ul>

            </li>
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

<script>
window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    const scrollPosition = window.scrollY;

    // Tambahkan atau hilangkan kelas 'scrolled' berdasarkan posisi scroll
    if (scrollPosition > 0) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

const toggleButton = document.getElementById('humberger');
const content = document.getElementById('mainNavbar');
let isActive = false;

toggleButton.addEventListener('click', function() {
  // Toggle status aktif atau tidak aktif
  isActive = !isActive;

  // Ubah kelas CSS berdasarkan status toggle
  if (isActive) {
    content.classList.add('show__navbar');
  } else {
    content.classList.remove('show__navbar');
  }
});

</script>