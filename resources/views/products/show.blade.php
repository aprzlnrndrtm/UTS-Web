@extends('layouts.app')
@section('title', $product->name)
@section('content')
<div class="container py-5">
    <nav class="mb-4 small"><a class="text-decoration-none" href="{{ route('products.index') }}">&larr; Kembali ke daftar produk</a></nav>
    <div class="row g-4">
        <div class="col-md-5">
            @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" class="detail-image rounded-4 shadow-sm w-100" alt="{{ $product->name }}">
            @else
                <div class="detail-image product-placeholder rounded-4 d-flex align-items-center justify-content-center">Foto produk</div>
            @endif
        </div>
        <div class="col-md-7">
            <div class="product-detail-content h-100">
            <span class="badge category-badge">{{ $product->category->name }}</span>
            <h1 class="fw-bold mt-2">{{ $product->name }}</h1>
            <h3 class="detail-price">Rp {{ number_format($product->price, 0, ',', '.') }}</h3>
            <p class="text-secondary lh-lg mt-3">{{ $product->description }}</p>
            <a href="{{ route('products.index') }}" class="btn btn-brand mt-2">Lihat produk lainnya</a>
            </div>
        </div>
    </div>
    @if ($related->count())
        <hr class="my-5">
        <h4 class="mb-3">Produk Terkait</h4>
        <div class="row g-4">
            @foreach ($related as $item)
                <div class="col-12 col-sm-6 col-lg-4">@include('products._card', ['product' => $item])</div>
            @endforeach
        </div>
    @endif
</div>
@endsection
