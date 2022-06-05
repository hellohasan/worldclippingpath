@extends('layouts.backend')

@section('content')
    <x-content-card :title="$page_title" type="primary">
        <div class="container-fluid">
            {{-- <x-ui.form-group name="hasan" placeholder="hasan"></x-ui.form-group> --}}
            <h1 class="text-black-50">You are logged in!</h1>
        </div>
    </x-content-card>
@endsection
