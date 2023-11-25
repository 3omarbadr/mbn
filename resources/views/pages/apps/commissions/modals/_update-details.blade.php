<div class="modal fade" id="kt_modal_update_commission" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form class="form" action="#" id="kt_modal_update_commission_form">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_update_commission_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Update Commission Details</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <!-- Close icon here -->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body px-5 my-7">
                    <!--begin::Scroll-->
                    <div class="d-flex flex-column scroll-y" id="kt_modal_update_commission_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#kt_modal_update_commission_header" data-kt-scroll-wrappers="#kt_modal_update_commission_scroll" data-kt-scroll-offset="300px">
                        <!--begin::Commission toggle-->
                        <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_update_commission_info" role="button" aria-expanded="false"
                            aria-controls="kt_modal_update_commission_info">Commission Information
                            <span class="ms-2 rotate-180">
                                <!-- Toggle icon here -->
                            </span>
                        </div>
                        <!--end::Commission toggle-->

                        <!--begin::Commission form-->
                        <div id="kt_modal_update_commission_info" class="collapse show">
                            <!--begin::Input group for User ID-->
                            <div class="fv-row mb-7">
                                <label class="fs-6 fw-semibold mb-2">User ID</label>
                                <input type="number" class="form-control form-control-solid" placeholder="" name="user_id" />
                            </div>

                            <!--begin::Input group for Amount-->
                            <div class="fv-row mb-7">
                                <label class="fs-6 fw-semibold mb-2">Amount</label>
                                <input type="text" class="form-control form-control-solid" placeholder="" name="amount" />
                            </div>

                            <!--begin::Input group for Commission Type-->
                            <div class="fv-row mb-7">
                                <label class="fs-6 fw-semibold mb-2">Commission Type</label>
                                <select class="form-control form-control-solid" name="commission_type">
                                    <option value="fixed">Fixed</option>
                                    <option value="percentage">Percentage</option>
                                </select>
                            </div>

                            <!--begin::Input group for Commission Source-->
                            <div class="fv-row mb-7">
                                <label class="fs-6 fw-semibold mb-2">Commission Source</label>
                                <input type="number" class="form-control form-control-solid" placeholder="" name="commission_source" />
                            </div>

                            <!--begin::Input group for Max Counter-->
                            <div class="fv-row mb-7">
                                <label class="fs-6 fw-semibold mb-2">Max Counter</label>
                                <input type="number" class="form-control form-control-solid" placeholder="" name="max_counter" />
                            </div>
                        </div>
                        <!--end::Commission form-->
                    </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Modal body-->

                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Discard</button>
                    <button type="submit" class="btn btn-primary">
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
