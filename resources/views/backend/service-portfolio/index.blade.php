@extends('layouts.backend')
@section('content')
    <x-button-layout :title="$page_title" icon="fas fas fa-list-ul" btnText="Create Service Portfolio" btnIcon="fas fa-plus" :btnRoute="route('service-portfolio.create')" :permissions="['service-portfolio-create']">
        <table class="table table-stripe table-bordered">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Service</th>
                    <th>Title</th>
                    <th>Thumbnail</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($portfolios as $key=> $portfolio)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $portfolio->service->title }}</td>
                        <td>{{ $portfolio->title }}</td>
                        <td>
                            <div id="demo1" class="cross2">
                                <a href="#"><img src="{{ $portfolio->getFirstMediaUrl('service-portfolio-before', 'thumb') }}" alt="before" /></a>
                                <a href="#"><img src="{{ $portfolio->getFirstMediaUrl('service-portfolio-after', 'thumb') }}" alt="after" /></a>
                            </div>
                        </td>
                        <td>
                            <x-status-badge :value="$portfolio->status"></x-status-badge>
                        </td>
                        <td>
                            <x-edit-button :route="route('service-portfolio.edit', $portfolio->id)"></x-edit-button>
                            <x-delete-button :id="$portfolio->id"></x-delete-button>
                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
        <x-delete-modal route="service-portfolio.destroy"></x-delete-modal>
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
