@extends('layouts.layout')

@section('content')
    <form action="{{ route('licences.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate onsubmit="updateEditorContent()">
        @csrf

        <main class="nxl-container">
            <div class="nxl-content">
                <!-- [ page-header ] start -->
                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Create Licence</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item">Licences</li>
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
                        <div class="col-lg-8">
                            <div class="card stretch stretch-full">
                                <div class="card-header">
                                    <h5 class="card-title">Licence Details</h5>
                                </div>
                                <div class="card-body custom-card-action p-0">
                                    <div class="tab-content p-4">
                                        <div class="row">
                                            <div class="form-group pb-3 col-lg-4">
                                                <label for="name_uz">Licence Name (UZ):</label>
                                                <input type="text" class="form-control" id="name_uz" name="name_uz" value="{{ old('name_uz') }}" required>
                                            </div>
                                            <div class="form-group pb-3 col-lg-4">
                                                <label for="name_en">Licence Name (EN):</label>
                                                <input type="text" class="form-control" id="name_en" name="name_en" value="{{ old('name_en') }}" required>
                                            </div>
                                            <div class="form-group pb-3 col-lg-4">
                                                <label for="name_ru">Licence Name (RU):</label>
                                                <input type="text" class="form-control" id="name_ru" name="name_ru" value="{{ old('name_ru') }}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ Overview Section ] start -->
                        <div class="col-xxl-4 col-lg-4">
                            <div class="card stretch stretch-full">

                                <div class="card-header">
                                    <h5 class="card-title">Image Settings</h5>
                                </div>
                                <div class="card-body custom-card-action p-0">
                                    <div class="tab-content p-4">
                                        <input type="file" name="image" id="image" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ Overview Section ] end -->
                    </div>
                </div>
            </div>
        </main>

    </form>
@endsection
