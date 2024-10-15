@extends('layouts.layout')

@section('content')
    <form action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate onsubmit="updateEditorContent()">
        @csrf

        <main class="nxl-container">
            <div class="nxl-content">
                <!-- [ page-header ] start -->
                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Create Portfolio</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item">Portfolios</li>
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
                                    <h5 class="card-title">Portfolio Details</h5>
                                </div>
                                <div class="card-body custom-card-action px-4">
                                    <div class="form-group pb-3">
                                        <label for="team_id">Team:</label>
                                        <select class="form-control max-select" id="team_id" name="team_id" required>
                                            <option value="">Select Team</option>
                                            @foreach($teams as $team)
                                                <option value="{{ $team->id }}">{{ $team->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="form-group pb-3 col-lg-4">
                                            <label for="title_uz">Title (UZ):</label>
                                            <input type="text" class="form-control" id="title_uz" name="title_uz" value="{{ old('title_uz') }}">
                                        </div>
                                        <div class="form-group pb-3 col-lg-4">
                                            <label for="title_en">Title (EN):</label>
                                            <input type="text" class="form-control" id="title_en" name="title_en" value="{{ old('title_en') }}">
                                        </div>
                                        <div class="form-group pb-3 col-lg-4">
                                            <label for="title_ru">Title (RU):</label>
                                            <input type="text" class="form-control" id="title_ru" name="title_ru" value="{{ old('title_ru') }}">
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
                                        <div class="row align-items-center mb-4">
                                            <div class="col-lg-12">
                                                <label for="image" class="form-label">image</label>
                                                <input type="file" name="image" id="image" class="form-control" required>
                                            </div>
                                        </div>
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

    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.max-select').select2({
                theme: 'bootstrap-5',
                placeholder: 'Select...',
                allowClear: true
            });
        });
    </script>
@endsection
