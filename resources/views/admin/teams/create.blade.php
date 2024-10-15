@extends('layouts.layout')

@section('content')
    <form action="{{ route('teams.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate onsubmit="updateEditorContent()">
        @csrf

        <main class="nxl-container">
            <div class="nxl-content">
                <!-- [ page-header ] start -->
                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Create Team</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item">Teams</li>
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
                                    <h5 class="card-title">Team Details</h5>
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
                                        <div class="form-group pb-3">
                                            <label for="name">Team Name :</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                                        </div>
                                        <div class="tab-pane fade show active" id="uzConTab" role="tabpanel">
                                            <div class="form-group pb-3">
                                                <label for="position_uz">Team Position (UZ) :</label>
                                                <input type="text" class="form-control" id="position_uz" name="position_uz" value="{{ old('position_uz') }}" required>
                                            </div>
                                            <div class="form-group pb-3">
                                                <label for="description_uz">Description (UZ):</label>
                                                <div id='editor_description_uz' style="height:200px;"></div>
                                                <input type="hidden" id="description_uz" name="description_uz">
                                            </div>
                                            <div class="form-group pb-3">
                                                <label for="skill_text_uz">Skills (UZ):</label>
                                                <div id="editor_skill_uz" style="height:200px;"></div>
                                                <input type="hidden" id="skill_text_uz" name="skill_text_uz">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="enConTab" role="tabpanel">
                                            <div class="form-group pb-3">
                                                <label for="position_en">Team Position (EN) :</label>
                                                <input type="text" class="form-control" id="position_en" name="position_en" value="{{ old('position_en') }}" required>
                                            </div>
                                            <div class="form-group pb-3">
                                                <label for="description_en">Description (EN):</label>
                                                <div id="editor_description_en" style="height:200px;"></div>
                                                <input type="hidden" id="description_en" name="description_en">
                                            </div>
                                            <div class="form-group pb-3">
                                                <label for="skill_text_en">Skills (EN):</label>
                                                <div id="editor_skill_en" style="height:200px;"></div>
                                                <input type="hidden" id="skill_text_en" name="skill_text_en">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="ruConTab" role="tabpanel">
                                            <div class="form-group pb-3">
                                                <label for="position_ru">Team Position (RU) :</label>
                                                <input type="text" class="form-control" id="position_ru" name="position_ru" value="{{ old('position_ru') }}" required>
                                            </div>
                                            <div class="form-group pb-3">
                                                <label for="description_ru">Description (RU):</label>
                                                <div id="editor_description_ru" style="height:200px;"></div>
                                                <input type="hidden" id="description_ru" name="description_ru">
                                            </div>
                                            <div class="form-group pb-3">
                                                <label for="skill_text_ru">Skills (RU):</label>
                                                <div id="editor_skill_ru" style="height:200px;"></div>
                                                <input type="hidden" id="skill_text_ru" name="skill_text_ru">
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
                                    <h5 class="card-title">Social Links</h5>
                                </div>
                                <div class="card-body custom-card-action p-0">
                                    <div class="form-group p-3">
                                        <label for="telegram">Telegram:</label>
                                        <input type="text" class="form-control" id="telegram" name="telegram" value="{{ old('telegram') }}">
                                    </div>
                                    <div class="form-group p-3">
                                        <label for="instagram">Instagram:</label>
                                        <input type="text" class="form-control" id="instagram" name="instagram" value="{{ old('instagram') }}">
                                    </div>
                                    <div class="form-group p-3">
                                        <label for="facebook">Facebook:</label>
                                        <input type="text" class="form-control" id="facebook" name="facebook" value="{{ old('facebook') }}">
                                    </div>
                                    <div class="form-group p-3">
                                        <label for="experience">Experience:</label>
                                        <input class="form-control" id="experience" name="experience" value="{{ old('experience') }}"/>
                                    </div>
                                    <div class="form-group p-3">
                                        <label for="availability">Availability:</label>
                                        <input class="form-control" id="availability" name="availability" value="{{ old('availability') }}"/>
                                    </div>
                                    <div class="form-group p-3">
                                        <label class="form-label" for="architecture">Architecture ( )%</label>
                                        <input class="form-control" type="text" name="architecture" id="architecture" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                    </div>
                                    <div class="form-group p-3">
                                        <label class="form-label" for="construction">Construction ( )%</label>
                                        <input class="form-control" type="text" name="construction" id="construction" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                    </div>
                                    <div class="form-group p-3">
                                        <label class="form-label" for="interior_design">Interior Design ( )%</label>
                                        <input class="form-control" type="text" name="interior_design" id="interior_design" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
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
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <script>
        var editor_description_uz = new Quill('#editor_description_uz', { theme: 'snow' });
        var editor_description_en = new Quill('#editor_description_en', { theme: 'snow' });
        var editor_description_ru = new Quill('#editor_description_ru', { theme: 'snow' });
        var editor_skill_uz = new Quill('#editor_skill_uz', { theme: 'snow' });
        var editor_skill_en = new Quill('#editor_skill_en', { theme: 'snow' });
        var editor_skill_ru = new Quill('#editor_skill_ru', { theme: 'snow' });

        function updateEditorContent() {
            document.getElementById('description_uz').value = editor_description_uz.root.innerHTML;
            document.getElementById('description_en').value = editor_description_en.root.innerHTML;
            document.getElementById('description_ru').value = editor_description_ru.root.innerHTML;
            document.getElementById('skill_text_uz').value = editor_skill_uz.root.innerHTML;
            document.getElementById('skill_text_en').value = editor_skill_en.root.innerHTML;
            document.getElementById('skill_text_ru').value = editor_skill_ru.root.innerHTML;
        }
    </script>
@endsection
