@extends('layouts.backend')

@section('content')
    <x-basic-layout type="primary" :title="$page_title" icon="fas fa-server">
        <x-basic-layout type="success" title="Server Information" icon="fas fa-info-circle">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Information</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>PHP VERSION</td>
                        <td>{{ $php }}</td>
                    </tr>
                    <tr>
                        <td>TIMEZONE</td>
                        <td>{{ $timeZone }}</td>
                    </tr>
                    <tr>
                        <td>REMOTE_ADDR</td>
                        <td>{{ $server['REMOTE_ADDR'] }}</td>
                    </tr>
                    <tr>
                        <td>REMOTE_PORT</td>
                        <td>{{ $server['REMOTE_PORT'] }}</td>
                    </tr>
                    <tr>
                        <td>SERVER_ADDR</td>
                        <td>{{ $server['SERVER_ADDR'] }}</td>
                    </tr>
                    <tr>
                        <td>SERVER_PORT</td>
                        <td>{{ $server['SERVER_PORT'] }}</td>
                    </tr>
                    <tr>
                        <td>SERVER_NAME</td>
                        <td>{{ $server['SERVER_NAME'] }}</td>
                    </tr>
                    <tr>
                        <td>SERVER_SOFTWARE</td>
                        <td>{{ $server['SERVER_SOFTWARE'] }}</td>
                    </tr>
                </tbody>
            </table>
        </x-basic-layout>
        <x-basic-layout type="info" title="System Information" icon="fas fa-info-circle">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Information</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Laravel Version</td>
                        <td>{{ $laravel }}</td>
                    </tr>
                    <tr>
                        <td>Laravel UI Version</td>
                        <td>v3.4</td>
                    </tr>
                    <tr>
                        <td>Spatie Laravel Permission</td>
                        <td>v5.5</td>
                    </tr>
                    <tr>
                        <td>Laravel-Mix</td>
                        <td>v6.0.6</td>
                    </tr>
                    <tr>
                        <td>Lodash</td>
                        <td>v4.17.19</td>
                    </tr>
                    <tr>
                        <td>Vue Js</td>
                        <td>v2.6.12</td>
                    </tr>
                    <tr>
                        <td>Vue Loader</td>
                        <td>v15.9.8</td>
                    </tr>
                    <tr>
                        <td>Vue-Template-Compiler</td>
                        <td>v2.6.12</td>
                    </tr>
                </tbody>
            </table>
        </x-basic-layout>
    </x-basic-layout>
@endsection
