@extends('layouts.backend')


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">{{ $page_title }}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-right">Heading</th>
                                <th>Information</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-right">Course Name</td>
                                <td>{{ $course->name }}</td>
                            </tr>
                            <tr>
                                <td class="text-right">Date Range</td>
                                <td>{{ $daterange }}</td>
                            </tr>
                            <tr>
                                <td class="text-right">Payment Type</td>
                                @if ($type == null)
                                    <td>Paid & Unpaid</td>
                                @elseif ($type == 1)
                                    <td>Paid</td>
                                @else
                                    <td>Unpaid</td>
                                @endif
                            </tr>
                            <tr>
                                <td class="text-right">Total Record</td>
                                <td>{{ $total }}'s Enroll</td>
                            </tr>
                            @if ($type == null || $type == 1)
                                <tr>
                                    <td class="text-right">Total Paid</td>
                                    <td>{{ $totalPaid }}'s Student</td>
                                </tr>
                            @endif
                            @if ($type == null || $type == 0)
                                <tr>
                                    <td class="text-right">Total Unpaid</td>
                                    <td>{{ $totalUnpaid }}'s Student</td>
                                </tr>
                            @endif
                            <tr>
                                <td class="text-right">Download Excel</td>
                                <td>
                                    <form action="{{ route('user.filter.excel') }}" role="form" method="post">
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="course_id" value="{{ $course->id }}">
                                        <input type="hidden" name="daterange" value="{{ $daterange }}">
                                        <input type="hidden" name="is_paid" value="{{ $type }}">
                                        <button class="btn btn-success btn-sm">Download Excel</button>
                                    </form>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-right">Action</td>
                                <td>
                                    <a href="{{ route('users.filter') }}" class="btn btn-primary btn-sm">User Filter</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
@endsection
