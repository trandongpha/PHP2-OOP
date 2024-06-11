@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page_title_box d-flex align-items-center justify-content-between">
                <div class="page_title_left">
                    <h3 class="f_s_30 f_w_700 text_white">Dashboard</h3>
                    <ol class="breadcrumb page_bradcam mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Salessa </a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Sales</li>
                    </ol>
                </div>
                <a href="#" class="white_btn3">Create Report</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="white_card mb_20">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h3 class="m-0">Thống kê bài viết/sản phẩm</h3>
                        </div>
                    </div>
                </div>
                <div class="white_card_body">
                    <p>Tổng số bài viết/sản phẩm: {{ $totalItems }}</p>
                    <h5>Số lượng theo danh mục</h5>
                    <ul>
                        @foreach ($itemsByCategory as $category)
                            <li>{{ $category->name }}: {{ $category->items_count }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8 card_height_100">
            <!-- Phần còn lại của mã HTML -->
        </div>
    </div>
@endsection