@extends('layouts.layout')

@section('content')
    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate onsubmit="updateEditorContent()">
        @csrf

        <main class="nxl-container">
            <div class="nxl-content">
                <!-- [ page-header ] start -->
                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Create Category</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item">Product</li>
                        </ul>
                    </div>
                    <div class="page-header-right ms-auto">
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <a href="javascript:void(0);" class="btn btn-light-brand" onclick="window.history.back();">
                                <i class="fas fa-arrow-left me-2"></i>
                                <span>Back</span>
                            </a>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </div>
                </div>
                <!-- [ page-header ] end -->

                <!-- [ Main Content ] start -->
                <div class="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card stretch stretch-full">
                                <div class="card-header">
                                    <h5 class="card-title">Category Details</h5>
                                </div>
                                <div class="card-body custom-card-action p-0">
                                    <ul class="nav-tab-items-wrapper nav nav-justified invoice-overview-tab-item">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link active" data-bs-toggle="tab" data-bs-target="#uzConTab">O'zbekcha</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#enConTab">English</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#ruConTab">Русский</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content p-4">
                                        <div class="tab-pane fade show active" id="uzConTab" role="tabpanel">
                                            <div class="form-group pb-3">
                                                <label for="name_uz">Category Name (UZ):</label>
                                                <input type="text" class="form-control w-50" id="name_uz" name="name_uz" value="{{ old('name_uz') }}" required>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="enConTab" role="tabpanel">
                                            <div class="form-group pb-3">
                                                <label for="name_en">Category Name (EN):</label>
                                                <input type="text" class="form-control w-50" id="name_en" name="name_en" value="{{ old('name_en') }}" required>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="ruConTab" role="tabpanel">
                                            <div class="form-group pb-3">
                                                <label for="name_ru">Category Name (RU):</label>
                                                <input type="text" class="form-control w-50" id="name_ru" name="name_ru" value="{{ old('name_ru') }}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </form>
@endsection
