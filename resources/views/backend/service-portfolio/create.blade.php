@extends('layouts.backend')
@section('content')
    <x-button-layout icon="fas fas fa-plus" :title="$page_title" btnText="Service Portfolio List" btnIcon="fas fa-list" :btnRoute="route('service-portfolio.index')" :permissions="['service-portfolio']">
        <x-form-post :action="route('service-portfolio.store')" :enctype="true">
            <div class="form-row">
                <x-form-group-select col="col-md-12" label="Select Service" :options="$services" name="service_id" :value="old('service_id')"></x-form-group-select>
                <x-form-group-input col="col-md-12" label="Portfolio Title" name="title" :value="old('title')"></x-form-group-input>
                <x-form-group-input type="file" col="col-md-4" label="Before Photo" name="before_photo" message="Image Size: (420X450)px"></x-form-group-input>
                <x-form-group-input type="file" col="col-md-4" label="After Photo" name="after_photo" message="Image Size: (420X450)px"></x-form-group-input>
                <x-form-group-input type="file" col="col-md-4" label="Both Photo" name="both_photo" message="Image Size: (420X450)px"></x-form-group-input>
                <x-form-group-toggle col="col-md-6" label="Featured" name="featured" :value="old('featured')"></x-form-group-toggle>
                <x-form-group-toggle col="col-md-6" label="Status" name="status" :value="old('status')"></x-form-group-toggle>
                <x-form-group-button col="col-md-12" btnText="Submit Portfolio"></x-form-group-button>
            </div>
        </x-form-post>
    </x-button-layout>
@endsection
