@extends('template.main')
@section('container')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container" id="kt_content_container">
        <!--begin::Row-->
        <div class="row g-5 gx-xxl-8 mb-xxl-3">
            <!--begin::Col-->
            <div class="col-xxl-4">
                <!--begin::Engage Widget 1-->
                <div class="card card-xxl-stretch">
                    <!--begin::Card body-->
                    <div class="card-body d-flex flex-column justify-content-between h-100">
                        <!--begin::Section-->
                        <div class="pt-12">
                            <!--begin::Title-->
                            <h3 class="text-dark text-center fs-1 fw-boldest line-height-lg">Kickstart
                            <br />First Application</h3>
                            <!--end::Title-->
                            <!--begin::Text-->
                            <div class="text-center text-gray-600 fs-5 fw-bold pt-4">Outlines keep you honest. They stoping you from amazing poorly about mega drive</div>
                            <!--end::Text-->
                            <!--begin::Action-->
                            <div class="text-center py-7 mb-18">
                                <a href="#" class="btn btn-primary fs-6 px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create App</a>
                            </div>
                            <!--end::Action-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Image-->
                        <div class="flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom card-rounded-bottom h-150px" style="
                        background-image:
                            url({{asset('theme/dist/assets/media/illustrations/user-welcome.png')}})
                        "></div>
                        <!--end::Image-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Engage Widget 1-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
@endsection
