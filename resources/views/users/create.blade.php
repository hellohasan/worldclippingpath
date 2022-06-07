@extends('layouts.backend')

@section('content')
    <x-button-layout :title="$page_title" icon="fas fa-users" btnText="User List" btnIcon="fas fa-list" :btnRoute="route('users.index')">
        <x-form-post :action="route('users.store')">
            <div class="form-row">
                <x-form-group-input col="col-md-12" name="name" label="Write Name"></x-form-group-input>
                <x-form-group-input col="col-md-12" type="email" name="email" label="Write Email Address"></x-form-group-input>
                <x-form-group-select col="col-md-12" name="role_id" label="Select User Role" :options="$roles" selected="1"></x-form-group-select>
                <x-form-group-input col="col-md-6" name="password" type="password" label="Write Password"></x-form-group-input>
                <x-form-group-input col="col-md-6" name="password_confirmation" type="password" label="Confirm Password"></x-form-group-input>
            </div>
            <x-form-group-button icon="fas fa-plus" btnText="Create New User"></x-form-group-button>
        </x-form-post>
    </x-button-layout>
@endsection
