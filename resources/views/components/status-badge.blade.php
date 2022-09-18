@if ($value)
    <span class="badge badge-{{ $successClass }} text-uppercase">{{ $successText }}</span>
@else
    <span class="badge badge-{{ $failClass }} text-uppercase">{{ $failText }}</span>
@endif
