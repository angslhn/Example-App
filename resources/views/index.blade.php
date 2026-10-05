@extends('layouts.app')

@section('content')
    <div class="container home">
        <!-- Hero Beranda -->
        <section class="hero text-center">
            <p class="hero-greeting">Selamat datang di</p>
            <h1>Beranda Portofolio</h1>
            <p>
                Ini adalah halaman utama. Situs sederhana ini berisi portofolio pribadi:
                profil, pengalaman, hobi, lagu favorit, video karya, dan tautan media sosial.
            </p>
            <a class="btn" href="{{ route('portfolio') }}">Lihat Portfolio</a>
        </section>

        <footer>
            &copy; 2026 Portofolio Pribadi. Semua hak dilindungi.
        </footer>
    </div>
@endsection
