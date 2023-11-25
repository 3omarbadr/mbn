<x-default-layout>
    @section('title')
    Commissions
    @endsection
    
    {{-- @section('breadcrumbs')
    {{ Breadcrumbs::render('commissions.index') }}
    @endsection --}}

    <!--begin::Card for Commissions Table-->
    <div class="card">
        <div class="card-header border-0 pt-6">
            <div class="card-title">
                <div class="d-flex align-items-center position-relative my-1">
                    {!! getIcon('magnifier', 'fs-3 position-absolute ms-5') !!}
                    <input type="text" data-kt-commission-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search commission" id="mySearchInput"/>
                </div>
            </div>
            <div class="card-toolbar">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_commission">
                    {!! getIcon('plus', 'fs-2', '', 'i') !!}
                    Add Commission
                </button>
            </div>
        </div>


         <!--begin::Modal-->
         <livewire:commission.add-commission-modal></livewire:commission.add-commission-modal>
         <!--end::Modal-->


        <div class="card-body py-4">
            <div class="table-responsive">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
    <!--end::Card for Commissions Table-->

    @push('scripts')
        {{ $dataTable->scripts() }}
        <script>
            document.getElementById('mySearchInput').addEventListener('keyup', function () {
                window.LaravelDataTables['commissions-table'].search(this.value).draw();
            });
            document.addEventListener('livewire:load', function () {
                Livewire.on('success', function () {
                    $('#kt_modal_add_commission').modal('hide');
                    window.LaravelDataTables['commissions-table'].ajax.reload();
                });
            });
        </script>
    @endpush
</x-default-layout>
