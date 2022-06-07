@extends('layouts.backend')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">{{ $page_title }}</h3>
                    <a href="{{ route('permissions.create') }}" class="btn btn-primary btn-sm float-right"><i class="fa fa-plus"></i> Create New Permission</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="products-list">
                                @foreach ($permissions as $key => $permission)
                                    <tr id="product{{ $permission->id }}">
                                        <td>{{ $permission->id }}</td>
                                        <td>{{ $permission->name }}</td>
                                        <td>
                                            <x-show-button :route="route('permissions.show', $permission->id)" />
                                            @role('Super Admin')
                                                <x-edit-button :route="route('permissions.edit', $permission->id)" />
                                                <x-delete-button :id="$permission->id" />
                                            @endrole
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
    @include('backend.partials.__deleteModal')
@stop
@pushOnce('scripts')
    <script>
        $(document).ready(function() {
            $(document).on("click", '.delete_button', function(e) {
                var id = $(this).data('id');
                var url = '{{ route('permissions.destroy', ':id') }}';
                url = url.replace(':id', id);
                $("#deleteForm").attr("action", url);
                $("#delete_id").val(id);
            });
        });
    </script>
@endpushOnce
