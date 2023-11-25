<div class="modal fade" id="kt_modal_update_contract" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form class="form" action="#" id="kt_modal_update_contract_form">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_update_contract_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Update Contract Details</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-contracts-modal-action="close">
                        <!-- Close icon here -->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body px-5 my-7">
                    <!--begin::Scroll-->
                    <div class="d-flex flex-column scroll-y" id="kt_modal_update_contract_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#kt_modal_update_contract_header" data-kt-scroll-wrappers="#kt_modal_update_contract_scroll" data-kt-scroll-offset="300px">
                        <!--begin::Contract toggle-->
                        <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_update_contract_info" role="button" aria-expanded="false"
                            aria-controls="kt_modal_update_contract_info">Contract Information
                            <span class="ms-2 rotate-180">
                                <!-- Toggle icon here -->
                            </span>
                        </div>
                        <!--end::Contract toggle-->

                        <!--begin::Contract form-->
                        <div id="kt_modal_update_contract_info" class="collapse show">
                            <!--begin::Input group for Contract Number-->
                            <div class="fv-row mb-7">
                                <label class="fs-6 fw-semibold mb-2">Contract Number</label>
                                <input type="number" class="form-control form-control-solid" placeholder="" name="contract_number" />
                            </div>

                            <!--begin::Input group for Supervisor ID-->
                            <div class="fv-row mb-7">
                                <label class="fs-6 fw-semibold mb-2">Supervisor ID</label>
                                <input type="number" class="form-control form-control-solid" placeholder="" name="supervisor_id" />
                            </div>

                            <!--begin::Input group for Delegate ID-->
                            <div class="fv-row mb-7">
                                <label class="fs-6 fw-semibold mb-2">Delegate ID</label>
                                <input type="number" class="form-control form-control-solid" placeholder="" name="delegate_id" />
                            </div>

                            <!--begin::Input group for Created By-->
                            <div class="fv-row mb-7">
                                <label class="fs-6 fw-semibold mb-2">Created By</label>
                                <input type="text" class="form-control form-control-solid" placeholder="" name="created_by" />
                            </div>

                            <!--begin::Input group for Cancelled By-->
                            <div class="fv-row mb-7">
                                <label class="fs-6 fw-semibold mb-2">Cancelled By</label>
                                <input type="text" class="form-control form-control-solid" placeholder="" name="cancelled_by" />
                            </div>

                            <!--begin::Input group for Cancelled At-->
                            <div class="fv-row mb-7">
                                <label class="fs-6 fw-semibold mb-2">Cancelled At</label>
                                <input type="date" class="form-control form-control-solid" placeholder="" name="cancelled_at" />
                            </div>
                        </div>
                        <!--end::Contract form-->
                    </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Modal body-->

                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    <button type="reset" class="btn btn-light me-3" data-kt-contracts-modal-action="cancel">Discard</button>
                    <button type="submit" class="btn btn-primary" data-kt-contracts-modal-action="submit">
                        <span class="indicator-label">Update</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
                <!--end::Modal footer-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
