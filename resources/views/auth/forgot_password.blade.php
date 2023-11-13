@extends('auth.wrapper.app')
@section('content')
<div class="d-flex flex-column flex-root">
    <!--begin::Authentication - Password reset -->
    <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
        style="background-image: url(assets/media/illustrations/sigma-1/14.png">
        <!--begin::Content-->
        <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
            <!--begin::Logo-->
            {{-- <a href="../../demo7/dist/index.html" class="mb-12">
                <img alt="Logo" src="assets/media/logos/logo-1.svg" class="h-40px" />
            </a> --}}
            <!--end::Logo-->
            <!--begin::Wrapper-->
            <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                <!--begin::Form-->
                <form class="form w-100" novalidate="novalidate" id="kt_password_reset_form">
                    <!--begin::Heading-->
                    <div class="text-center mb-10">
                        <a class="mb-12">
                            <img alt="Logo" src="{{ asset('media/logos/logo-main.svg') }}" class="h-150px" />
                        </a>
                        <!--begin::Title-->
                        <h1 class="text-dark mb-3">Please, contact Admin!</h1>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <div class="text-gray-400 fw-bold fs-4">WhatsApp: +6281359703050</div>
                        <!--end::Link-->
                    </div>
                    <!--begin::Heading-->
                    <!--begin::Actions-->
                    <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                        <a href="https://wa.me/081359703050" target="_blank"
                            class="btn btn-lg btn-primary fw-bolder me-4">
                            <span class="indicator-label">WhatsApp Now!</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </a>
                        <a href="{{ route('auth.index') }}" class="btn btn-lg btn-light-success fw-bolder">Back</a>
                    </div>

                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Authentication - Password reset-->
</div>
@endsection
