<div class="form-group {{ $col }}">
    <label for="{{ $name }}">{{ $label }}:</label>
    <input id="{{ $name }}"
           name="{{ $name }}"
           value="{{ $value }}"
           type="{{ $getType }}"
           @if ($step) step="{{ $step }}" @endif
           class="form-control @error($name) is-invalid @enderror"
           @if ($required) required @endif
           @if ($readonly) readonly @endif
           placeholder="{{ $label }}">
    @error($name)
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
    @enderror
</div>
