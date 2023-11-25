<div class="modal fade" id="kt_modal_add_commission" tabindex="-1" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header" id="kt_modal_add_commission_header">
                <h2 class="fw-bold">{{ $edit_mode ? 'Edit' : 'Add' }} Commission</h2>
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" aria-label="Close">
                    <!-- Icon for closing modal -->
                </div>
            </div>
            <div class="modal-body px-5 my-7">
                <form id="kt_modal_add_commission_form" class="form" wire:submit.prevent="submit">
                    <input type="hidden" wire:model.defer="commission_id" name="commission_id" />
                    <div class="d-flex flex-column scroll-y px-5 px-lg-10" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_commission_header" data-kt-scroll-wrappers="#kt_modal_add_commission_scroll" data-kt-scroll-offset="300px">
                        <!-- User -->
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2">User</label>
                            <select wire:model.defer="user_id" name="user_id" class="form-select form-select-solid">
                                <option value="">Select User</option>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                            @error('user_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <!-- Amount -->
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2">Amount</label>
                            <input type="number" step="0.01" wire:model.defer="amount" name="amount" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Amount"/>
                            @error('amount') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <!-- Commission Type -->
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2">Commission Type</label>
                            <select wire:model.defer="commission_type" name="commission_type" class="form-select form-select-solid">
                                <option value="">Select Type</option>
                                <option value="fixed">Fixed</option>
                                <option value="percentage">Percentage</option>
                            </select>
                            @error('commission_type') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <!-- Commission Source -->
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2">Commission Source</label>
                            <input type="text" wire:model.defer="commission_source" name="commission_source" class="form-control form-control-solid" placeholder="Source"/>
                            @error('commission_source') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <!-- Max Counter -->
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2">Max Counter</label>
                            <input type="number" wire:model.defer="max_counter" name="max_counter" class="form-control form-control-solid" placeholder="Max Counter"/>
                            @error('max_counter') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="text-center pt-15">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal" aria-label="Close" wire:loading.attr="disabled">Discard</button>
                        <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                            <span class="indicator-label" wire:loading.remove>{{ $edit_mode ? 'Update' : 'Submit' }}</span>
                            <span class="indicator-progress" wire:loading wire:target="submit">Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
