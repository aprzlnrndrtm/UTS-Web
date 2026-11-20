@extends('layouts.admin')
@section('title', 'Ubah Produk')
@section('content')
<div class="mb-4">
    <div class="eyebrow mb-1">Kelola katalog</div>
    <h1 class="admin-heading h3 fw-bold mb-0">Ubah Produk</h1>
</div>
<div class="card shadow-sm"><div class="card-body">
    <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        @include('admin.products._form')
    </form>
</div></div>
@endsection
