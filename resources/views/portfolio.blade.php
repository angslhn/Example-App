@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Judul Halaman -->
        <h1 class="text-center">Portofolio Pribadi</h1>

        <!-- Gambar Profil -->
        <div class="text-center">
            <img src="{{ asset('images/angslhn.jpeg') }}" alt="Gambar Profil">
        </div>

        <!-- Tentang Saya -->
        <section>
            <h2 class="text-center">Tentang Saya</h2>
            <p class="text-center">Selamat datang di portofolio saya! Saya adalah seorang pengembang pemula yang semangat.
            </p>
            <blockquote class="text-center">
                "Machine."
            </blockquote>
        </section>

        <!-- Pengalaman Kerja -->
        <section>
            <h2 class="text-center">Pengalaman Kerja</h2>
            <table>
                <thead>
                    <tr>
                        <th scope="col">Posisi</th>
                        <th scope="col">Perusahaan</th>
                        <th scope="col">Tahun</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Hobi -->
        <section>
            <h2>Hobi Saya</h2>
            <ul>
                <li>Membaca</li>
                <li>Olahraga</li>
                <li>Ngoding</li>
                <li>Main Game</li>
            </ul>

            <ol>
                <li>Belajar Bahasa Inggris</li>
                <li>Membuat Website</li>
            </ol>
        </section>

        <!-- Audio -->
        <section>
            <h2 class="text-center">Lagu Favorit</h2>
            <audio controls>
                <source src="{{ asset('music/D1.mp3') }}" type="audio/mpeg">
                Browser Anda tidak mendukung pemutar audio.
            </audio>
        </section>

        <!-- Video Karya -->
        <section>
            <h2 class="text-center">Video Karya</h2>
            <iframe width="640" height="360" src="https://www.youtube.com/embed/VIDEO_ID" title="Video karya"
                allowfullscreen></iframe>
        </section>

        <!-- Link ke Media Sosial -->
        <section>
            <h2 class="text-center">Ikuti Saya</h2>
            <p class="text-center">
                <a href="https://www.instagram.com/angslhn" target="_blank" rel="noopener">Instagram</a>
                <a href="https://www.linkedin.com/in/angslhn" target="_blank" rel="noopener">LinkedIn</a>
            </p>
        </section>

        <!-- Footer -->
        <footer>
            &copy; 2026 Portofolio Pribadi. Semua hak dilindungi.
        </footer>
    </div>
@endsection
