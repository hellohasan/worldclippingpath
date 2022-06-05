<div class="form-group {{ $col }}">
    <label for="{{ $name }}">{{ $label }}</label>
    <input id="{{ $name }}" name="{{ $name }}" data-toggle="toggle" {{ $value ? 'checked' : '' }} data-onstyle="success" data-offstyle="danger" data-on="{{ $onText }}" data-off="{{ $offText }}" data-width="100%" type="checkbox">
</div>

@pushOnce('styles')
    <link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap-toggle/css/bootstrap-toggle.css') }}">
@endPushOnce

@pushOnce('scripts')
    <script type="text/javascript" src="{{ asset('backend/plugins/bootstrap-toggle/js/bootstrap-toggle.js') }}"></script>
@endPushOnce
