@extends('layouts.backend')


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">{{$page_title}}</h3>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('users.index') }}"> User List</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Register At:</strong>
                                {{ \Carbon\Carbon::parse($user->created_at)->toDateTimeString() }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>User Age:</strong>
                                {{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                {{ $user->name }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Email:</strong>
                                {{ $user->email }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Phone:</strong>
                                {{ $user->phone }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Roles:</strong>
                                @if(!empty($user->getRoleNames()))
                                    @foreach($user->getRoleNames() as $v)
                                        <label class="badge badge-success">{{ $v }}</label>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>No</th>
                                        <th>Course Name</th>
                                        <th>Enroll At</th>
                                        <th>Payment</th>
                                        <th width="17%">Action</th>
                                    </tr>
                                    @foreach ($user->enroll as $key => $enroll)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $enroll->course->name }}</td>
                                            <td>{{ \Carbon\Carbon::parse($enroll->created_at)->toFormattedDateString() }}</td>

                                            <td>
                                                @if(($enroll->isPaid))
                                                    <label class="badge badge-success">Paid</label>
                                                @else
                                                    <label class="badge badge-warning">pending</label>
                                                @endif
                                            </td>
                                            <td>
                                                @if($enroll->isPaid)
                                                    <button type="button"
                                                            class="btn btn-sm btn-warning bold uppercase publish_button"
                                                            data-toggle="modal" data-target="#StatusModal"
                                                            data-id="{{ $enroll->id }}" title="Make Unpaid">
                                                        <i class='fa fa-times'></i> Make Unpaid
                                                    </button>
                                                @else
                                                    <button type="button"
                                                            class="btn btn-sm btn-success bold uppercase publish_button"
                                                            data-toggle="modal" data-target="#StatusModal"
                                                            data-id="{{ $enroll->id }}" title="Make Paid">
                                                        <i class='fa fa-check'></i> Make Paid
                                                    </button>
                                                @endif
                                                    <button type="button"
                                                            class="btn btn-sm btn-danger bold uppercase delete_button"
                                                            data-toggle="modal" data-target="#DelModal"
                                                            data-id="{{ $enroll->id }}" title="Delete">
                                                        <i class='fa fa-trash'></i> Delete
                                                    </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
    <div class="modal fade" id="StatusModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel2"><i class='fa fa-exclamation-triangle'></i> Confirmation !
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <strong>Are you sure you want to change payment status ?</strong>
                </div>
                <div class="modal-footer">
                    <form method="post" action="{{ route('enroll-update') }}" class="form-inline">
                        {!! csrf_field() !!}
                        <input type="hidden" name="id" class="confirm_id" value="0">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close
                        </button>&nbsp;&nbsp;
                        <button type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i> Yes</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="DelModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel2"><i class='fa fa-exclamation-triangle'></i> Confirmation !
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <strong>Are you sure you want to Delete ?</strong>
                </div>

                <div class="modal-footer">
                    <form method="post" action="{{ route('enroll-delete') }}" id="deleteForm" class="form-inline">
                        {!! csrf_field() !!}
                        {{ method_field('DELETE') }}
                        <input type="hidden" name="id" class="delete_id" value="0">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close
                        </button>&nbsp;&nbsp;
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> DELETE</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function () {

            $(document).on("click", '.delete_button', function (e) {
                var id = $(this).data('id');
                $(".delete_id").val(id);
            });

        });
    </script>

    <script>
        $(document).ready(function (e) {
            $(document).on("click", '.publish_button', function (e) {
                var id = $(this).data('id');
                $(".confirm_id").val(id);
            });
        });
    </script>
@stop

