<x-guest-layout>
    <x-slot name="slot">
        <div class="menu-container">
            <h2>Edit Product</h2>

            <form action="{{ route('products.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-edit">
                    <label for="name">Product Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" required>
                    @error('name') 
                        <div>{{ $message }}</div> 
                    @enderror
                </div>

                <div class="form-edit">
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}" required step="0.01">
                    @error('price') 
                        <div>{{ $message }}</div> 
                    @enderror
                </div>

                <div class="form-edit">
                    <label for="description">Description</label>
                    <textarea name="description" id="description">{{ old('description', $product->description) }}</textarea>
                    @error('description') 
                        <div>{{ $message }}</div> 
                    @enderror
                </div>

                <button type="submit" class="update-button">Update Product</button>
            </form>

            <a href="{{ route('products.index') }}" class="back-button">Back to Menu</a>
        </div>
    </x-slot>
</x-guest-layout>
