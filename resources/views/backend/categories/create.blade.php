@extends('layouts.backend')
@section('content')
    <x-button-layout :title="$page_title" icon="fas fas fa-plus" btnText="Category List" btnIcon="fas fa-th-large" :btnRoute="route('categories.index')" :permissions="['categories']">
        <x-form-post :action="route('categories.store')">
            <div class="form-row">
                <x-form-group-input col="col-md-12" label="Category Name" name="name" :value="old('name')"></x-form-group-input>
                <x-form-group-toggle col="col-md-6" label="Featured" name="featured" :value="old('featured')"></x-form-group-toggle>
                <x-form-group-toggle col="col-md-6" label="Status" name="status" :value="old('status')"></x-form-group-toggle>
                <x-form-group-button col="col-md-12" btnText="Submit Category"></x-form-group-button>
            </div>
        </x-form-post>
    </x-button-layout>
@endsection
