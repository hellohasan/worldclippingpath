@extends('layouts.backend')

@section('content')
    <x-button-layout :title="$page_title" icon="fas fa-users" btnText="Add User" btnIcon="fas fa-plus" :btnRoute="route('users.create')">

    </x-button-layout>
@endsection
