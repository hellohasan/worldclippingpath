@extends('layouts.backend')
@section('content')
    <x-button-layout :title="$page_title" icon="fas fas fa-list-ul" btnText="Create Service Testimonial" btnIcon="fas fa-plus" :btnRoute="route('service-testimonial.create')" :permissions="['service-testimonial-create']">
        <table class="table table-stripe table-bordered">
            <thead>
                <tr>
                    <th width="5%">SL</th>
                    <th width="15%">Service</th>
                    <th width="15%">Client Name</th>
                    <th width="10%">Client Country</th>
                    <th width="10%">Thumbnail</th>
                    <th width="25%">Message</th>
                    <th width="10%">Status</th>
                    <th width="10%">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($testimonials as $key=> $testimonial)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $testimonial->service->title }}</td>
                        <td>{{ $testimonial->name }}</td>
                        <td>{{ $testimonial->country }}</td>
                        <td>
                            <img src="{{ $testimonial->getFirstMediaUrl('service-testimonial', 'thumb') }}" />
                        </td>
                        <td>{{ $testimonial->message }}</td>
                        <td>
                            <x-status-badge :value="$testimonial->status"></x-status-badge>
                        </td>
                        <td>
                            <x-edit-button :route="route('service-testimonial.edit', $testimonial->id)"></x-edit-button>
                            <x-delete-button :id="$testimonial->id"></x-delete-button>
                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
        <x-delete-modal route="service-testimonial.destroy"></x-delete-modal>
    </x-button-layout>
@endsection
