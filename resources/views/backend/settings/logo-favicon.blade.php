@extends('layouts.backend')

@section('content')
    <x-basic-layout :title="$page_title" icon="fas fa-images">
        <div class="callout callout-warning">
            <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
            <p>If logo or favicon are not change then press <code>CTRL+F5</code> or <code>CTRL+SHIFT+R</code> from keyboard or clear the browser cache. Because of system store the new logo or favicon as same name for this reason sometimes browser cache this old file, it will work good after clear the browser cache.</p>
        </div>
        <form action="{{ route('update-logo-favicon') }}" role="form" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="width: 200px; height: auto;" data-trigger="fileinput">
                                <img style="width: 200px" src="{{ asset('img/logo.png') }}" alt="logo">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 60px"></div>
                            <div>
                                <span class="btn btn-info btn-file">
                                    <span class="fileinput-new bold uppercase"><i class="fa fa-file-image-o"></i> Update Logo</span>
                                    <span class="fileinput-exists bold uppercase"><i class="fa fa-edit"></i> Change</span>
                                    <input type="file" name="logo" accept="image/*">
                                </span>
                                <a href="#" class="btn btn-danger fileinput-exists bold uppercase" data-dismiss="fileinput"><i class="fa fa-trash"></i> Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="width: 200px; height: auto;" data-trigger="fileinput">
                                <img style="width: 200px" src="{{ asset('img/footer-logo.png') }}" alt="logo">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 60px"></div>
                            <div>
                                <span class="btn btn-info btn-file">
                                    <span class="fileinput-new bold uppercase"><i class="fa fa-file-image-o"></i> Update Footer Logo</span>
                                    <span class="fileinput-exists bold uppercase"><i class="fa fa-edit"></i> Change</span>
                                    <input type="file" name="footer-logo" accept="image/*">
                                </span>
                                <a href="#" class="btn btn-danger fileinput-exists bold uppercase" data-dismiss="fileinput"><i class="fa fa-trash"></i> Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" style="width: 60px; height: auto;" data-trigger="fileinput">
                            <img style="width: 60px" src="{{ asset('img/favicon.png') }}" alt="logo">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 120px; max-height: 120px"></div>
                        <div>
                            <span class="btn btn-info btn-file">
                                <span class="fileinput-new bold uppercase"><i class="fa fa-file-image-o"></i> Update Favicon</span>
                                <span class="fileinput-exists bold uppercase"><i class="fa fa-edit"></i> Change</span>
                                <input type="file" name="favicon" accept="image/*">
                            </span>
                            <a href="#" class="btn btn-danger fileinput-exists bold uppercase" data-dismiss="fileinput"><i class="fa fa-trash"></i> Remove</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg bold uppercase">
                    <i class="fas fa-paper-plane"></i> Update Logo & Favicon
                </button>
            </div>
        </form>
    </x-basic-layout>
@endsection

@pushOnce('styles')
    <link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap-fileinput/css/bootstrap-fileinput.css') }}">
@endPushOnce

@pushOnce('scripts')
    <script type="text/javascript" src="{{ asset('backend/plugins/bootstrap-fileinput/js/bootstrap-fileinput.js') }}"></script>
@endPushOnce
