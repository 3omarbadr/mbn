<x-default-layout>
    @section('title')
    Contracts
    @endsection
    
    {{-- @section('breadcrumbs')
    {{ Breadcrumbs::render('contracts.index') }}
    @endsection --}}

        <!-- Contract summary cards -->
        <div class="row">
            <div class="col-lg-6">
                <!-- Last Contract Card -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Last Contract</h5>
                        @if($lastContract)
                        <p class="card-text">Contract Number: {{ $lastContract->contract_number }}</p>
                        <p class="card-text">Contract Supervisor: {{ $lastContract->supervisor->name }}</p>
                        <p class="card-text">Contract Delegate: {{ $lastContract->delegate->name }}</p>
                        <p class="card-text">Created_at: {{ $lastContract->created_at->format('d M Y, h:i a') }}</p>
                        <!-- Additional details here -->
                        @else
                        <p class="card-text">No contracts available.</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Total Contracts Card -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Total Contracts</h5>
                        <p class="card-text">{{ $totalContracts }}</p>
                    </div>
                </div>
            </div>
        </div>

    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    {!! getIcon('magnifier', 'fs-3 position-absolute ms-5') !!}
                    <input type="text" data-kt-contract-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search contract" id="mySearchInput"/>
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-contract-table-toolbar="base">
                    <!--begin::Add contract-->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_contract">
                        {!! getIcon('plus', 'fs-2', '', 'i') !!}
                        Add Contract
                    </button>
                    <!--end::Add contract-->
                </div>
                <!--end::Toolbar-->

                <!--begin::Modal-->
                <livewire:contract.add-contract-modal></livewire:contract.add-contract-modal>
                <!--end::Modal-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body py-4">
            <!--begin::Table-->
            <div class="table-responsive">
                {{ $dataTable->table() }}
            </div>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>

    @push('scripts')
        {{ $dataTable->scripts() }}
        <script>
            document.getElementById('mySearchInput').addEventListener('keyup', function () {
                window.LaravelDataTables['contracts-table'].search(this.value).draw();
            });
            document.addEventListener('livewire:load', function () {
                Livewire.on('success', function () {
                    $('#kt_modal_add_contract').modal('hide');
                    window.LaravelDataTables['contracts-table'].ajax.reload();
                });
            });
        </script>
    @endpush

</x-default-layout>
