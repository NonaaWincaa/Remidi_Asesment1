<nav>
    <div class="nav-container">
        <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
            <i class="fa-solid fa-house"></i> Beranda
        </a>
        <a href="{{ route('prediksi.form') }}" class="nav-link {{ request()->routeIs('prediksi.form') ? 'active' : '' }}">
            <i class="fa-solid fa-calculator"></i> Input Prediksi
        </a>
        <a href="{{ route('prediksi.riwayat') }}" class="nav-link {{ request()->routeIs('prediksi.riwayat') ? 'active' : '' }}">
            <i class="fa-solid fa-clock-rotate-left"></i> Riwayat
        </a>
        <a href="{{ route('prediksi.tentang') }}" class="nav-link {{ request()->routeIs('prediksi.tentang') ? 'active' : '' }}">
            <i class="fa-solid fa-circle-info"></i> Tentang
        </a>
    </div>
</nav>