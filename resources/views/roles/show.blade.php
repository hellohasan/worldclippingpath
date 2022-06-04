@extends('layouts.backend')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">{{$page_title}}</h3>
                    <a href="{{ route('roles.index') }}" class="btn btn-primary btn-sm float-right"><i class="fa fa-list"></i> Role List</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Role Name:</strong>
                                {{ $role->name }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Permissions ({{$rolePermissions->count()}}) :</strong>
                                @if(!empty($rolePermissions))
                                    @foreach($rolePermissions as $key => $v)
                                        <br><label class="label label-success">({{++$key}}) {{ $v->name }}</label>
                                    @endforeach
                                @else
                                    <br><label class="label label-success">No Permission Set yet.</label>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>

@endsection
