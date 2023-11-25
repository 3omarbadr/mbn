<div class="modal fade" id="kt_modal_add_contract" tabindex="-1" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header" id="kt_modal_add_contract_header">
                <h2 class="fw-bold">{{ $edit_mode ? 'Edit' : 'Add' }} Contract</h2>
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" aria-label="Close">
                    <!-- Icon for closing modal -->
                </div>
            </div>
            <div class="modal-body px-5 my-7">
                <form id="kt_modal_add_contract_form" class="form" wire:submit.prevent="submit">
                    <input type="hidden" wire:model.defer="contract_id" name="contract_id" value="{{ $contract_id }}"/>
                    <div class="d-flex flex-column scroll-y px-5 px-lg-10" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_contract_header" data-kt-scroll-wrappers="#kt_modal_add_contract_scroll" data-kt-scroll-offset="300px">
                        <!-- Contract Number -->
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2">Contract Number</label>
                            <input type="text" wire:model.defer="contract_number" name="contract_number" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Contract number"/>
                            @error('contract_number') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <!-- Supervisor -->
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2">Supervisor</label>
                            <select wire:model.defer="supervisor_id" name="supervisor_id" class="form-select form-select-solid">
                                <option value="">Select Supervisor</option>
                                @foreach($supervisors as $supervisor)
                                    <option value="{{ $supervisor->id }}">{{ $supervisor->name }}</option>
                                @endforeach
                            </select>
                            @error('supervisor_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <!-- Delegate -->
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2">Delegate</label>
                            <select wire:model.defer="delegate_id" name="delegate_id" class="form-select form-select-solid">
                                <option value="">Select Delegate</option>
                                @foreach($delegates as $delegate)
                                    <option value="{{ $delegate->id }}">{{ $delegate->name }}</option>
                                @endforeach
                            </select>
                            @error('delegate_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <!-- Other fields as necessary -->
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
