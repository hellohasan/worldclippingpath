@extends('layouts.backend')
@section('content')
    <x-button-layout icon="fas fas fa-edit" :title="$page_title" btnText="Service Category List" btnIcon="fas fa-list" :btnRoute="route('service-category.index')" :permissions="['service-category']">
        <x-form-post :action="route('service-category.update', $category->id)" :isPut="true" :enctype="true">
            <div class="form-row">
                <x-form-group-select col="col-md-12" label="Select Service" :options="$services" name="service_id" :value="$category->service_id"></x-form-group-select>
                <x-form-group-input col="col-md-12" label="Category Title" name="title" :value="$category->title"></x-form-group-input>
                <div class="from-group col-md-6">
                    <div class="form-group">
                        <label for="photo">Previous Before Photo:</label> <br>
                        <img src="{{ $category->getFirstMedia('service-category-before')->getUrl('thumb') }}" alt="">
                    </div>
                </div>
                <div class="from-group col-md-6">
                    <div class="form-group">
                        <label for="photo">Previous After Photo:</label> <br>
                        <img src="{{ $category->getFirstMedia('service-category-after')->getUrl('thumb') }}" alt="">
                    </div>
                </div>
                <x-form-group-input type="file" col="col-md-6" label="Before Photo" :required="false" name="before_photo"></x-form-group-input>
                <x-form-group-input type="file" col="col-md-6" label="After Photo" :required="false" name="after_photo"></x-form-group-input>
                <x-form-group-textarea col="col-md-12" rows="5" label="Service Category Description" name="description" :value="$category->description"></x-form-group-textarea>
                <x-form-group-toggle col="col-md-6" label="Featured" name="featured" :value="$category->featured"></x-form-group-toggle>
                <x-form-group-toggle col="col-md-6" label="Status" name="status" :value="$category->status"></x-form-group-toggle>
                <x-form-group-button col="col-md-12" btnText="Update Category"></x-form-group-button>
            </div>
        </x-form-post>
    </x-button-layout>
@endsection
