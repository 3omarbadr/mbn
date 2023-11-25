<x-default-layout>
    @section('title')
    Commissions
    @endsection

    @section('breadcrumbs')
    <!-- Breadcrumbs placeholder or component -->
    @endsection

    <div class="container-fluid">
        <div class="row">
            <!--begin::Card for Commission Details-->
            <div class="col-md-12">
                <!--begin::Card-->
                <div class="card mb-5 mb-xl-8">
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Details content-->
                        <div class="row pb-5 fs-6">
                            <!--begin::Details item-->
                            <div class="col-md-6">
                                <div class="fw-bold mt-5">User</div>
                                <div class="text-gray-600">{{ $commission->user->name }}</div>
                            </div>
                            <div class="col-md-6">
                                <div class="fw-bold mt-5">Amount</div>
                                <div class="text-gray-600">{{ $commission->amount }}</div>
                            </div>
                            <!--end::Details item-->
                            <!--begin::Details item-->
                            <div class="col-md-6">
                                <div class="fw-bold mt-5">Commission Type</div>
                                <div class="text-gray-600">{{ $commission->commission_type }}</div>
                            </div>
                            <div class="col-md-6">
                                <div class="fw-bold mt-5">Commission Source</div>
                                <div class="text-gray-600">{{ $commission->commission_source }}</div>
                            </div>
                            <!--end::Details item-->
                            <!--begin::Details item-->
                            <div class="col-md-6">
                                <div class="fw-bold mt-5">Max Counter</div>
                                <div class="text-gray-600">{{ $commission->max_counter }}</div>
                            </div>
                            <div class="col-md-6">
                                <div class="fw-bold mt-5">Created At</div>
                                <div class="text-gray-600">{{ $commission->created_at->format('d M Y, h:i A') }}</div>
                            </div>
                            <!--end::Details item-->
                        </div>
                        <!--end::Details content-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Card for Commission Details-->
        </div>
    </div>
</x-default-layout>
