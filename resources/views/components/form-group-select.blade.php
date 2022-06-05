<div class="form-group {{ $col }}">
    <label for="{{ $name }}">{{ $label }}</label>
    <select id="{{ $name }}" name="{{ $name }}" class="form-control select2 @error($name) is-invalid @enderror" data-placeholder="Select {{ $label }}">
        <option></option>
        {{ $slot }}
    </select>
    @error($name)
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
    @enderror
</div>

@pushOnce('scripts')
    <script type="text/javascript" src="{{ asset('backend/js/form-group-select.js') }}"></script>
@endPushOnce
