<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info col-sm-12 col-centered">
            <div class="image col-sm-12 col-centered">
                <img src="{{url('/asset/images/dokter.png')}}" width="48" height="48" alt="User" />
            </div>
            <div class="info-container col-sm-12 col-centered">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                <div class="email">john.doe@example.com</div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header"></li>
                <li class="header"></li>
                <li class="active">
                    <a href="{{ url('/rumahsakit') }}"><span>Home</span></a>
                </li>
                <li>
                    <a href="{{ url('/rumahsakit/profil') }}"><span>Profil</span></a>
                </li>
                <li>
                    <a href="{{ url('/rumahsakit/perawat') }}"><span>Perawat</span></a>
                </li>
                <li >
                    <a href="{{ url('/rumahsakit/perawat-add') }}"><span>Tambah Perawat</span></a>
                </li>
                <li>
                    <a href="{{ url('/rumahsakit/notifikasi') }}"><span>Notifikasi</span></a>
                </li>
                <li>
                    <a href="{{ url('/rumahsakit/logout') }}"><span>Log Out</span></a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
    </aside>
    <!-- #END# Right Sidebar -->
</section>
