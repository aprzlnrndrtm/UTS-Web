@php $isEdit = isset($product); @endphp
<div class="mb-3">
    <label class="form-label">Kategori</label>
    <select name="category_id" class="form-select @error('category_id') is-invalid @enderror">
        <option value="">-- Pilih Kategori --</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" @selected(old('category_id', $product->category_id ?? '') == $category->id)>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    @error('category_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
<div class="mb-3">
    <label class="form-label">Nama Produk</label>
    <input type="text" name="name" value="{{ old('name', $product->name ?? '') }}" class="form-control @error('name') is-invalid @enderror">
    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
<div class="mb-3">
    <label class="form-label">Harga (Rp)</label>
    <input type="number" name="price" value="{{ old('price', $product->price ?? '') }}" class="form-control @error('price') is-invalid @enderror">
    @error('price') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
<div class="mb-3">
    <label class="form-label">Deskripsi</label>
    <textarea name="description" rows="4" class="form-control @error('description') is-invalid @enderror">{{ old('description', $product->description ?? '') }}</textarea>
    @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
<div class="mb-3">
    <label class="form-label">Foto Produk (jpg/png/webp, maks 2 MB)</label>
    <input type="file" name="image" accept="image/*" class="form-control @error('image') is-invalid @enderror">
    @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror
    @if ($isEdit && $product->image)
        <img src="{{ asset('storage/' . $product->image) }}" width="120" class="rounded mt-2 d-block">
        <small class="text-muted">Kosongkan jika tidak ingin mengganti foto.</small>
    @endif
</div>
<a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary">Batal</a>
<button type="submit" class="btn btn-primary">Simpan</button>
