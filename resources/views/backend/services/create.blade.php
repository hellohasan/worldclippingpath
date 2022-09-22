@extends('layouts.backend')
@section('content')
    <x-button-layout :title="$page_title" icon="fas fas fa-plus" btnText="Service List" btnIcon="fas fa-list-ul" :btnRoute="route('services.index')" :permissions="['services']">
        <x-form-post :action="route('services.store')" :enctype="true">
            <div class="form-row">
                <x-form-group-select col="col-md-12" label="Service Category" :options="$categories" name="category_id" :value="old('category_id')"></x-form-group-select>
                <x-form-group-input col="col-md-12" label="Service Title" name="title" :value="old('title')"></x-form-group-input>
                <x-form-group-textarea col="col-md-12" rows="3" label="Service Short Description" name="short_description" :value="old('short_description')"></x-form-group-textarea>
                <x-form-group-input-group type="number" col="col-md-6" label="Price (USD)" groupText="USD" step="0.001" name="price_usd" value="old('price_usd')"></x-form-group-input-group>
                <x-form-group-input-group type="number" col="col-md-6" label="Price (EURO)" groupText="EURO" step="0.001" name="price_eur" :value="old('price_eur')"></x-form-group-input-group>
                <x-form-group-photo col="col-md-12" label="Service Photo" name="photo"></x-form-group-photo>
                <x-form-group-toggle col="col-md-6" label="Featured" name="featured" :value="old('featured')"></x-form-group-toggle>
                <x-form-group-toggle col="col-md-6" label="Status" name="status" :value="old('status')"></x-form-group-toggle>
                <x-form-group-button col="col-md-12" btnText="Submit Service"></x-form-group-button>
            </div>
        </x-form-post>
    </x-button-layout>
@endsection
