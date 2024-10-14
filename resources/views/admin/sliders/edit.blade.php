@extends('layouts.layout')

@section('content')
    <form action="{{ route('slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate onsubmit="updateEditorContent()">
        @csrf
        @method('PUT')

        <main class="nxl-container">
            <div class="nxl-content">
                <!-- [ page-header ] start -->
                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Edit Slider</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item">Sliders</li>
                        </ul>
                    </div>
                    <div class="page-header-right ms-auto">
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <a href="{{ route('slider.index') }}" class="btn btn-light-brand">
                                <i class="fas fa-arrow-left me-2"></i>
                                <span>Back</span>
                            </a>
                            <button type="submit" class="btn btn-primary">Update</button>
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
                                    <h5 class="card-title">Slider Details</h5>
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
                                                <label for="title_uz">Title (UZ):</label>
                                                <input type="text" class="form-control" id="title_uz" name="title_uz" value="{{ old('title_uz', $slider->title_uz) }}" required>
                                            </div>
                                            <div class="form-group pb-3">
                                                <label for="description_uz">Description (UZ):</label>
                                                <div id='editor_uz' style="height:200px;">{!! old('description_uz', $slider->description_uz) !!}</div>
                                                <input type="hidden" id="description_uz" name="description_uz">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="enConTab" role="tabpanel">
                                            <div class="form-group pb-3">
                                                <label for="title_en">Title (EN):</label>
                                                <input type="text" class="form-control" id="title_en" name="title_en" value="{{ old('title_en', $slider->title_en) }}" required>
                                            </div>
                                            <div class="form-group pb-3">
                                                <label for="description_en">Description (EN):</label>
                                                <div id="editor_en" style="height:200px;">{!! old('description_en', $slider->description_en) !!}</div>
                                                <input type="hidden" id="description_en" name="description_en">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="ruConTab" role="tabpanel">
                                            <div class="form-group pb-3">
                                                <label for="title_ru">Title (RU):</label>
                                                <input type="text" class="form-control" id="title_ru" name="title_ru" value="{{ old('title_ru', $slider->title_ru) }}" required>
                                            </div>
                                            <div class="form-group pb-3">
                                                <label for="description_ru">Description (RU):</label>
                                                <div id="editor_ru" style="height:200px;">{!! old('description_ru', $slider->description_ru) !!}</div>
                                                <input type="hidden" id="description_ru" name="description_ru">
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
                                    <div class="form-group p-3">
                                        <label for="image" class="fw-semibold">Main Image:</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                        @if($slider->image)
                                            <img src="{{ asset('storage/' . $slider->image) }}" alt="Slider Image" style="max-width: 100%; height: auto;" class="mt-2">
                                        @endif
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

    <!-- Quill JS -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet" />

    <script>
        var editorUz = new Quill('#editor_uz', {
            theme: 'snow',
            modules: {
                toolbar: [
                    ['bold', 'italic', 'underline'],
                    ['link', 'image'],
                    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                    ['clean']
                ]
            }
        });

        var editorEn = new Quill('#editor_en', {
            theme: 'snow',
            modules: {
                toolbar: [
                    ['bold', 'italic', 'underline'],
                    ['link', 'image'],
                    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                    ['clean']
                ]
            }
        });

        var editorRu = new Quill('#editor_ru', {
            theme: 'snow',
            modules: {
                toolbar: [
                    ['bold', 'italic', 'underline'],
                    ['link', 'image'],
                    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                    ['clean']
                ]
            }
        });

        function updateEditorContent() {
            document.getElementById('description_uz').value = editorUz.root.innerHTML;
            document.getElementById('description_en').value = editorEn.root.innerHTML;
            document.getElementById('description_ru').value = editorRu.root.innerHTML;
        }
    </script>
@endsection
