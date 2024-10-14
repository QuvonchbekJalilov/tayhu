@extends('layouts.layout')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Contacts</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item">Contacts</li>
                    </ul>
                </div>

            </div>

            <div class="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Contact List</h5>
                            </div>
                            <div class="card-body custom-card-action">
                                @if(session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Address</th>
                                        <th>Phone Number</th>
                                        <th>Telegram</th>
                                        <th>Instagram</th>
                                        <th>Facebook</th>
                                        <th>YouTube</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($contacts as $contact)
                                        <tr>
                                            <td>{{ $contact->address }}</td>
                                            <td>{{ $contact->phone_number }}</td>
                                            <td>{{ $contact->telegram }}</td>
                                            <td>{{ $contact->instagram }}</td>
                                            <td>{{ $contact->facebook }}</td>
                                            <td>{{ $contact->youtube }}</td>
                                            <td>
                                                <div class="hstack gap-2 justify-content-end">
                                                    <a href="{{ route('contact.edit', $contact->id) }}" class="avatar-text avatar-md">
                                                        <i class="feather-edit-3"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
