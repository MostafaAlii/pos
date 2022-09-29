@extends('dashboard.layouts.master')

@section('css')

@endsection

@section('pageTitle')
    {{ trans('dashboard/auth.two_factor_authentication') }}
@endsection



@section('content')
<div class="card card-xxl-stretch mb-5 mb-xl-8">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">{{ trans('dashboard/auth.two_factor_authentication') }}</span>
        </h3>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Wrapper-->
        <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
            <!--begin::Form-->
            @include('dashboard.common._partials.messages')
            <form class="form w-100" novalidate="novalidate" method="POST" id="kt_sign_in_form" method="POST" action="{{ route('password.confirm') }}">
                @csrf
                <!--begin::Heading-->
                <div class="text-center mb-10">
                    <!--begin::Title-->
                    <h1 class="text-dark mb-3">{{ trans('dashboard/auth.two_factor_authentication_password_confirm') }}</h1>
                    <!--end::Title-->
                </div>
                <!--begin::Heading-->
                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack mb-2">
                    <!--begin::Input-->
                    <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
                    <!--end::Input-->
                    @error('password')
                    <div class="fv-plugins-message-container">
                        <div data-field="password" data-validator="notEmpty" class="fv-help-block text-danger">{{ $message }}</div>
                    </div>
                    @enderror
                </div>
                <!--end::Input group-->
                <!--begin::Actions-->
                <div class="text-center">
                    <!--begin::Submit button-->
                    <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                        <span class="indicator-label">{{ trans('dashboard/auth.confirm') }}</span>
                        <span class="indicator-progress">
                            {{ trans('dashboard/auth.please_wait') }}
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                    <!--end::Submit button-->
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--begin::Body-->
</div>
@endsection

@section('js')

@endsection