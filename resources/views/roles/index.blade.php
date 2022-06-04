@extends('layouts.backend')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">{{ $page_title }}</h3>
                    <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm float-right"><i class="fa fa-plus"></i> Create New Role</a>
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
                                @foreach ($roles as $key => $role)
                                    <tr id="product{{ $role->id }}">
                                        <td>{{ $role->id }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>
                                            @if ($role->id != 1)
                                                <a class="btn btn-info btn-xs bold uppercase" href="{{ route('roles.show', $role->id) }}"><i class="fa fa-eye"></i> Show</a>
                                                @can('role-edit')
                                                    <a class="btn btn-primary btn-xs bold uppercase" href="{{ route('roles.edit', $role->id) }}"><i class="fa fa-edit"></i> Edit</a>
                                                @endcan
                                                @can('role-delete')
                                                    {!! Form::button('<i class="fa fa-trash"></i> Delete', ['class' => 'btn btn-danger btn-xs bold uppercase delete_button', 'data-toggle' => 'modal', 'data-target' => '#DelModal', 'data-id' => $role->id]) !!}
                                                @endcan
                                            @endif
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
    {{-- @include('backend.partials.__deleteModal',['route'=>route('roles.destroy', $role->id)]) --}}
@stop
@section('script')
    <script>
        $(document).ready(function() {
            $(document).on("click", '.delete_button', function(e) {
                var id = $(this).data('id');
                $("#delete_id").val(id);
            });
        });
    </script>
@stop
