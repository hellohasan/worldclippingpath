@extends('layouts.backend')

@section('pluginStyle')
    <link rel="stylesheet" href="{{ asset('assets/backend/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/css/responsive.bootstrap4.min.css') }}">
@stop
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">{{ $page_title }}</h3>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('users.create') }}"> Create New User</a>
                        <a class="btn btn-success" href="{{ route('users-download-excel') }}"> <i class="fas file-excel"></i> Download Excel</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Register At</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                {{--<th>Roles</th>--}}
                                <th>Course</th>
                                <th width="17%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $key => $user)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ \Carbon\Carbon::parse($user->created_at)->toFormattedDateString() }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                {{--<td>
                                    @if(($user->getRoleNames()->count()))
                                        @foreach($user->getRoleNames() as $v)
                                            <label class="badge badge-success">{{ $v }}</label>
                                        @endforeach
                                    @else
                                        <label class="badge badge-warning">Not Assigned</label>
                                    @endif
                                </td>--}}
                                <td>{{$user->enroll->count()}} - Course</td>
                                <td>
                                    <a class="btn btn-info bold uppercase btn-xs" target="_blank" href="{{ route('users.show',$user->id) }}"><i class="far fa-eye"></i> Show</a>
                                    @if ($user->id !== 1)
                                        <a class="btn btn-primary bold uppercase btn-xs" target="_blank" href="{{ route('users.edit',$user->id) }}"><i class="fas fa-edit"></i> Edit</a>
                                        {!! Form::button('<i class="fa fa-trash"></i> Delete', ['class' => 'btn btn-danger btn-xs bold uppercase delete_button','data-toggle'=>"modal",'data-target'=>"#DelModal",'data-id'=>$user->id]) !!}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
    <div class="modal fade" id="DelModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel2"><i class='fa fa-trash'></i> Delete !</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <strong>Are you sure you want to Delete ?</strong>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('users.destroy', 0) }}" method="post" id="deleteForm">
                        {!! csrf_field() !!}
                        {!! method_field('DELETE') !!}
                        <input type="hidden" name="id" id="delete_id" class="delete_id" value="0">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        <button type="submit" class="btn btn-danger deleteButton"><i class="fa fa-trash"></i> DELETE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('pluginScript')
    <script src="{{ asset('assets/backend/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/responsive.bootstrap4.min.js') }}"></script>
@stop
@section('script')
    <script>
        $(function () {
            $("#example1").DataTable({
                responsive: true,
                autoWidth: false
            });
        });
        /*$(function() {
            $("#example1").DataTable({
                responsive: true,
                autoWidth: false,
                processing: true,
                serverSide: true,
                ajax: "{{ url('users') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                        "searchable": false,
                    },
                    {
                        data: 'name',
                        name: 'name',
                        "searchable": true,
                    },
                    {
                        data: 'email',
                        name: 'email',
                        "searchable": true,
                    },
                    {
                        data: 'phone',
                        name: 'phone',
                        "searchable": true,
                    },
                    {
                        data: 'role',
                        name: 'role',
                        "searchable": false,
                    },
                    {
                        data: 'course',
                        name: 'course',
                        "searchable": false,
                    },
                    {
                        data: 'action',
                        name: 'action',
                        "searchable": false,
                    }
                ]
            });
        });*/
    </script>
    <script>
        $(document).ready(function() {
            $(document).on("click", '.delete_button', function(e) {
                var id = $(this).data('id');
                var url = '{{ route('users.destroy', ':id') }}';
                url = url.replace(':id', id);
                $("#deleteForm").attr("action", url);
                $("#delete_id").val(id);
            });
        });
    </script>
@stop
