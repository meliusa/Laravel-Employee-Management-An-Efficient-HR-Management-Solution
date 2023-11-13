@extends('layouts.app')
@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Tambah Gaji Intensif</h1>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <!--end::Separator-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ url('event/event_management') }}"
                                class="text-muted text-hover-primary">Dashboard</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Manajemen Gaji</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Data Gaji Intensif</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">Edit Gaji Intensif</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <div id="" class="collapse show">
            <div class="post d-flex flex-column-fluid" id="kt_post">
                <!--begin::Container-->
                <!--begin::Container-->
                <div class="container-xxl" id="kt_content_container">
                    <!--begin::Basic info-->
                    <div class="card mb-5 mb-xl-10">
                        <!--begin::Content-->
                        <div id="kt_docs_repeater_advanced" class="collapse show">
                            <!--begin::Form-->
                            {{-- id="kt_account_profile_details_form" --}}
                            <form action="{{ route('salary-advance.update', $salary_advance->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <!--begin::Card body-->
                                <div class="card-body border-top p-9">
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama
                                            Karyawan</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-4 fv-row">
                                            <input class="form-control form-control-lg form-control" type="text"
                                                name="nama_lengkap" id="nama_lengkap"
                                                value="{{ $salary_advance->employee_salary->employee->nama_lengkap }}"
                                                readonly>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    {{-- <input type="hidden" name="bulan">
                                    <input type="hidden" name="tahun"> --}}
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                                            <span class="required">Periode</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-4 fv-row">
                                            <input name="periode" class="form-control form-control-lg form-control"
                                                id="periode"
                                                value="{{ $salary_advance->bulan }} {{ $salary_advance->tahun }}"
                                                readonly />
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="card-header border-0 cursor-pointer" role="button"
                                        data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details"
                                        aria-expanded="true" aria-controls="kt_account_profile_details">
                                        <!--begin::Card title-->
                                        <div class="card-title m-0">
                                            <h3 class="fw-bolder m-0">Detail</h3>
                                        </div>
                                        <!--end::Card title-->
                                    </div>
                                    <div class="card-body border-top p-9">
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Tipe
                                                Kategori</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-4 fv-row">
                                                <input type="text" name="kategori"
                                                    class="form-control form-control-lg form-control" placeholder="ketgeori"
                                                    value="{{ $salary_advance->kategori }}" readonly />
                                            </div>
                                            <!--end::Col-->
                                            <!--end::Col-->
                                        </div>
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Keterangan</label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-4 fv-row">
                                                <input type="text" name="keterangan"
                                                    class="form-control form-control-lg form-control"
                                                    placeholder="Keterangan" value="{{ $salary_advance->keterangan }}"
                                                    readonly />
                                            </div>
                                            <!--end::Col-->
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 col-form-label fw-bold fs-6">
                                                <span class="required">Jumlah</span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-4 fv-row">
                                                <input type="text" name="jumlah"
                                                    class="form-control form-control-lg form-control" placeholder="Jumlah"
                                                    value="{{ $salary_advance->jumlah }}" required />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                    </div>
                                    <!--begin::Input group-->
                                    <!--begin::Actions-->
                                    <div class="card-footer d-flex justify-content-end">
                                        <button type="reset" class="btn btn-light me-3"
                                            data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">
                                            <span class="indicator-label">Simpan</span>
                                            <span class="indicator-progress">Mohon tunggu...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Basic info-->
                </div>
            </div>
            <!--end::Container-->
        </div>
    </div>
    <!--end::Post-->
    <!--end::Content-->
    {{-- @include('event.management.create.modal') --}}
@endsection
