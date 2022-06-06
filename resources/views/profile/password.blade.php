@extends('layouts.backend')

@section('content')
    <x-basic-layout :title="$page_title" icon="fas fa-lock-open">

        <form class="form form-horizontal" action="" method="post">
            {{ csrf_field() }}
            <div class="form-body">


                <div class="form-group row">
                    <label for="current-password" class="col-sm-2 col-form-label text-lg-right">Current Password:</label>
                    <div class="col-sm-8">
                        <input type="password" id="current-password" class="form-control" value="" placeholder="Current Password" name="current_password" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="new-password" class="col-sm-2 col-form-label text-lg-right">New Password:</label>
                    <div class="col-sm-8">
                        <input type="password" id="new-password" class="form-control" value="" placeholder="New Password" name="password" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="confirm-password" class="col-sm-2 col-form-label text-lg-right">Confirm Password:</label>
                    <div class="col-sm-8">
                        <input type="password" id="confirm-password" class="form-control" value="" placeholder="Confirm Password" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-8 offset-2">
                        <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="ft-navigation"></i> Update Now</button>
                    </div>
                </div>
            </div>
        </form>

    </x-basic-layout>
@endsection
