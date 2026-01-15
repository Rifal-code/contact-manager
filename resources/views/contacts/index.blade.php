@extends('layouts.app', ['title' => 'Daftar Contact'])

@section('content')
    <div class="flex items-center justify-between mb-4">
        <h1 class="text-lg font-semibold">Daftar Contact</h1>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead>
                <tr class="text-left border-b">
                    <th class="py-2">Nama</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th class="w-56">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($contacts as $c)
                    <tr class="border-b">
                        <td class="py-2 font-medium">{{ $c->name }}</td>
                        <td>{{ $c->email ?? '-' }}</td>
                        <td>{{ $c->phone ?? '-' }}</td>
                        <td class="space-x-2">
                            <a class="text-blue-600 hover:underline" href="{{ route('contacts.show', $c) }}">Detail</a>

                            <a class="text-amber-600 hover:underline" href="{{ route('contacts.edit', $c) }}">Edit</a>

                            <form class="inline" action="{{ route('contacts.destroy', $c) }}" method="POST"
                                onsubmit="return confirm('Yakin hapus contact ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600 hover:underline" type="submit">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="py-4 text-gray-500" colspan="4">
                            Belum ada contact.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $contacts->links() }}
    </div>
@endsection
