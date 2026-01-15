<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Contact Manager' }}</title>

    {{-- cepat & simple: pakai Tailwind via CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="max-w-5xl mx-auto p-6">
        <div class="flex items-center justify-between mb-6">
            <a href="{{ route('contacts.index') }}" class="text-xl font-bold">Contact Manager</a>
            <a href="{{ route('contacts.create') }}"
               class="px-4 py-2 rounded bg-blue-600 text-white hover:bg-blue-700">
                + Tambah Contact
            </a>
        </div>

        @if (session('success'))
            <div class="mb-4 p-3 rounded bg-green-100 text-green-800">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-4 p-3 rounded bg-red-100 text-red-800">
                <div class="font-semibold mb-2">Terjadi error:</div>
                <ul class="list-disc ml-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="bg-white rounded shadow p-6">
            @yield('content')
        </div>
    </div>
</body>
</html>
