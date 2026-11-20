<div class="card product-card h-100 shadow-sm">
    @if ($product->image)
        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top product-img" alt="{{ $product->name }}">
    @else
        <div class="product-img product-placeholder d-flex align-items-center justify-content-center">Foto produk</div>
    @endif
    <div class="card-body d-flex flex-column">
        <span class="badge category-badge align-self-start mb-2">{{ $product->category->name }}</span>
        <h5 class="card-title">{{ $product->name }}</h5>
        <p class="card-text text-muted small">{{ \Illuminate\Support\Str::limit($product->description, 80) }}</p>
        <div class="mt-auto d-flex justify-content-between align-items-center">
            <strong class="text-brand">Rp {{ number_format($product->price, 0, ',', '.') }}</strong>
            <a href="{{ route('products.show', $product) }}" class="btn btn-sm btn-brand">Detail</a>
        </div>
    </div>
</div>
