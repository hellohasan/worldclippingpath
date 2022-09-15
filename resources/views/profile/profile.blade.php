@extends('layouts.backend')

@section('content')
    <x-basic-layout :title="$page_title" icon="fas fa-user">
        <x-form-post :action="route('update-profile')" :enctype="true">
            <form class="form-horizontal">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Name:</label>
                    <div class="col-sm-8">
                        <input type="text" id="projectinput1" class="form-control" value="{{ $user->name }}" placeholder="Name" name="name" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">E-mail:</label>
                    <div class="col-sm-8">
                        <input type="email" id="projectinput2" class="form-control" value="{{ $user->email }}" placeholder="Email" name="email" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label text-lg-right">Avatar:</label>
                    <div class="col-sm-8">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="width: 215px; height: 215px;" data-trigger="fileinput">
                                <img style="width: 215px" src="{{ $user->avatar }}" alt="User Avatar">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="width: 215px; height: 215px"></div>
                            <div>
                                <span class="btn btn-info btn-file">
                                    <span class="fileinput-new bold uppercase"><i class="fas fa-folder-open"></i> Select image</span>
                                    <span class="fileinput-exists bold uppercase"><i class="fas fa-edit"></i> Change</span>
                                    <input type="file" name="avatar" accept="image/*">
                                </span>
                                <a href="#" class="btn btn-danger fileinput-exists bold uppercase" data-dismiss="fileinput"><i class="fas fa-trash"></i> Remove</a>
                            </div>
                        </div> <br>
                        <code>Image must me less then 500kb and it will resize 215X215 px.</code>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-2">
                        <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="ft-navigation"></i> Update Now</button>
                    </div>
                </div>
            </form>
        </x-form-post>
    </x-basic-layout>
@endsection

@pushOnce('styles')
    <link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap-fileinput/css/bootstrap-fileinput.css') }}">
@endPushOnce

@pushOnce('scripts')
    <script type="text/javascript" src="{{ asset('backend/plugins/bootstrap-fileinput/js/bootstrap-fileinput.js') }}"></script>
@endPushOnce
