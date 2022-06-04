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
                                            <a class="btn btn-info btn-xs bold uppercase" href="{{ route('permissions.show', $permission->id) }}"><i class="fa fa-eye"></i> Show</a>
                                            @role('Super Admin')
                                                <a class="btn btn-primary btn-xs bold uppercase" href="{{ route('permissions.edit', $permission->id) }}"><i class="fa fa-edit"></i> Edit</a>
                                                {!! Form::button('<i class="fa fa-trash"></i> Delete', ['class' => 'btn btn-danger btn-xs bold uppercase delete_button', 'data-toggle' => 'modal', 'data-target' => '#DelModal', 'data-id' => $permission->id]) !!}
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
    {{-- @include('backend.partials.__deleteModal', ['route' => route('permissions.destroy', $permission->id)]) --}}
@stop
@section('script')
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
@stop
