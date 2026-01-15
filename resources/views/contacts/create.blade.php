@extends('layouts.app', ['title' => 'Tambah Contact'])

@section('content')
    <h1 class="text-lg font-semibold mb-4">Tambah Contact</h1>

    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        @include('contacts._form')
    </form>
@endsection
