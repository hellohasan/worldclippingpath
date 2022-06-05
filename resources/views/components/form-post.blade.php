<form action="{{ $action }}" role="form" method="post" enctype="{{ $getEnctype }}">
    @csrf
    @if ($isPut)
        @method('put')
    @endif
    {{ $slot }}
</form>
