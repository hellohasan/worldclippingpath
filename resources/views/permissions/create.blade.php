@extends('layouts.backend')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">{{ $page_title }}</h3>
                    <a href="{{ route('permissions.index') }}" class="btn btn-primary btn-sm float-right"><i class="fa fa-list"></i> Permission List</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    {!! Form::open(['route' => 'permissions.store', 'method' => 'POST']) !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Permission Name:</strong>
                                {!! Form::text('name', null, ['placeholder' => 'Write permission name', 'class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Assign Permission to Role:</strong>
                                <br />
                                @foreach ($roles as $value)
                                    <label>{{ Form::checkbox('role[]', $value->id, false, ['class' => 'name']) }}
                                        {{ $value->name }}</label>
                                    <br />
                                @endforeach
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="fas fa-paper-plane"></i> Submit Permission</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
@stop
