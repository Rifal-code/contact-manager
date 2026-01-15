@extends('layouts.app', ['title' => 'Detail Contact'])

@section('content')
    <h1 class="text-lg font-semibold mb-4">Detail Contact</h1>

    <div class="space-y-2 text-sm">
        <div><span class="font-medium">Nama:</span> {{ $contact->name }}</div>
        <div><span class="font-medium">Email:</span> {{ $contact->email ?? '-' }}</div>
        <div><span class="font-medium">Phone:</span> {{ $contact->phone ?? '-' }}</div>
        <div><span class="font-medium">Alamat:</span> {{ $contact->address ?? '-' }}</div>
        <div><span class="font-medium">Catatan:</span> {{ $contact->notes ?? '-' }}</div>
    </div>

    <div class="mt-4 flex gap-2">
        <a href="{{ route('contacts.edit', $contact) }}" class="px-4 py-2 rounded bg-amber-600 text-white hover:bg-amber-700">
            Edit
        </a>

        <form action="{{ route('contacts.destroy', $contact) }}" method="POST"
            onsubmit="return confirm('Yakin hapus contact ini?')">
            @csrf
            @method('DELETE')
            <button class="px-4 py-2 rounded bg-red-600 text-white hover:bg-red-700">
                Hapus
            </button>
        </form>

        <a href="{{ route('contacts.index') }}" class="px-4 py-2 rounded border hover:bg-gray-50">
            Kembali
        </a>
    </div>
@endsection
