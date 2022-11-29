<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">
                <li>
                    <a href="{{ url('admin') }}">
                        <i class="dripicons-home"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-database"></i>
                        <span> Master Data </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">

                        <li>
                            <a href="{{ url('admin/unit-kerja') }}">Unit Kerja</a>
                        </li>

                        <li>
                            <a href="{{ url('admin/pegawai') }}">Pegawai</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/mahasiswa') }}"> Mahasiswa </a>
                        </li>

                        <li>
                            <a href="{{ url('admin/visi-misi') }}"> Visi Misi</a>
                        </li>

                       
                    </ul>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-university"></i>
                        <span> Akademik </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ url('admin/kurikulum') }}"> Kurikulum</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/judul-tugas-akhir') }}"> Daftar Tugas Akhir</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/akreditasi') }}"> Akreditasi</a>
                        </li>
                    </ul>
                </li>
    
                <li>
                    <a href="#">
                        <i class="fa fa-book"></i>
                        <span> Jurnal </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ url('admin/injection') }}"> Injection</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/pengabdian') }}" style="font-size: 95%">Pengabdian Dosen</a>
                        </li>

                        <li>
                            <a href="{{ url('admin/pengabdian-mahasiswa') }}" style="font-size: 80%">Pengabdian Mahasiswa</a>
                        </li>
                        
                    </ul>
                </li>
    

                <li>
                    <a href="{{ url('admin/pedoman') }}">
                        <i class="fa fa-book"></i> <span> Pedoman </span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('admin/fasilitas') }}">
                        <i class="fa fa-bars"></i>
                        <span> Fasilitas </span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-bars"></i>
                        <span> Papan Informasi </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ url('admin/lowongan') }}">Lowongan</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/berita') }}"> Berita </a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="#">
                        <i class="fa fa-cog"></i>
                        <span> Home Base </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ url('admin/user') }}"> Users</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/slide') }}"> Slide </a>
                        </li>

                        <li>
                            <a href="{{ url('admin/video') }}"> Video </a>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href="{{ url('admin/contact') }}">
                        <i class="fa fa-envelope"></i>
                        <span> Komentar </span>
                        
                    </a>
                    
                </li>

            </ul>
        </div>

        <div class="clearfix"></div>

    </div>

</div>