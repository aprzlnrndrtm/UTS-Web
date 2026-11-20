@extends('layouts.admin')
@section('title', 'Tambah Produk')
@section('content')
<div class="mb-4">
    <div class="eyebrow mb-1">Kelola katalog</div>
    <h1 class="admin-heading h3 fw-bold mb-0">Tambah Produk</h1>
</div>
<div class="card shadow-sm"><div class="card-body">
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.products._form')
    </form>
</div></div>
@endsection
