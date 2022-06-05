@extends('layouts.backend')

@section('content')
    <x-content-card :title="$page_title">
        <x-form-post :action="route('update-basic-content')">
            <div class="form-row">
                <x-form-group-input col="col-md-6" name="title" label="Website Title" :value="env('APP_NAME')" />
                <div class="form-group col-md-6">
                    <label for="timezone">Web Timezone</label>
                    {!! Timezones::create('timezone', env('APP_TIMEZONE'), ['attr' => ['id' => 'timezone', 'class' => 'form-control select2']]) !!}
                </div>
            </div>
            <div class="form-row">
            </div>
            <x-form-group-button>Update Basic Setting</x-form-group-button>
        </x-form-post>
    </x-content-card>
@endsection
@push('scripts')
    <script src="{{ asset('backend/js/form-group-select.js') }}"></script>
@endpush
