<x-guest-layout>
    <x-slot name="slot">
        <div class="menu-container">
            <h2>Product Menu</h2>

            @if ($products->isEmpty())
                <p>Er zijn nog geen producten.</p>
            @else
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Discription</th>
                            @auth
                                @if (auth()->user()->role === 'admin')
                                    <th>Actions</th>
                                @endif
                            @endauth
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->description }}</td>
                                @auth
                                    @if (auth()->user()->role === 'admin')
                                        <td>
                                            <a href="{{ route('products.edit', $product->id) }}" class="edit-button">Edit</a>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="delete-button" type="submit">Delete</button>
                                            </form>
                                        </td>
                                    @endif
                                @endauth
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif

            @auth
                @if (auth()->user()->role === 'admin')
                    <a href="{{ route('products.create') }}" class="new-product-button">Add New Product</a>
                @endif
            @endauth
        </div>
    </x-slot>
</x-guest-layout>