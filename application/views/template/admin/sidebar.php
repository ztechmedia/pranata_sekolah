<li class="xn-title">Navigation</li>

<li class="dashboard">
    <a class="side-menu" data-url="<?=base_url("admin/dashboard")?>" data-menu=".dashboard"><span
            class="fa fa-desktop"></span> <span class="xn-text">Beranda</span></a>
</li>

<li class="xn-openable users">
    <a><span class="fa fa-users"></span> <span class="xn-text">Akun Pengguna</span></a>
    <ul>
        <li class="admin"><a class="side-submenu" data-url="<?=base_url("admin/users/1")?>" data-menu=".users"
                data-submenu=".admin"><span class="fa fa-circle"></span> Admin</a></li>

        <li class="teacher"><a class="side-submenu" data-url="<?=base_url("admin/users/2")?>" data-menu=".users"
                data-submenu=".teacher"><span class="fa fa-circle"></span> Guru</a></li>

        <li class="student"><a class="side-submenu" data-url="<?=base_url("admin/users/3")?>" data-menu=".users"
                data-submenu=".student"><span class="fa fa-circle"></span> Murid</a></li>
    </ul>
</li>

<li class="xn-openable master">
    <a><span class="fa fa-hdd-o"></span> <span class="xn-text">Master Data</span></a>
    <ul>
        <li class="classes"><a class="side-submenu" data-url="<?=base_url("admin/class")?>" data-menu=".master"
                data-submenu=".classes"><span class="fa fa-circle"></span> Kelas</a></li>
        <li class="semesters"><a class="side-submenu" data-url="<?=base_url("admin/semesters")?>" data-menu=".master"
                data-submenu=".semesters"><span class="fa fa-circle"></span> Semester</a></li>
        <li class="subjects"><a class="side-submenu" data-url="<?=base_url("admin/subjects")?>" data-menu=".master"
                data-submenu=".subjects"><span class="fa fa-circle"></span> Mata Pelajaran</a></li>
        <li class="teachers"><a class="side-submenu" data-url="<?=base_url("admin/teachers")?>" data-menu=".master"
                data-submenu=".teachers"><span class="fa fa-circle"></span> Guru</a></li>
        <li class="students"><a class="side-submenu" data-url="<?=base_url("admin/students")?>" data-menu=".master"
                data-submenu=".students"><span class="fa fa-circle"></span> Murid</a></li>
    </ul>
</li>

<li class="xn-openable relation">
    <a><span class="fa fa-book"></span> <span class="xn-text">Relasi</span></a>
    <ul>
        <li class="subclass"><a class="side-submenu" data-url="<?=base_url("admin/subclass")?>" data-menu=".relation"
                data-submenu=".subclass"><span class="fa fa-circle"></span> Kelas & Mapel</a></li>
    </ul>
</li>

<li class="xn-openable settings">
    <a><span class="fa fa-gear"></span> <span class="xn-text">Pengaturan</span></a>
    <ul>
        <li class="roles"><a class="side-submenu" data-url="<?=base_url("admin/roles")?>" data-menu=".settings"
                data-submenu=".roles"><span class="fa fa-lock"></span> Roles</a></li>
    </ul>
</li>