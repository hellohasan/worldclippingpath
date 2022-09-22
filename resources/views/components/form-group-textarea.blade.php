<div class="form-group {{ $col }}">
    <label for="{{ $name }}">{{ $label }}:</label>
    <textarea name="{{ $name }}"
              id="{{ $name }}"
              cols="30"
              rows="{{ $rows }}"
              class="form-control @error($name) is-invalid @enderror"
              @if ($required) required @endif
              @if ($readonly) readonly @endif
              placeholder="{{ $label }}">{{ $value }}</textarea>
    @error($name)
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
    @enderror
</div>
