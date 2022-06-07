<section class="content">
    <div class="container-fluid">
        <div class="card card-{{ $type }}">
            <div class="card-header">
                <h3 class="card-title">
                    @if ($icon)
                        <i class="{{ $icon }}"></i>
                    @endif {{ $title }}
                </h3>
                <div class="card-tools">
                    <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-plus"></i> Create New User</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                {{ $slot }}
            </div>
        </div>
    </div>
</section>
