@extends('layouts.backend')

@section('content')
    <x-content-card :title="$page_title">

        <x-form-post :action="route('update-basic-content')">
            <div class="form-row">
                <x-form-group-input col="col-md-12" label="Site Title" name="title"></x-form-group-input>
            </div>

            <div class="form-row">
                <x-form-group-select col="col-md-12" label="Name" name="title2">
                    <option>hasan </option>
                    <option @selected(old('title2') == 'Hosen')>Hosen </option>
                    <option>Himu</option>
                </x-form-group-select>
            </div>

            <div class="form-row">
                <x-form-group-photo col="col-md-12" label="Select Image" name="image-img"> </x-form-group-photo>
            </div>

            <x-form-group-button>Update Basic Setting</x-form-group-button>
        </x-form-post>
    </x-content-card>
@endsection
