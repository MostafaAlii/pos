@extends('dashboard.layouts.login')

@section('css')

@endsection

@section('pageTitle')
    {{ trans('dashboard/auth.admin_2factor_authentication') }}
@endsection

@section('content')
    <!--begin::Authentication - Two-stes -->
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/media/illustrations/unitedpalms-1/14.png">
				<!--begin::Content-->
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					<!--begin::Logo-->
                    <a href="#" class="mb-12">
                        <img alt="Logo" src="{{ asset('assets/dashboard/media/logos/logo-1.svg') }}" class="h-40px" />
                    </a>
                    <!--end::Logo-->
					<!--begin::Wrapper-->
					<div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
						<!--begin::Form-->
                        @include('dashboard.common._partials.messages')
						<form class="form w-100 mb-10" method="post" action="{{ route('two-factor.login') }}" novalidate="novalidate" id="">
							@csrf
							<!--begin::Icon-->
							<div class="text-center mb-10">
								<img alt="Logo" class="mh-125px" src="{{ asset('assets/dashboard/media/svg/misc/smartphone.svg') }}" />
							</div>
							<!--end::Icon-->
							<!--begin::Section-->
							<div class="mb-10 px-md-10">
								<div class="d-flex flex-wrap">
									<input type="text" name="code"  class="form-control form-control-solid  fs-2qx text-center border-primary border-hover mx-1 my-2" />
								</div>
								<!--begin::Input group-->
							</div>
							<!--end::Section-->
							<!--begin::Submit-->
							<div class="d-flex flex-center">
								<button type="submit" id="kt_sing_in_two_steps_submit" class="btn btn-lg btn-primary fw-bolder">
									<span class="indicator-label">{{ trans('dashboard/auth.confirm') }}</span>
									<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
							</div>
							<!--end::Submit-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Authentication - Two-stes-->
@endsection


@section('js')
    <script src="{{ asset("assets/dashboard/js/custom/authentication/sign-in/two-steps.js") }}"></script>
@endsection