@extends('layouts.backend')
@section('content')
    <x-button-layout :title="$page_title" icon="fas fas fa-list-ul" btnText="Create Service" btnIcon="fas fa-plus" :btnRoute="route('services.create')" :permissions="['services-create']">
        <x-table :headers="['SL', 'Category', 'Title', 'Thumbnail', 'Description', 'Status', 'Action']">
            @forelse ($services as $key => $service)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $service->category->name }}</td>
                    <td>{{ $service->title }}</td>
                    <td>
                        <img class="img-thumbnail" src="{{ $service->getFirstMedia('services')->getUrl('small') }}" alt="">
                    </td>
                    <td>{{ $service->short_description }}</td>
                    <td>
                        <x-status-badge :value="$service->status"></x-status-badge>
                    </td>
                    <td>
                        <x-edit-button :route="route('services.edit', $service->id)"></x-edit-button>
                        <x-delete-button :id="$service->id"></x-delete-button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">No Record Found.</td>
                </tr>
            @endforelse
        </x-table>
        <x-delete-modal route="services.destroy"></x-delete-modal>
    </x-button-layout>
@endsection
