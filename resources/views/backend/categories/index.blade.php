@extends('layouts.backend')
@section('content')
    <x-button-layout :title="$page_title" icon="fas fas fa-th-large" btnText="Add Category" btnIcon="fas fa-plus" :btnRoute="route('categories.create')" :permissions="['categories.create']">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#SL</th>
                    <th>Name</th>
                    <th>Featured</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $key => $category)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <x-status-badge :value="$category->featured" successText="Featured" failText="Non Featured"></x-status-badge>
                        </td>
                        <td>
                            <x-status-badge :value="$category->status"></x-status-badge>
                        </td>
                        <td></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">No Category Found</td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </x-button-layout>
@endsection
