<x-default-layout>
    @section('title')
    Contracts
    @endsection

    @section('breadcrumbs')
    <!-- Breadcrumbs placeholder or component -->
    @endsection

    <div class="container-fluid">
        <div class="row">
            <!--begin::Card for Contract Details-->
            <div class="col-md-12">
                <!--begin::Card-->
                <div class="card mb-5 mb-xl-8">
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Details content-->
                        <div class="row pb-5 fs-6">
                            <!--begin::Details item-->
                            <div class="col-md-6">
                                <div class="fw-bold mt-5">Supervisor</div>
                                <div class="text-gray-600">{{ $contract->supervisor->name }}</div>
                            </div>
                            <div class="col-md-6">
                                <div class="fw-bold mt-5">Delegate</div>
                                <div class="text-gray-600">{{ $contract->delegate->name }}</div>
                            </div>
                            <!--end::Details item-->
                            <!--begin::Details item-->
                            <div class="col-md-6">
                                <div class="fw-bold mt-5">Contract ID</div>
                                <div class="text-gray-600">{{ $contract->contract_number }}</div>
                            </div>
                            <div class="col-md-6">
                                <div class="fw-bold mt-5">Created By</div>
                                <div class="text-gray-600">{{ $contract->created_by }}</div>
                            </div>
                            <!--end::Details item-->
                            <!--begin::Details item-->
                            <div class="col-md-6">
                                <div class="fw-bold mt-5">Created At</div>
                                <div class="text-gray-600">{{ $contract->created_at->format('d M Y, h:i A') }}</div>
                            </div>
                            <div class="col-md-6">
                                <div class="fw-bold mt-5">Last Updated</div>
                                <div class="text-gray-600">{{ $contract->updated_at->format('d M Y, h:i A') }}</div>
                            </div>
                            <!--end::Details item-->
                        </div>
                        <!--end::Details content-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Card for Contract Details-->
        </div>
    </div>
</x-default-layout>
