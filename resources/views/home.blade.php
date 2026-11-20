@extends('layouts.app')
@section('content')
<section class="hero py-5">
    <div class="container py-4 text-center text-lg-start">
        <div class="row align-items-center">
            <div class="col-lg-7 hero-copy">
                <div class="eyebrow mb-3">Rasa rumahan, kualitas pilihan</div>
                <h1 class="display-5 fw-bold text-brand mb-3">PT Anugerah Rizal Pangan</h1>
                <p class="lead text-secondary mb-4">Lezat, higienis, dan tepercaya — menghadirkan kebaikan di setiap sajian untuk keluarga Indonesia.</p>
                <a href="{{ route('products.index') }}" class="btn btn-brand btn-lg px-4">Jelajahi Produk</a>
            </div>
            <div class="col-lg-5 text-center mt-4 mt-lg-0">
                <div class="hero-visual mx-auto">
                    <div class="hero-logo-wrap">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo PT Anugerah Rizal Pangan" onerror="this.style.display='none'">
                    </div>
                    <div class="hero-caption text-start">
                        <span class="hero-caption-dot" aria-hidden="true"></span>
                        <div><strong>Mutu terjaga</strong><small>Di setiap sajian</small></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container quality-strip">
    <div class="row g-3">
        <div class="col-md-4"><div class="quality-item"><strong>Bahan pilihan</strong><span>Dipilih untuk rasa dan kualitas terbaik.</span></div></div>
        <div class="col-md-4"><div class="quality-item"><strong>Higienis dan terjaga</strong><span>Diproses dengan perhatian pada mutu.</span></div></div>
        <div class="col-md-4"><div class="quality-item"><strong>Praktis untuk keluarga</strong><span>Sajian lezat yang mudah dinikmati.</span></div></div>
    </div>
</section>
<section id="tentang" class="container py-5">
    <div class="text-center mb-4">
        <div class="eyebrow mb-2">Cerita kami</div>
        <h2 class="section-title fw-bold">Tentang Kami</h2>
    </div>
    <div class="row justify-content-center"><div class="col-lg-9">
        <p class="text-secondary lh-lg"><strong class="text-dark">PT Anugerah Rizal Pangan</strong> adalah perusahaan yang bergerak di bidang pengolahan dan penyediaan produk makanan berkualitas tinggi, higienis, dan bercita rasa autentik. Kami berkomitmen mengolah bahan baku pilihan terbaik dengan standar mutu yang terjaga di setiap proses produksinya.</p>
        <p class="text-secondary lh-lg mb-0">Bagi kami, makanan bukan sekadar pemenuh kebutuhan, melainkan sebuah anugerah yang membawa kebahagiaan dan kehangatan. Melalui inovasi berkelanjutan dan pelayanan yang amanah, kami hadir sebagai pilihan kuliner yang lezat, praktis, dan tepercaya.</p>
    </div></div>
</section>
<section class="container pb-4">
    <div class="text-center mb-4">
        <div class="eyebrow mb-2">Pilihan untuk Anda</div>
        <h2 class="section-title fw-bold">Produk Unggulan</h2>
    </div>
    <div class="row g-4">
        @forelse ($products as $product)
            <div class="col-12 col-sm-6 col-lg-4">@include('products._card', ['product' => $product])</div>
        @empty
            <p class="text-center text-muted">Belum ada produk.</p>
        @endforelse
    </div>
    <div class="text-center mt-4"><a href="{{ route('products.index') }}" class="btn btn-outline-dark">Semua Produk</a></div>
</section>
@endsection
