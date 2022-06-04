@extends('layouts.backend')

@section('pluginStyle')
    <link href="{{ asset('assets/backend/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/css/daterangepicker.css') }}" rel="stylesheet">
@stop
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">{{ $page_title }}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('user.filter.update') }}" role="form" method="post">
                        {!! csrf_field() !!}
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="course_id">Select Course</label>
                                <select name="course_id" id="course_id" class="form-control select2" required>
                                    <option value="">Select One</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="course_id">Chose Date Range</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" name="daterange" value="{{ old('daterange') }}" placeholder="Chose Date Range" class="form-control" id="daterange">
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="is_paid">Payment Status</label>
                                <select name="is_paid" id="is_paid" class="form-control select2">
                                    <option {{ old('isPaid') == '' ? 'selected' : '' }} value="">Paid & Unpaid</option>
                                    <option {{ old('isPaid') == '1' ? 'selected' : '' }} value="1">Only Paid</option>
                                    <option {{ old('isPaid') == '0' ? 'selected' : '' }} value="0">Only Unpaid</option>
                                </select>
                            </div>

                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Filter Data</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
@endsection
@section('pluginScript')
    <script src="{{ asset('assets/backend/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/daterangepicker.js') }}"></script>
@stop
@section('script')
    <script>
        $('.select2').select2({
            width: '100%'
        })
        $(function() {
            $('#daterange').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD',
                    separator: " to ",
                    cancelLabel: 'Clear'
                }
            });
        });
    </script>
@stop
