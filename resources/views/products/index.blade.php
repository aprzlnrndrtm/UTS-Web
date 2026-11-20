@extends('layouts.app')
@section('title', 'Produk - PT Anugerah Rizal Pangan')
@section('content')
<div class="container py-5">
    <div class="mb-4">
        <div class="eyebrow mb-2">Katalog</div>
        <h1 class="section-title fw-bold mb-1">Produk Kami</h1>
        <p class="text-secondary mb-0">Temukan pilihan hidangan praktis dan penuh cita rasa.</p>
    </div>
    <div class="filter-pills mb-4 d-flex flex-wrap gap-2">
        <a href="{{ route('products.index') }}" class="btn btn-sm {{ request('category') ? 'btn-outline-secondary' : 'btn-dark' }}">Semua</a>
        @foreach ($categories as $category)
            <a href="{{ route('products.index', ['category' => $category->slug]) }}" class="btn btn-sm {{ request('category') === $category->slug ? 'btn-dark' : 'btn-outline-secondary' }}">
                {{ $category->name }} ({{ $category->products_count }})
            </a>
        @endforeach
    </div>
    <div class="row g-4">
        @forelse ($products as $product)
            <div class="col-12 col-sm-6 col-lg-4">@include('products._card', ['product' => $product])</div>
        @empty
            <div class="col-12"><div class="card p-5 text-center text-secondary">Produk tidak ditemukan dalam kategori ini.</div></div>
        @endforelse
    </div>
    <div class="mt-4">{{ $products->links() }}</div>
</div>
@endsection
