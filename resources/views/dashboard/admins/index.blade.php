@extends('dashboard.layouts.master')

@section('css')

@endsection

@section('pageTitle')
    {{ trans('dashboard/admin.admins') }}
@endsection

@section('content')
<div id="kt_content_container" class="container-xxl">
    <div class="card card-xxl-stretch mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">
                    <span class="menu-icon">
                        <i class="bi bi-people fs-1 text-gray-500"></i>
                    </span>
                    {{ trans('dashboard/admin.admins') }}
                </span>
                <span class="text-muted mt-1 fw-bold fs-7">يوجد 500 أدارة/ مشرف</span>
            </h3>
            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" >
                <a href="{{-- aurl('admins/create') --}}" class="btn btn-sm btn-light btn-active-primary" >
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                        </svg>
                    </span>
                    {{ trans('dashboard/admin.create_admin') }}
                </a>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                {!! $dataTable->table([
                    'class' => 'dataTable table table-row-dashed table-striped table-hover table-borderd table-row-gray-300 align-middle gs-0 gy-4',
                    'style' => 'border-collapse: collapse; border-spacing: 0; width: 100%;'
                ]) !!}
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>

    @push('js')
        {!! $dataTable->scripts() !!}
    @endpush
@endsection

