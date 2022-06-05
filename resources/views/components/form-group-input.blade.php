<div class="form-group {{ $col }}">
    <label for="{{ $name }}">{{ $label }}</label>
    <input id="{{ $name }}" name="{{ $name }}" value="{{ $getValue }}" type="{{ $getType }}" class="form-control @error($name) is-invalid @enderror" placeholder="{{ $label }}">
    @error($name)
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
    @enderror
</div>
