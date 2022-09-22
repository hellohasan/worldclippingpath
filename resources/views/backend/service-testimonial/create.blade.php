@extends('layouts.backend')
@section('content')
    <x-button-layout icon="fas fas fa-plus" :title="$page_title" btnText="Service Testimonial List" btnIcon="fas fa-list" :btnRoute="route('service-testimonial.index')" :permissions="['service-testimonial']">
        <x-form-post :action="route('service-testimonial.store')" :enctype="true">
            <div class="form-row">
                <x-form-group-select col="col-md-12" label="Select Service" :options="$services" name="service_id" :value="old('service_id')"></x-form-group-select>
                <x-form-group-input col="col-md-6" label="Client Name" name="name" :value="old('name')"></x-form-group-input>
                <x-form-group-input col="col-md-6" label="Client Country" name="country" :value="old('country')"></x-form-group-input>
                <x-form-group-textarea col="col-md-12" label="Client Message" name="message" :value="old('message')"></x-form-group-textarea>
                <x-form-group-photo col="col-md-6" label="Client Photo" name="photo" message="Image will resize: (67X67)px"></x-form-group-photo>
                <x-form-group-toggle col="col-md-6" label="Status" name="status" :value="old('status')"></x-form-group-toggle>
                <x-form-group-button col="col-md-12" btnText="Submit Testimonial"></x-form-group-button>
            </div>
        </x-form-post>
    </x-button-layout>
@endsection
