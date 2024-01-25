<li class="header">MENU UTAMA</li>
<li class="{{ set_active('dashboard') }}">
    <a href="{{ route('dashboard') }}">
        <i class="fa fa-television"></i>
        <span>Dashboard</span>
    </a>
</li>

<li class="{{ set_active(['kandidat','kandidat.create','kandidat.edit','kandidat.createMisi']) }}">
    <a href="{{ route('kandidat') }}">
        <i class="fa fa-users"></i>
        <span>Data Kandidat</span>
    </a>
</li>
<li class="{{ set_active(['dpt','dpt.create','dpt.edit','dpt.cari' ]) }}">
    <a href="{{ route('dpt') }}">
        <i class="fa fa-check-square-o"></i>
        <span>Data DPT</span>
    </a>
</li>
<li class="{{ set_active(['jadwal']) }}">
    <a href="{{ route('jadwal') }}">
        <i class="fa fa-clock-o"></i>
        <span>Jadwal Pemilihan</span>
    </a>
</li>
<li class="{{ set_active(['jadwal_kegiatan', 'jadwal_kegiatan.edit', 'jadwal_kegiatan.create']) }}">
    <a href="{{ route('jadwal_kegiatan') }}">
        <i class="fa fa-calendar-minus-o"></i>
        <span>Jadwal Kegiatan</span>
    </a>
</li>

<li class="{{ set_active(['contact', 'contact.edit', 'contact.create']) }}">
    <a href="{{ route('contact') }}">
        <i class="fa fa-gears"></i>
        <span>Contact Setting</span>
    </a>
</li>

<li class="{{ set_active(['user']) }}">
    <a href="{{ route('user') }}">
        <i class="fa fa-users"></i>
        <span>Manajemen User</span>
    </a>
</li>

<li class="{{ set_active(['rekapitulasi','rekapitulasi.cari']) }}">
    <a href="{{ route('rekapitulasi') }}">
        <i class="fa fa-line-chart"></i>
        <span>Rekapitulasi Data</span>
    </a>
</li>

<li class="{{ set_active(['statistik','statistik.cari']) }}">
    <a href="{{ route('statistik') }}">
        <i class="fa fa-line-chart"></i>
        <span>Statistik Pemilihan</span>
    </a>
</li>

<li class="{{ set_active(['rekapitulasi_suara']) }}">
    <a href="{{ route('rekapitulasi_suara') }}">
        <i class="fa fa-clock-o"></i>
        <span>Rekapitulasi Suara</span>
    </a>
</li>

<!-- Authentication -->
<li>
    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
        <i class="fa fa-sign-out text-danger"></i>
        <span>{{__('Logout') }}</span>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</li>
