@extends('layouts.layout')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Licence</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}" class="nxl-link">Home</a>
                        </li>
                        <li class="breadcrumb-item">Licence</li>
                    </ul>
                </div>
                <div class="page-header-right ms-auto">
                    <div class="page-header-right-items">
                        <a href="{{ route('licences.create') }}" class="btn btn-primary">
                            <i class="feather-plus me-2"></i>
                            <span>Yangi Licence qo'shish</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- [ page-header ] end -->

            <!-- [ Main Content ] start -->
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card border-top-0">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>licence nomi (UZ)</th>
                                        <th>licence nomi (RU)</th>
                                        <th>licence nomi (EN)</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($licences as $item)
                                        <tr>
                                            <td>{{ $item->name_uz }}</td>
                                            <td>{{ $item->name_ru }}</td>
                                            <td>{{ $item->name_en }}</td>
                                            <td>
                                                <div class="hstack gap-2 justify-content-end">
                                                    <a href="{{ route('licences.edit', $item->id) }}" class="avatar-text avatar-md">
                                                        <i class="feather-edit-3"></i>
                                                    </a>
                                                    <form action="{{ route('licences.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Ushbu mahsulotni o‘chirishni xohlaysizmi?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" style="background: none; border: none;" class="avatar-text avatar-md">
                                                            <i class="feather-trash-2"></i>
                                                        </button>
                                                    </form>
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
            <!-- [ Main Content ] end -->
        </div>
    </main>

@endsection
