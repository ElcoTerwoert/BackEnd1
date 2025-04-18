<x-guest-layout>
    <x-slot name="slot">
        <div class="menu-container">
            <h2>Contact Messages</h2>

            @if ($messages->isEmpty())
                <p>No messages yet.</p>
            @else
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $msg)
                            <tr>
                                <td>{{ $msg->name }}</td>
                                <td>{{ $msg->email }}</td>
                                <td>{{ $msg->message }}</td>
                                <td>{{ $msg->created_at->format('d M Y H:i') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif

            <a href="{{ url('/products') }}" class="back-button">Back to Menu</a>
        </div>
    </x-slot>
</x-guest-layout>
