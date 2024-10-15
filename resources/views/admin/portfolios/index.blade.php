@extends('layouts.layout')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Portfolio List</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item">Portfolios</li>
                    </ul>
                </div>
                <div class="page-header-right ms-auto">
                    <a href="{{ route('portfolios.create') }}" class="btn btn-primary">Create Portfolio</a>
                </div>
            </div>
            <!-- [ page-header ] end -->

            <!-- [ Main Content ] start -->
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Portfolio Table</h5>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Team</th>
                                        <th>Title (UZ)</th>
                                        <th>Title (EN)</th>
                                        <th>Title (RU)</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($portfolios as $portfolio)
                                        <tr>
                                            <td>{{ $portfolio->id }}</td>
                                            <td>{{ $portfolio->team->name ?? 'N/A' }}</td>
                                            <td>{{ $portfolio->title_uz }}</td>
                                            <td>{{ $portfolio->title_en }}</td>
                                            <td>{{ $portfolio->title_ru }}</td>
                                            <td>
                                                <div class="hstack gap-2 justify-content-end">
                                                    <a href="{{ route('portfolios.edit', $portfolio->id) }}" class="avatar-text avatar-md">
                                                        <i class="feather-edit-3"></i>
                                                    </a>
                                                    <form action="{{ route('portfolios.destroy', $portfolio->id) }}" method="POST" onsubmit="return confirm('Ushbu mahsulotni o‘chirishni xohlaysizmi?')">
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
