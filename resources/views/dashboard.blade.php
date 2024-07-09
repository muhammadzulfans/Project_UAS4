@extends('layouts.app')

@section('contents')
<div class="container-fluid p-0">
    <div class="hero"
        style="background-image: url('https://www.indonesia.travel/content/dam/indtravelrevamp/en/destinations/revisi-2020/karimunimage2.jpg'); background-size: cover; background-position: center;">
        <div class="hero-content text-center text-white py-5">
            <h1 class="display-4" style="color: black; font-weight: bold;">Jelajahi Pulau Nusantara
                Bersama Kami</h1>
            <p class="lead" style="color: black; font-weight: bold;">Temukan paket wisata
                eksklusif dan layanan terbaik
                di perusahaan kami.</p>
        </div>
    </div>

    <div class="container my-5">
        <h2 class="text-center mb-4">Temukan Destinasi Baru</h2>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://lovebali.baliprov.go.id/storage/sliders/img-17032124256584f5896357a.jpg"
                        class="card-img-top" alt="Bali">
                    <div class="card-body text-center">
                        <h5 class="card-title">Liburan Eksotis ke Pulau Bali</h5>
                        <p class="card-text">Nikmati keindahan dan budaya Bali dengan paket lengkap
                            5 hari.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://res.klook.com/image/upload/fl_lossy.progressive,q_85/c_fill,w_1000/v1611142991/blog/s2f0oel5akgocmzdg31a.jpg"
                        class="card-img-top" alt="Yogyakarta">
                    <div class="card-body text-center">
                        <h5 class="card-title">Perjalanan Wisata Yogyakarta</h5>
                        <p class="card-text">Menyelami sejarah dan wisata alam Yogyakarta dengan
                            paket lengkap 5 hari.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://asset.kompas.com/crops/wzjVNbwZbaZR7Aalvnucx-oXcVo=/117x0:894x518/750x500/data/photo/2023/07/17/64b5545b0f691.jpg"
                        class="card-img-top" alt="Lombok">
                    <div class="card-body text-center">
                        <h5 class="card-title">Petualangan di Kota Malang</h5>
                        <p class="card-text">Temukan keajaiban alam Lombok dengan paket petualangan
                            5 hari yang seru.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://cdn-u1-gnfi.imgix.net/post/large-shutterstock-1145800691-4b9f5ffe3a262f9625e913c256620618.jpg?fit=crop&crop=faces,entropy&lossless=true&auto=compress,format&w=730&h=486"
                        class="card-img-top" alt="Raja Ampat">
                    <div class="card-body text-center">
                        <h5 class="card-title">Keajaiban Lautan Awan Dieng</h5>
                        <p class="card-text">Alami snorkeling dan diving kelas dunia di Raja Ampat
                            dengan paket 6 hari.</p>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="text-center mb-4">Testimoni Pelanggan</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <p class="card-text">"Liburan ke Bali sangat fantastis! Semuanya diatur
                            dengan sempurna dan kami sangat menikmati waktu kami."</p>
                        <footer class="blockquote-footer">John Doe, <cite
                                title="Source Title">TripAdvisor</cite></footer>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <p class="card-text">"Layanan yang sangat baik dan perhatian yang luar
                            biasa terhadap detail. Sangat direkomendasikan untuk rencana perjalanan
                            apapun."</p>
                        <footer class="blockquote-footer">Jane Smith, <cite
                                title="Source Title">Google Reviews</cite></footer>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <p class="card-text">"Paket wisata yang luar biasa dengan harga terjangkau.
                            Perjalanan kami ke Lombok tidak akan terlupakan!"</p>
                        <footer class="blockquote-footer">Robert Brown, <cite
                                title="Source Title">Facebook Reviews</cite></footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection