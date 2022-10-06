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
                            <img src="{{ $portfolio->getFirstMediaUrl('service-portfolio', 'thumb') }}" alt="both" />
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
