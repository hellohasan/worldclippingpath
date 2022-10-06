@extends('layouts.backend')
@section('content')
    <x-button-layout icon="fas fas fa-edit" :title="$page_title" btnText="Service Portfolio List" btnIcon="fas fa-list" :btnRoute="route('service-portfolio.index')" :permissions="['service-portfolio']">
        <x-form-post :action="route('service-portfolio.update', $portfolio)" :isPut="true" :enctype="true">
            <div class="form-row">
                <x-form-group-select col="col-md-12" label="Select Service" :options="$services" name="service_id" :value="$portfolio->service_id"></x-form-group-select>
                <x-form-group-input col="col-md-12" label="Portfolio Title" name="title" :value="$portfolio->title"></x-form-group-input>
                <div class="from-group col-md-4">
                    <div class="form-group">
                        <label for="photo">Previous Before Photo:</label> <br>
                        <img src="{{ $portfolio->getFirstMediaUrl('service-portfolio-before', 'thumb') }}" alt="">
                    </div>
                </div>
                <div class="from-group col-md-4">
                    <div class="form-group">
                        <label for="photo">Previous After Photo:</label> <br>
                        <img src="{{ $portfolio->getFirstMediaUrl('service-portfolio-after', 'thumb') }}" alt="">
                    </div>
                </div>
                <div class="from-group col-md-4">
                    <div class="form-group">
                        <label for="photo">Previous Both Photo:</label> <br>
                        <img src="{{ $portfolio->getFirstMediaUrl('service-portfolio', 'thumb') }}" alt="">
                    </div>
                </div>
                <x-form-group-input type="file" col="col-md-4" label="Before Photo" :required="false" name="before_photo" message="Image Size: (420X450)px"></x-form-group-input>
                <x-form-group-input type="file" col="col-md-4" label="After Photo" :required="false" name="after_photo" message="Image Size: (420X450)px"></x-form-group-input>
                <x-form-group-input type="file" col="col-md-4" label="Both Photo" :required="false" name="both_photo" message="Image Size: (420X450)px"></x-form-group-input>
                <x-form-group-toggle col="col-md-6" label="Featured" name="featured" :value="$portfolio->featured"></x-form-group-toggle>
                <x-form-group-toggle col="col-md-6" label="Status" name="status" :value="$portfolio->status"></x-form-group-toggle>
                <x-form-group-button col="col-md-12" btnText="Update Portfolio"></x-form-group-button>
            </div>
        </x-form-post>
    </x-button-layout>
@endsection
