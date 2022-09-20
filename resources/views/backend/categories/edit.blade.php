@extends('layouts.backend')
@section('content')
    <x-button-layout :title="$page_title" icon="fas fas fa-edit" btnText="Categories" btnIcon="fas fa-th-large" :btnRoute="route('categories.index')" :permissions="['categories']">
        <x-form-post :action="route('categories.update', $category->id)" :isPut="true">
            <div class="form-row">
                <x-form-group-input col="col-md-12" label="Category Name" name="name" :value="$category->name"></x-form-group-input>
                <x-form-group-toggle col="col-md-6" label="Featured" name="featured" :value="$category->featured"></x-form-group-toggle>
                <x-form-group-toggle col="col-md-6" label="Status" name="status" :value="$category->status"></x-form-group-toggle>
                <x-form-group-button col="col-md-12" btnText="Update Category"></x-form-group-button>
            </div>
        </x-form-post>
    </x-button-layout>
@endsection
