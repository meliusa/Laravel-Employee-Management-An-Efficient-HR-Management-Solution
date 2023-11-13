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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Ubah Detail Keluarga</h1>
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
                        <li class="breadcrumb-item text-dark">Ubah Detail Keluarga</li>
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
                            <form action="{{ route('family-details.update', $familyDetail->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <!--begin::Card body-->
                                <div class="card-body border-top p-9">
                                    <!--begin::Input group-->
                                    <div id="kt_docs_repeater_advanced" class="collapse show">

                                        <div class="card-header" data-bs-toggle="collapse" aria-expanded="true">
                                            <!--begin::Card title-->
                                            <div class="card-title m-0">
                                                <h3 class="fw-bolder m-0">Data Detail Keluarga</h3>
                                            </div>
                                            <!--end::Card title-->
                                        </div>

                                        <div data-repeater-list="group-a">
                                            <div data-repeater-item="group-a">
                                                <div class="card-body border-top p-9">
                                                    <input type="hidden" name="id_keluarga"
                                                        value="{{ $familyDetail->id_keluarga }}">
                                                    <div class="form-group mb-3">
                                                        <label class="required form-label">Nama Lengkap</label>
                                                        <input type="text" class="form-control  mb-3" id=""
                                                            placeholder="Nama Lengkap" name="nama_lengkap"
                                                            value="{{ $familyDetail->nama_lengkap }}">
                                                        <!--  <div class="wizard-form-error"></div> -->
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label class="required form-label">NIK</label>
                                                        <input type="text" class="form-control  mb-3" id=""
                                                            placeholder="NIK" name="nik"
                                                            value="{{ $familyDetail->nik }}">
                                                        <!--  <div class="wizard-form-error"></div> -->
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label class="required form-label">Jenis Kelamin</label>
                                                        <div class="d-flex align-items-center mt-3" data-kt-button="true">
                                                            <!--begin::Option-->
                                                            <label
                                                                class="form-check form-check-inline form-check-solid me-5">
                                                                <input class="form-check-input" name="jenis_kelamin"
                                                                    type="radio" value="laki-laki" required
                                                                    {{ $familyDetail->jenis_kelamin == 'laki-laki' ? 'checked' : '' }} />
                                                                <span class="fw-bold ps-2 fs-6">Laki-laki</span>
                                                            </label>
                                                            <!--end::Option-->
                                                            <!--begin::Option-->
                                                            <label class="form-check form-check-inline form-check-solid">
                                                                <input class="form-check-input" name="jenis_kelamin"
                                                                    type="radio" value="perempuan" required
                                                                    {{ $familyDetail->jenis_kelamin == 'perempuan' ? 'checked' : '' }} />
                                                                <span class="fw-bold ps-2 fs-6">Perempuan</span>
                                                            </label>
                                                            <!--end::Option-->
                                                        </div>
                                                        <!--  <div class="wizard-form-error"></div> -->
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label class="required form-label">Tempat Lahir</label>
                                                        <input type="text" class="form-control  mb-3" id=""
                                                            placeholder="Tempat Lahir" name="tempat_lahir"
                                                            value="{{ $familyDetail->tempat_lahir }}">
                                                        <!--  <div class="wizard-form-error"></div> -->
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label class="required form-label">Tanggal Lahir</label>
                                                        <input name="tanggal_lahir" class="form-control"
                                                            placeholder="Tanggal Lahir" data-kt-repeater="datepicker"
                                                            value="{{ date('m/d/Y', strtotime($familyDetail->tanggal_lahir)) }}" />
                                                        <!--  <div class="wizard-form-error"></div> -->
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label class="required form-label">Agama</label>
                                                        <select name="agama" aria-label="" data-kt-repeater="select2"
                                                            data-placeholder="Agama" class="form-select mb-2">
                                                            <option selected {{ $familyDetail->agama }}>
                                                                {{ $familyDetail->agama }}</option>
                                                            <option value="Islam">Islam</option>
                                                            <option value="Buddha">Buddha</option>
                                                            <option value="Hindu">Hindu</option>
                                                            <option value="Khonghucu">Khonghucu</option>
                                                            <option value="Kristen Protestan">Kristen Protestan
                                                            </option>
                                                            <option value="Kristen Katolik">Kristen Katolik</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label class="required form-label">Pendidikan Terakhir</label>
                                                        <select name="pendidikan" aria-label=""
                                                            data-kt-repeater="select2"
                                                            data-placeholder="Pendidikan Terakhir"
                                                            class="form-select mb-2">
                                                            <option selected {{ $familyDetail->pendidikan }}>
                                                                {{ $familyDetail->pendidikan }}</option>
                                                            <option value="SLTP">SLTP</option>
                                                            <option value="SLTA">SLTA</option>
                                                            <option value="D1">D1</option>
                                                            <option value="D2">D2</option>
                                                            <option value="D3">D3</option>
                                                            <option value="D4/S1">D4/S1</option>
                                                            <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label class="required form-label">Pekerjaan</label>
                                                        <select name="id_pekerjaan" aria-label=""
                                                            data-kt-repeater="select2" data-placeholder="Pekerjaan"
                                                            class="form-select mb-2">
                                                            <option selected disabled>Pilih Pekerjaan</option>
                                                            @foreach ($types as $pekerjaan)
                                                                @if (old('id_pekerjaan', $familyDetail->id_pekerjaan) == $pekerjaan->id)
                                                                    <option value="{{ $pekerjaan->id }}" selected>
                                                                        {{ $pekerjaan->nama_pekerjaan }}
                                                                    </option>
                                                                @else
                                                                    <option value="{{ $pekerjaan->id }}">
                                                                        {{ $pekerjaan->nama_pekerjaan }}
                                                                    </option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label class="required form-label">Status Pernikahan</label>
                                                        <select name="status_pernikahan" aria-label=""
                                                            data-kt-repeater="select2"
                                                            data-placeholder="Status Pernikahan" class="form-select mb-2">
                                                            <option selected {{ $familyDetail->status_pernikahan }}>
                                                                {{ $familyDetail->status_pernikahan }}</option>
                                                            <option value="Belum Kawin">Belum Kawin</option>
                                                            <option value="Kawin">Kawin</option>
                                                            <option value="Cerai Hidup">Cerai Hidup</option>
                                                            <option value="Cerai Mati">Cerai Mati</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label class="required form-label">Hubungan Keluarga</label>
                                                        <select name="hubungan_keluarga" aria-label=""
                                                            data-kt-repeater="select2"
                                                            data-placeholder="Hubungan Keluarga" class="form-select mb-2">
                                                            <option selected
                                                                value="{{ $familyDetail->hubungan_keluarga }}">
                                                                {{ $familyDetail->hubungan_keluarga }}</option>
                                                            <option value="Kepala Keluarga">Kepala Keluarga</option>
                                                            <option value="Istri atau Suami">Istri atau Suami</option>
                                                            <option value="Anak">Anak</option>
                                                            <option value="Cucu">Cucu</option>
                                                            <option value="Menantu">Menantu</option>
                                                            <option value="Orang Tua">Orang Tua</option>
                                                            <option value="Mertua">Mertua</option>
                                                            <option value="Saudara Kandung">Saudara Kandung</option>
                                                            <option value="Saudara Tiri">Saudara Tiri</option>
                                                            <option value="Saudara Angkat">Saudara Angkat</option>
                                                            <option value="Pembantu">Pembantu</option>
                                                            <option value="Orang Lain">Orang Lain</option>
                                                            <option value="Orang Dalam Perawatan">Orang Dalam Perawatan
                                                            </option>
                                                            <option value="Tunanetra`">Tunanetra`</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label class="required form-label">Kewarganegaraan</label>
                                                        <select name="kewarganegaraan" aria-label=""
                                                            data-kt-repeater="select2" data-placeholder="Kewarganegaraan"
                                                            class="form-select mb-2">
                                                            <option selected value="{{ $familyDetail->kewarganegaraan }}">
                                                                {{ $familyDetail->kewarganegaraan }}</option>
                                                            <option value="WNI">Warga Negara Indonesia (WNI)
                                                            </option>
                                                            <option value="WNA">Warga Negara Asing (WNA)</option>
                                                        </select>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="required form-label">Dokumen Imigrasi</label>
                                                        <div class="col-md-6">
                                                            <div class="col-12">
                                                                <input name="no_passport" type="text"
                                                                    class="form-control" placeholder="Nomor Pasport"
                                                                    value="{{ $familyDetail->no_passport }}" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="col-12">
                                                                <input name="no_kitas" type="text"
                                                                    class="form-control" placeholder="Nomor Kitas / Kitap"
                                                                    value="{{ $familyDetail->no_kitas }}" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label class="required form-label">Nama Ayah</label>
                                                        <input type="text" class="form-control  mb-3" id=""
                                                            placeholder="Nama Ayah" name="nama_ayah"
                                                            value="{{ $familyDetail->nama_ayah }}">
                                                        <!--  <div class="wizard-form-error"></div> -->
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label class="required form-label">Nama Ibu</label>
                                                        <input type="text" class="form-control  mb-3" id=""
                                                            placeholder="Nama Ibu" name="nama_ibu"
                                                            value="{{ $familyDetail->nama_ibu }}">
                                                        <!--  <div class="wizard-form-error"></div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                    </div>

                                    <!--begin::Input group-->
                                    <!--begin::Actions-->
                                    <div class="card-footer d-flex justify-content-end">
                                        <a href="{{ url()->previous() }}" class="btn btn-light me-3">Batal</a>
                                        {{-- <button type="reset" class="btn btn-light me-3"
                                            data-bs-dismiss="modal">Batal</button> --}}
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
