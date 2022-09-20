<button type="button" class="btn btn-danger btn-xs font-weight-bold text-uppercase {{ $classBtn }}" data-toggle="modal" data-target="#{{ $modal }}" data-id="{{ $id }}">
    <i class="fa fa-trash"></i>
    @if ($text)
        Delete
    @endif
</button>
