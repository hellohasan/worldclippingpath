@extends('layouts.backend')
@section('content')
    <x-button-layout icon="fas fas fa-plus" :title="$page_title" btnText="Service Category List" btnIcon="fas fa-list" :btnRoute="route('service-category.index')" :permissions="['service-category']">
        <x-form-post :action="route('service-category.store')" :enctype="true">
            <div class="form-row">
                <x-form-group-select col="col-md-12" label="Select Service" :options="$services" name="service_id" :value="old('service_id')"></x-form-group-select>
                <x-form-group-input col="col-md-12" label="Category Title" name="title" :value="old('title')"></x-form-group-input>
                <x-form-group-input type="file" col="col-md-6" label="Before Photo" name="before_photo" :value="old('before_photo')"></x-form-group-input>
                <x-form-group-input type="file" col="col-md-6" label="After Photo" name="after_photo" :value="old('after_photo')"></x-form-group-input>
                <x-form-group-textarea col="col-md-12" rows="5" label="Service Category Description" name="description" :value="old('description')"></x-form-group-textarea>
                <x-form-group-toggle col="col-md-6" label="Featured" name="featured" :value="old('featured')"></x-form-group-toggle>
                <x-form-group-toggle col="col-md-6" label="Status" name="status" :value="old('status')"></x-form-group-toggle>
                <x-form-group-button col="col-md-12" btnText="Submit Category"></x-form-group-button>
            </div>
        </x-form-post>
    </x-button-layout>
@endsection
