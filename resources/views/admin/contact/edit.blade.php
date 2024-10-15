@extends('layouts.layout')

@section('content')
    <main class="nxl-container">
        <form action="{{ route('contact.update', $contact) }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            @method('PUT')

            <div class="nxl-content">
                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Edit Contact</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item">Contacts</li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ul>
                    </div>
                    <div class="page-header-right ms-auto">
                        <div class="d-flex align-items-center gap-2">
                            <a href="{{ route('contact.index') }}" class="btn btn-light-brand">
                                <i class="fas fa-arrow-left me-2"></i>
                                <span>Back</span>
                            </a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>

                <div class="main-content">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card stretch stretch-full">
                                <div class="card-header">
                                    <h5 class="card-title">Contact Details</h5>
                                </div>
                                <div class="card-body custom-card-action">
                                    <div class="form-group">
                                        <label for="address">Address:</label>
                                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $contact->address) }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $contact->email) }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone_number">Phone Number:</label>
                                        <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number', $contact->phone_number) }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="telegram">Telegram:</label>
                                        <input type="text" class="form-control" id="telegram" name="telegram" value="{{ old('telegram', $contact->telegram) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="instagram">Instagram:</label>
                                        <input type="text" class="form-control" id="instagram" name="instagram" value="{{ old('instagram', $contact->instagram) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="facebook">Facebook:</label>
                                        <input type="text" class="form-control" id="facebook" name="facebook" value="{{ old('facebook', $contact->facebook) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="youtube">YouTube:</label>
                                        <input type="text" class="form-control" id="youtube" name="youtube" value="{{ old('youtube', $contact->youtube) }}">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-2 px-4 pb-3">
                                    <a href="{{ route('contact.index') }}" class="btn btn-light-brand">
                                        <i class="fas fa-arrow-left me-2"></i>
                                        <span>Back</span>
                                    </a>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
@endsection
