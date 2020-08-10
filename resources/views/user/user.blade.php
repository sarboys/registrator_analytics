@extends('layouts.app')

@section('content')


    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container ">
            <!--begin::Profile Account Information-->
            <div class="d-flex flex-row">
                <!--begin::Aside-->
                <div class="flex-row-auto offcanvas-mobile w-250px w-xxl-350px" id="kt_profile_aside">
                    <!--begin::Profile Card-->
                    <div class="card card-custom card-stretch">
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end">
                                <div class="dropdown dropdown-inline">
                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                </div>
                            </div>
                            <!--end::Toolbar-->

                            <!--begin::User-->
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                                    <div class="symbol-label" style="background-image:url('assets/media/users/300_21.jpg')"></div>
                                    <i class="symbol-badge bg-success"></i>
                                </div>
                                <div>
                                    <a href="#" class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">
                                        {{$id->name}}
                                    </a>
                                    <div class="text-muted">
                                        @if($id->role == '1')
                                            Администратор
                                        @endif
                                        @if($id->role == '2')
                                            Менеджер
                                        @endif
                                    </div>

                                </div>
                            </div>
                            <!--end::User-->

                            <!--begin::Contact-->
                            <div class="py-9">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="font-weight-bold mr-2">Email:</span>
                                    <a href="#" class="text-muted text-hover-primary">{{$id->email}}</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="font-weight-bold mr-2">Phone:</span>
                                    <span class="text-muted">44(76)34254578</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="font-weight-bold mr-2">Location:</span>
                                    <span class="text-muted">Melbourne</span>
                                </div>
                            </div>

                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Profile Card-->
                </div>
                <!--end::Aside-->

                <!--begin::Content-->
                <div class="flex-row-fluid ml-lg-8">
                    <!--begin::Card-->
                    <div class="card card-custom">
                        <!--begin::Header-->
                        <div class="card-header py-3">
                            <div class="card-title align-items-start flex-column">
                                <h3 class="card-label font-weight-bolder text-dark">Информация об аккаунте</h3>
                                <span class="text-muted font-weight-bold font-size-sm mt-1">Change your account settings</span>
                            </div>
                            <div class="card-toolbar">
                                <button type="reset" class="btn btn-success mr-2">Принять изменения</button>
                                <button type="reset" class="btn btn-secondary">Сбросить</button>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                        <form class="form">
                            <div class="card-body">
                                <!--begin::Heading-->
                                <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <h5 class="font-weight-bold mb-6">Аккаунт:</h5>
                                    </div>
                                </div>
                                <!--begin::Form Group-->
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Username</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div >
                                            <input class="form-control form-control-lg form-control-solid" type="text" value="{{$id->email}}" />
                                        </div>
                                    </div>
                                </div>
                                <!--begin::Form Group-->
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group input-group-lg input-group-solid">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                            <input type="text" class="form-control form-control-lg form-control-solid" value="{{$id->email}}" placeholder="Email"  />
                                        </div>
                                        <span class="form-text text-muted">Email will not be publicly displayed. <a href="#" class="kt-link">Learn more</a>.</span>
                                    </div>
                                </div>

                                <div class="separator separator-dashed my-5"></div>
                                <!--begin::Form Group-->
                                <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <h5 class="font-weight-bold mb-6">Security:</h5>
                                    </div>
                                </div>
                                <!--begin::Form Group-->
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Login verification</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <button type="button" class="btn btn-light-primary font-weight-bold btn-sm">Setup login verification</button>
                                        <p class="form-text text-muted pt-2">
                                            After you log in, you will be asked for additional information to confirm your identity and protect your account from being compromised.
                                            <a href="#" class="font-weight-bold">Learn more</a>.
                                        </p>
                                    </div>
                                </div>
                                <!--begin::Form Group-->
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Password reset verification</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="checkbox-inline">
                                            <label class="checkbox m-0">
                                                <input type="checkbox" />
                                                <span></span>
                                                Require personal information to reset your password.
                                            </label>
                                        </div>
                                        <p class="form-text text-muted py-2">
                                            For extra security, this requires you to confirm your email or phone number when you reset your password.
                                            <a href="#" class="font-weight-boldk">Learn more</a>.
                                        </p>

                                        <button type="button" class="btn btn-light-danger font-weight-bold btn-sm">Deactivate your account ?</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Profile Account Information-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
    </div>
    <!--end::Content-->

@endsection

