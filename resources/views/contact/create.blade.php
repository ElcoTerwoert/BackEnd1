<x-guest-layout>
    <x-slot name="slot">
        <div class="menu-container">
            <h2>Contact Us</h2>

            @if (session('status'))
                <p class="form-success">{{ session('status') }}</p>
            @endif

            <form action="{{ route('contact.store') }}" method="POST">
                @csrf

                <div class="form-create">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required>
                    @error('name') 
                        <div class="form-error">{{ $message }}</div> 
                    @enderror
                </div>

                <div class="form-create">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                    @error('email') 
                        <div class="form-error">{{ $message }}</div> 
                    @enderror
                </div>

                <div class="form-create">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" required>{{ old('message') }}</textarea>
                    @error('message') 
                        <div class="form-error">{{ $message }}</div> 
                    @enderror
                </div>

                <button type="submit" class="save-button">Send Message</button>
            </form>

            <a href="{{ url('/products') }}" class="back-button">Back to Menu</a>
        </div>
    </x-slot>
</x-guest-layout>
