@extends('layouts.layout')

@section('content')
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate onsubmit="updateEditorContent()">
        @csrf

        <main class="nxl-container">
            <div class="nxl-content">
                <!-- [ page-header ] start -->
                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Create Product</h5>
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
                        <div class="col-lg-8">
                            <div class="card stretch stretch-full">
                                <div class="card-header">
                                    <h5 class="card-title">Product Details</h5>
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
                                                <label for="title_uz">Product Name (UZ):</label>
                                                <input type="text" class="form-control" id="title_uz" name="title_uz" value="{{ old('title_uz') }}" required>
                                            </div>
                                            <div class="form-group pb-3">
                                                <label for="text_uz">Description (UZ):</label>
                                                <div id='editor_uz' style="height:200px;"></div>
                                                <input type="hidden" id="text_uz" name="description_uz">
                                            </div>
                                            <div class="form-group pb-3">
                                                <label for="content_uz">Description (UZ):</label>
                                                <div id="editor_content_uz" style="height:200px;"></div>
                                                <input type="hidden" id="content_uz" name="content_uz">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="enConTab" role="tabpanel">
                                            <div class="form-group pb-3">
                                                <label for="title_en">Product Name (EN):</label>
                                                <input type="text" class="form-control" id="title_en" name="title_en" value="{{ old('title_en') }}" required>
                                            </div>
                                            <div class="form-group pb-3">
                                                <label for="text_en">Description (EN):</label>
                                                <div id="editor_en" style="height:200px;"></div>
                                                <input type="hidden" id="text_en" name="description_en">
                                            </div>
                                            <div class="form-group pb-3">
                                                <label for="content_ru">Description (EN):</label>
                                                <div id="editor_content_en" style="height:200px;"></div>
                                                <input type="hidden" id="content_en" name="content_en">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="ruConTab" role="tabpanel">
                                            <div class="form-group pb-3">
                                                <label for="title_ru">Product Name (RU):</label>
                                                <input type="text" class="form-control" id="title_ru" name="title_ru" value="{{ old('title_ru') }}" required>
                                            </div>
                                            <div class="form-group pb-3">
                                                <label for="text_ru">Description (RU):</label>
                                                <div id="editor_ru" style="height:200px;"></div>
                                                <input type="hidden" id="text_ru" name="description_ru">
                                            </div>
                                            <div class="form-group pb-3">
                                                <label for="content_ru">Description (RU):</label>
                                                <div id="editor_content_ru" style="height:200px;"></div>
                                                <input type="hidden" id="content_ru" name="content_ru">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ Overview Section ] start -->
                        <div class="col-xxl-4 col-lg-4">
                            <div class="card stretch stretch-full">
                                <!-- Category selection -->
                                <div class="form-group p-3">
                                    <label for="category">Category:</label>
                                    <select name="category_id" id="category_id" class="form-select max-select" required>
                                        <option value="" disabled selected>Kategoriya tanlang</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name_uz }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="card-header">
                                    <h5 class="card-title">Image Settings</h5>
                                </div>
                                <div class="card-body custom-card-action p-0">
                                    <div class="tab-content p-4">
                                        <div class="row align-items-center mb-4">
                                            <div class="col-lg-4">
                                                <label for="image" class="fw-semibold">Main Image:</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="file" name="image" id="image" class="form-control" required>
                                            </div>
                                        </div>

                                        <!-- Additional Image Upload -->
                                        <div class="row align-items-center mb-4">
                                            <div class="col-lg-4">
                                                <label for="image1" class="fw-semibold">Additional Image:</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="file" name="image1" id="image1" class="form-control">
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

    <!-- Quill JS -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <script>
        $(document).ready(function() {
            $('.max-select').select2({
                theme: 'bootstrap-5',
                placeholder: 'Select...',
                allowClear: true
            });
        });

        var editorUz = new Quill('#editor_uz', { theme : 'snow' });
        var editorEn = new Quill('#editor_en', { theme : 'snow' });
        var editorRu = new Quill('#editor_ru', { theme : 'snow' });

        var editor_content_uz = new Quill('#editor_content_uz', { theme : 'snow' });
        var editor_content_en = new Quill('#editor_content_en', { theme : 'snow' });
        var editor_content_ru = new Quill('#editor_content_ru', { theme : 'snow' });
        function updateEditorContent(){
            document.getElementById('text_uz').value = editorUz.root.innerHTML;
            document.getElementById('text_ru').value = editorRu.root.innerHTML;
            document.getElementById('text_en').value = editorEn.root.innerHTML;
            document.getElementById('content_uz').value = editor_content_uz.root.innerHTML;
            document.getElementById('content_ru').value = editor_content_ru.root.innerHTML;
            document.getElementById('content_en').value = editor_content_en.root.innerHTML;
        }

        document.querySelector('form').addEventListener('submit', function(){
            updateEditorContent();
        });
    </script>
@endsection
