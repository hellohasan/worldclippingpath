@extends('layouts.backend')
@section('content')
    <x-button-layout :title="$page_title" icon="fas fas fa-list-ul" btnText="Create Service" btnIcon="fas fa-plus" :btnRoute="route('service-category.create')" :permissions="['service-category-create']">
        <table class="table table-stripe table-bordered">
            <thead>
                <tr>
                    <th>SL</th>
                    <th width="15%">Service</th>
                    <th width="20%">Title</th>
                    <th width="15%">Thumbnail</th>
                    <th width="30%">Description</th>
                    <th width="5%">Status</th>
                    <th width="10%">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $key=> $category)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $category->service->title }}</td>
                        <td>{{ $category->title }}</td>
                        <td>
                            <div id="demo1" class="cross2">
                                <a href="#"><img src="{{ $category->getFirstMediaUrl('service-category-before', 'thumb') }}" alt="before" /></a>
                                <a href="#"><img src="{{ $category->getFirstMediaUrl('service-category-after', 'thumb') }}" alt="after" /></a>
                            </div>
                        </td>
                        <td>{{ $category->description, 150 }}</td>
                        <td>
                            <x-status-badge :value="$category->status"></x-status-badge>
                        </td>
                        <td>
                            <x-edit-button :route="route('service-category.edit', $category->id)"></x-edit-button>
                            <x-delete-button :id="$category->id"></x-delete-button>
                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
        <x-delete-modal route="service-category.destroy"></x-delete-modal>
    </x-button-layout>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('plugin/cross2/css/jquery.cross2.min.css') }}">
@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.event.drag/2.2/jquery.event.drag.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.12/jquery.mousewheel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{ asset('plugin/cross2/js/jquery.cross2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.cross2').cross2({
                clickEnabled: true,
                easing: 'easeInBack',
                animationDuration: 500,
                mousewheelEnabled: true
            });
        });
    </script>
@endpush
