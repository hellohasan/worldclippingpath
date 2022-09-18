<section class="content">
    <div class="container-fluid">
        <div class="card card-{{ $type }}">
            <div class="card-header">
                <h3 class="card-title">
                    @if ($icon)
                        <i class="{{ $icon }}"></i>
                    @endif {{ $title }}
                </h3>
                @if ($btnAction)
                    <div class="card-tools">
                        @if (count($permissions))
                            @can($permissions)
                                <a class="btn btn-{{ $btnClass }} btn-sm yy" href="{{ $btnRoute }}"><i class="{{ $btnIcon }}"></i> {{ $btnText }}</a>
                            @endcan
                        @else
                            <a class="btn btn-{{ $btnClass }} btn-sm nnn" href="{{ $btnRoute }}"><i class="{{ $btnIcon }}"></i> {{ $btnText }}</a>
                        @endif
                    </div>
                @endif
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                {{ $slot }}
            </div>
        </div>
    </div>
</section>
