@extends('layouts.master')

@section('title')
    Xem chi tiết: {{ $category['name'] }}
@endsection

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Trường</th>
                <th>Giá trị</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $key => $value)
                <tr>
                    <td>{{ $key }}</td>
                    <td>{{ $value }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection