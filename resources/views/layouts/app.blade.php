<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href=" ">
    <title>HRMS - PT. WIJAYA KUSUMO</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ asset('src/media/logos/logo.png') }}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{ asset('src/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('src/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('src/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('src/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('src/css/wizard.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            <div id="kt_aside" class="aside aside-light aside-hoverable" data-kt-drawer="true"
                data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}"
                data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
                @include('layouts.partial.aside')
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                @include('layouts.partial.header')
                @yield('content')
            </div>
            <!--end::Wrapper-->
        </div>
    </div>
    @include('sweetalert::alert')
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('src/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('src/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{ asset('src/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="{{ asset('src/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('src/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('src/js/custom/widgets.js') }}"></script>
    <!--end::Page Custom Javascript-->
    <!--begin::Page Custom Javascript(used by user list)-->
    <script src="{{ asset('assets/js/custom/apps/user-management/users/list/table.js') }}"></script>
    <script src="{{ asset('src/js/custom/apps/user-management/users/list/add.js') }}"></script>
    <!--end::Page Custom Javascript-->
    <!--begin::Page Custom Javascript(Wizard)-->
    <script src="{{ asset('src/js/custom/wizard/wizard.js') }}"></script>
    <!--end::Page Custom Javascript-->
    <!--begin::Page Custom Javascript(Form Repeater)-->
    <script src="{{ asset('src/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script src="{{ asset('src/js/custom/documentation/forms/formrepeater/advanced.js') }}"></script>
    <script src="{{ asset('src/js/custom/documentation/forms/formrepeater/basic.js') }}"></script>
    <!--end::Page Custom Javascript-->
    <script src="{{ asset('assets/js/jquery-dateFormat.js') }}"></script>
    <script src="{{ asset('src/js/custom/documentation/forms/daterangepicker.js') }}"></script>
    <!--end::Javascript-->
    <script>
        function updateCurrentTime() {
            const currentTimeElement = document.getElementById("current-time");
            const now = new Date();
            const currentTimeString = now.toLocaleTimeString(); // Adjust options for desired format
            currentTimeElement.textContent = currentTimeString;
        }

        // Update the time immediately and then update every second
        updateCurrentTime();
        setInterval(updateCurrentTime, 1000);
    </script>
    {{-- <script>
        $('#kt_docs_maxlength_nik').maxlength({
            threshold: 16,
            warningClass: "badge badge-primary",
            limitReachedClass: "badge badge-success"
        });
    </script> --}}
    <script>
        $(document).ready(function() {
            $('#kt_docs_maxlength_nik').maxlength({
                threshold: 16,
                warningClass: "badge badge-primary",
                limitReachedClass: "badge badge-success"
            });
            $('#kt_docs_maxlength_kk').maxlength({
                threshold: 16,
                warningClass: "badge badge-primary",
                limitReachedClass: "badge badge-success"
            });
            $('#kt_docs_maxlength_nik_1').maxlength({
                threshold: 16,
                warningClass: "badge badge-primary",
                limitReachedClass: "badge badge-success"
            });
        });
    </script>

    <script>
        $("#kt_datepicker_1").flatpickr();
        $("#kt_datepicker_10").flatpickr({
            defaultDate: Date.now()
        });
        $("#period_salary").flatpickr({
            dateFormat: "Y-m"
        });
    </script>

    <script>
        var myDropzone = new Dropzone("#uploadktp", {
            url: "/uploadktp", // Set the url for your upload script location
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 1,
            maxFilesize: 2, // MB
            addRemoveLinks: true,
            acceptedFiles: 'image/*',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(file, response) {
                $('form').append('<input type="hidden" name="foto_ktp" value="' + response.name + '">')
            },
            error: function(response) {
                console.log(response.status)
            }
        });
    </script>

    <script>
        var myDropzone = new Dropzone('#uploadkk', {
            url: '/uploadkk',
            paramName: 'file',
            maxFiles: 1,
            maxFilesize: 2,
            addRemoveLinks: true,
            acceptedFiles: 'image/*',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(file, response) {
                $('form').append('<input type="hidden" name="foto_kk" value="' + response.name + '">')
            },
            error: function(response) {
                console.log(response)
            }
        })
    </script>

    <script>
        var myDropzone = new Dropzone('#editkk', {
            url: '/uploadkk',
            paramName: 'file',
            maxFiles: 1,
            maxFilesize: 2,
            addRemoveLinks: true,
            acceptedFiles: 'image/*',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            init: function() {
                let famId = $('#keluarga').val();
                myDropzone = this;
                $.ajax({
                    url: `/family/${famId}`,
                    type: 'get',
                    success: function(response) {
                        var mockFile = {
                            name: response.data.foto_kk,
                            size: response.size
                        };

                        myDropzone.displayExistingFile(mockFile,
                            '../../storage/uploads/karyawan/kartukeluarga/' + response
                            .data.foto_kk);
                        $('form').append('<input type="hidden" name="foto_kk" value="' + response
                            .data.foto_kk + '">')
                    },
                    error: function(response) {
                        console.log(response)
                    }
                })
            },
            success: function(file, response) {
                $('input[name="foto_kk"]').val(response.name)
            },
            error: function(response) {
                console.log(response)
            }
        })
    </script>

    <script>
        var myDropzone = new Dropzone('#single-certificate', {
            url: "/uploadsertif",
            uploadMultiple: true,
            maxFiles: 1,
            maxFilesize: 2,
            addRemoveLinks: true,
            acceptedFiles: 'image/*',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            init: function() {
                let sertifId = $('#sertifikat').val();
                myDropzone = this;
                $.ajax({
                    url: `/certificate/${sertifId}`,
                    type: 'get',
                    success: function(response) {
                        var mockFile = {
                            name: response.data.file_sertifikat,
                            size: response.size
                        };

                        myDropzone.displayExistingFile(mockFile,
                            '../../storage/uploads/karyawan/sertifikat/' + response
                            .data.file_sertifikat);
                    },
                    error: function(response) {
                        console.log(response)
                    }
                })
            },
            success: function(file, response) {
                $('form').append('<input type="hidden" name="file_sertifikat" value="' + response.name +
                    '">')
            },
            error: function(response) {
                console.log(response)
            }
        })
    </script>

    <script>
        var uploadedDocumentMap = {}
        var myDropzone = new Dropzone("#dropzone-sertifikat", {
            url: "/uploadsertif", // Set the url for your upload script location
            uploadMultiple: true,
            maxFiles: 10,
            maxFilesize: 2, // MB
            addRemoveLinks: true,
            acceptedFiles: 'image/*',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(file, response) {
                $('form').append('<input type="hidden" name="file_sertifikat[]" value="' + response.name +
                    '">')
                uploadedDocumentMap[file.name] = response.name
            },
            error: function(response) {
                console.log(response)
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#id_kontrak').on('change', function() {
                let kontrakid = this.value;
                $('#durasi').val('');
                $.ajax({
                    url: '{{ route('getContract') }}?id=' + kontrakid,
                    type: 'get',
                    success: function(res) {
                        $.each(res, function(key, value) {
                            $('#durasi').val(value.durasi);
                            const today = new Date();
                            const endDate = new Date(today.getFullYear(),
                                today.getMonth() + value.durasi, today.getDate())
                            $('#end_date').val($.format.date(endDate, "yyyy-MM-dd"))
                        });
                    }
                });
            });
            $('input[name="tanggal_mulai"]').on('change', function() {
                const durasi = parseInt($('#durasi').val())
                const startDate = new Date(this.value);
                const endDate = new Date(startDate.getFullYear(),
                    startDate.getMonth() + durasi, startDate.getDate())
                $('#end_date').val($.format.date(endDate, "yyyy-MM-dd"))
            })
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#id_karyawan').on('change', function() {
                let karyawanId = this.value;
                console.log(karyawanId)
                $('#gaji_bersih').val('');
                $.ajax({
                    url: '{{ route('getSalary') }}?id=' + karyawanId,
                    type: 'get',
                    success: function(res) {
                        console.log(res)
                        $.each(res, function(key, value) {
                            // $('#gaji_bersih').val(value.gaji_bersih);
                            $('form').append(
                                '<input type="hidden" name="id_gaji" value="' +
                                value.id + '">',
                                '<input type="hidden" name="gaji_bersih" value="' +
                                value.gaji_bersih + '">'
                            )
                        });
                    }
                });
            });
        });
    </script>

    <script>
        $('.ondelete').click(function(e) {
            const form = $(this).closest("form");
            e.preventDefault();
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Data Anda Tidak Dapat di Kembalikan",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#adb5bd',
                confirmButtonText: 'Hapus',
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            })
        })
    </script>

    <script>
        $('body').on('click', '#btn-edit-post', function() {
            let employeeContractId = $(this).data('id');

            //fetch detail post with ajax
            $.ajax({
                url: `/employee-contract/${employeeContractId}`,
                type: "GET",
                success: function(response) {
                    $('.edit_form').attr('action',
                        `/employee-contract/${response.dataEmployeeContract.id}`)
                    $("#kt_datepicker_11").flatpickr({
                        defaultDate: response.dataEmployeeContract.tanggal_mulai
                    });
                    $('#nama_karyawan').val(response.dataEmployee[0].nama_lengkap);
                    $('#id_kontrak_edit').html(
                        '<option value="" selected disabled>Select Contract Type</option>');
                    $.each(response.dataContract, function(key, value) {
                        if (response.dataEmployeeContract.id_kontrak == value.id) {
                            $('#durasi_edit').val(value.durasi)
                        }
                        $('#id_kontrak_edit')
                            .append(
                                '<option value="' + value.id + '"' +
                                ((response.dataEmployeeContract.id_kontrak == value.id) ?
                                    'selected' : '') + '>' +
                                value.tipe_kontrak + " - " + value.durasi + " bulan" +
                                '</option>');
                    });
                    $('.start-date').val(response.dataEmployeeContract.tanggal_mulai)
                    $('#end_date_edit').val(response.dataEmployeeContract.tanggal_selesai)
                }
            });
        });
        $('#id_kontrak_edit').on('change', function() {
            let kontrakid = this.value;
            $.ajax({
                url: '{{ route('getContract') }}?id=' + kontrakid,
                type: 'get',
                success: function(res) {
                    $.each(res, function(key, value) {
                        $('#durasi_edit').val(value.durasi);
                        const today = new Date($('.start-date').val());
                        const endDate = new Date(today.getFullYear(),
                            today.getMonth() + value.durasi, today.getDate())
                        $('#end_date_edit').val($.format.date(endDate,
                            "yyyy-MM-dd"))
                    });
                }
            });
        });
        $('.start-date').on('change', function() {
            const durasi = parseInt($('#durasi_edit').val())
            const startDate = new Date(this.value);
            const endDate = new Date(startDate.getFullYear(),
                startDate.getMonth() + durasi, startDate.getDate())
            $('#end_date_edit').val($.format.date(endDate, "yyyy-MM-dd"))
        })
    </script>
</body>
<!--end::Body-->

</html>
