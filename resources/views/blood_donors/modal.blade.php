<div id="addModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('messages.blood_donor.new_blood_donor') }}</h5>
                <button type="button" aria-label="Close" class="close" data-dismiss="modal">×</button>
            </div>
            {{ Form::open(['id'=>'addNewForm']) }}
            <div class="modal-body">
                <div class="alert alert-danger display-none" id="validationErrorsBox"></div>
                <div class="row">
                    <div class="form-group col-sm-12">
                        {{ Form::label('name', __('messages.blood_donor.name').(':')) }}<span
                                class="required">*</span>
                        {{ Form::text('name', '', ['id'=>'name','class' => 'form-control','required']) }}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12">
                        {{ Form::label('age', __('messages.blood_donor.age').(':')) }}<span class="required">*</span>
                        {{ Form::number('age', '', ['id'=>'age','class' => 'form-control','required','min' => '1', 'max' => '100']) }}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12">
                        {{ Form::label('gender', __('messages.user.gender').':') }}<span class="required">*</span>
                        &nbsp;<br>
                        <input type="radio" name="gender" value="0" checked> {{ __('messages.user.male') }} &nbsp;
                        <input type="radio" name="gender" value="1"> {{ __('messages.user.female') }}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12">
                        {{ Form::label('blood_group', __('messages.blood_donor.blood_group').(':')) }}<span
                                class="required">*</span>
                        {{ Form::select('blood_group', $bloodGroup, null, ['class' => 'form-control select2Selector', 'id' => 'bloodGroup','placeholder'=>'Select Blood Group', 'required']) }}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12">
                        {{ Form::label('last_donate_date', __('messages.blood_donor.last_donation_date').(':')) }}
                        <span
                                class="required">*</span>
                        {{ Form::text('last_donate_date', '', ['id'=>'lastDonationDate','class' => 'form-control','required','autocomplete' => 'off']) }}
                    </div>
                </div>
                <div class="text-right">
                    {{ Form::button(__('messages.common.save'), ['type'=>'submit','class' => 'btn btn-primary','id'=>'btnSave','data-loading-text'=>"<span class='spinner-border spinner-border-sm'></span> Processing..."]) }}
                    <button type="button" class="btn btn-light ml-1"
                            data-dismiss="modal">{{ __('messages.common.cancel') }}</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
