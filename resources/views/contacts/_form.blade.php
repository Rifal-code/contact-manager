@php
    $isEdit = isset($contact);
@endphp

<div class="grid gap-4">
    <div>
        <label class="block text-sm font-medium mb-1">Nama *</label>
        <input type="text" name="name" value="{{ old('name', $contact->name ?? '') }}"
            class="w-full border rounded px-3 py-2" required>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium mb-1">Email</label>
            <input type="email" name="email" value="{{ old('email', $contact->email ?? '') }}"
                class="w-full border rounded px-3 py-2">
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Phone</label>
            <input type="text" name="phone" value="{{ old('phone', $contact->phone ?? '') }}"
                class="w-full border rounded px-3 py-2">
        </div>
    </div>

    <div>
        <label class="block text-sm font-medium mb-1">Alamat</label>
        <textarea name="address" rows="3" class="w-full border rounded px-3 py-2">{{ old('address', $contact->address ?? '') }}</textarea>
    </div>

    <div>
        <label class="block text-sm font-medium mb-1">Catatan</label>
        <textarea name="notes" rows="3" class="w-full border rounded px-3 py-2">{{ old('notes', $contact->notes ?? '') }}</textarea>
    </div>

    <div class="flex gap-2">
        <button class="px-4 py-2 rounded bg-blue-600 text-white hover:bg-blue-700">
            {{ $isEdit ? 'Update' : 'Simpan' }}
        </button>
        <a href="{{ route('contacts.index') }}" class="px-4 py-2 rounded border hover:bg-gray-50">
            Kembali
        </a>
    </div>
</div>
