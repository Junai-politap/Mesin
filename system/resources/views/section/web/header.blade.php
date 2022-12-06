<!-- Header desktop -->
<nav class="container-header-desktop">
    <div class="top-bar">
        <div class="content-topbar container flex-sb-c h-full">
            <div class="size-w-0 flex-wr-s-c">
                <div class="t1-s-1 cl-13 m-r-50">
                    <span class="fs-16 m-r-6">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </span>
                    <span>Selamat Datang Di Website Perawatan dan Perbaikan Mesin</span>
                </div>
            </div>

            <div class="text-nowrap">
                <a href="https://www.facebook.com/mesin.ppm" target="_blank" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                    <i class="fa fa-facebook-official"></i>	
                </a>
                <a href="https://www.instagram.com/ppmpolitap/" target="_blank" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                    <i class="fa fa-instagram"></i>	
                </a>
                <a href="{{ url('login') }}" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                    <i class="fa fa-log-in"></i> Login
                </a>


            </div>
        </div>
    </div>

    <div class="wrap-menu-desktop">
        <div class="limiter-menu-desktop container">
            <!-- Logo desktop -->
            <div class="logo">
                <a href="index.html"><img src="{{ url('public') }}/logo.png" alt="LOGO"></a>
            </div>

            <!-- Menu desktop -->
            <div class="menu-desktop">
                <ul class="main-menu respon-sub-menu">
                    <li>
                        <a href="{{ url('/') }}">Dashboard</a>
                    </li>

                    <li>
                        <a href="">Profil</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('profil-pimpinan') }}">Profil Pimpinan</a></li>
                            <li><a href="{{ url('profil-dosen') }}">Profil Dosen</a></li>
                            <li><a href="{{ url('profil-admin-teknisi') }}">Profil Admin/Teknisi</a></li>
                            <li><a href="{{ url('visi-misi') }}">Visi Misi Jurusan</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="">Akademik</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('akademik/kurikulum') }}">Kurikulum</a></li>
                            <li><a href="{{ url('pedoman') }}"> Pedoman</a></li>
                            <li><a href="{{ url('akademik/tugas-akhir') }}">Tugas Akhir</a></li>
                            <li><a href="{{ url('akademik/akreditasi') }}">Akreditasi</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="">Hibah</a>
                        <ul class="sub-menu">
                            <li><a href="#"> Penelitian</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('jurnal/penelitian-pusat') }}">Penelitian Pusat</a></li>
                                    <li><a href="{{ url('jurnal/penelitian-internal') }}"> Penelitian Internal</a></li>
                                </ul>
                            </li>
                            <li><a href="#"> Pengabdian</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('jurnal/pengabdian-internal') }}"> Pengabdian Internal</a></li>
                                    <li><a href="{{ url('jurnal/pengabdian-dosen') }}"> Pengabdian Dosen</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('jurnal/pengabdian-mahasiswa') }}" style="font-size: 90%"> Pengabdian
                                    Mahasiswa</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="">Fasilitas</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('fasilitas-ruang-kelas') }}"> Ruang Kelas</a></li>
                            <li><a href="{{ url('fasilitas-workshop') }}"> Workshop</a></li>
                            <li><a href="#">
                                    <p>Laboratorium</p>
                                    <p style="font-size: 90%">Perawatan dan Perbaikan</p>

                                </a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('fasilitas-laboratorium-mekanik') }}"> Laboratorium Mekanik</a></li>
                                    <li><a href="{{ url('fasilitas-laboratorium-pnuematik-dan-hidrolik') }}" style="font-size: 90%"> Pnuematik dan Hidrolik</a></li>
                                    <li><a href="{{ url('fasilitas-laboratorium-mekanika-fluida') }}"> Mekanika Fluida</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="">Event & Galeri </a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('event/publikasi') }}"> Publikasi</a></li>
                            <li><a href="{{ url('event/seminar') }}"> Seminar</a></li>
                            <li><a href="{{ url('event/galeri') }}"> Galeri</a></li>
                            <li><a href="{{ url('event/video') }}"> Video</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ url('kerjasama') }}"> Kerjasama</a>
                    </li>
                    <li>
                        <a href="">Papan Informasi </a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('lowongan') }}"> Lowongan</a></li>
                            <li><a href="{{ url('berita') }}"> Berita</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('alumni') }}"> Alumni</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- Header Mobile -->
<nav class="container-header-mobile">
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="index.html"><img src="{{ url('public') }}/logo.png" alt="LOGO"></a>
        </div>


        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>
    </div>

    <div class="menu-mobile">
        <ul class="top-bar-m p-l-20 p-tb-8">
            <li>
                <div class="t1-s-1 cl-5 p-tb-3">
                    <span class="fs-16 m-r-6">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </span>
                    <span>Selamat Datang Di Website Perawatan dan Perbaikan Mesin</span>
                </div>
            </li>

            <li>
                <div>
                    <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                        <i class=""></i> Login
                    </a>

                </div>
            </li>
        </ul>
    </div>
</nav>
