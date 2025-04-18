<x-guest-layout>
    <x-slot name="slot">
        <div class="menu-container">
            <h2>Create Product</h2>

            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="form-create">
                    <label for="name">Product Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required>
                    @error('name') 
                        <div class="form-error">{{ $message }}</div> 
                    @enderror
                </div>

                <div class="form-create">
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" value="{{ old('price') }}" required step="0.01">
                    @error('price') 
                        <div class="form-error">{{ $message }}</div> 
                    @enderror
                </div>

                <div class="form-create">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" >{{ old('description') }}</textarea>
                    @error('description') 
                        <div class="form-error">{{ $message }}</div> 
                    @enderror
                </div>

                <button type="submit" class="save-button">Save Product</button>
            </form>

            <a href="{{ route('products.index') }}" class="back-button">Back to Menu</a>
        </div>
    </x-slot>
</x-guest-layout>
