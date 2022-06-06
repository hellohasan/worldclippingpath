@extends('layouts.backend')

@section('content')
    <x-basic-layout :title="$page_title">

        <x-form-post :action="route('update-basic-content')">
            <div class="form-row">
                <x-form-group-input col="col-md-12" label="Site Title" name="title"></x-form-group-input>
            </div>

            <div class="form-row">
                <x-form-group-select col="col-md-12" label="Name" name="title2" :options="$countries" selected=""></x-form-group-select>
            </div>

            <div class="form-row">
                <x-form-group-photo col="col-md-12" label="Select Image" name="image-img"> </x-form-group-photo>
            </div>

            <x-form-group-button>Update Basic Setting</x-form-group-button>
        </x-form-post>
    </x-basic-layout>
@endsection
