@extends('layouts.app', ['title' => 'Edit Contact'])

@section('content')
    <h1 class="text-lg font-semibold mb-4">Edit Contact</h1>

    <form action="{{ route('contacts.update', $contact) }}" method="POST">
        @csrf
        @method('PUT')
        @include('contacts._form', ['contact' => $contact])
    </form>
@endsection
