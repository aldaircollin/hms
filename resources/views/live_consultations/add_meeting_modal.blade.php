<div id="addModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('messages.live_consultation.new_live_meeting') }}</h5>
                <button type="button" aria-label="Close" class="close" data-dismiss="modal">×</button>
            </div>
            {{ Form::open(['id'=>'addNewForm']) }}
            <div class="modal-body">
                <div class="alert alert-danger display-none" id="validationErrorsBox"></div>
                <div class="row">
                    <div class="form-group col-sm-12">
                        {{ Form::label('consultation_title', __('messages.live_consultation.consultation_title').(':')) }}
                        <span
                                class="required">*</span>
                        {{ Form::text('consultation_title', '', ['class' => 'form-control consultation-title','required']) }}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        {{ Form::label('consultation_date', __('messages.live_consultation.consultation_date').(':')) }}
                        <span
                                class="required">*</span>
                        {{ Form::text('consultation_date', '', ['class' => 'form-control consultation-date','required', 'autocomplete' => 'off']) }}
                    </div>
                    <div class="form-group col-sm-6">
                        {{ Form::label('consultation_duration_minutes', __('messages.live_consultation.consultation_duration_minutes').(':')) }}
                        <span
                                class="required">*</span>
                        {{ Form::number('consultation_duration_minutes', '', ['class' => 'form-control consultation-duration-minutes','required', 'min' => '0', 'max' => '720']) }}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12 staff-list">
                        {{ Form::label('staff_list', __('messages.live_consultation.staff_list').':') }}<span
                                class="required">* </span>
                        {{ Form::select('staff_list[]', $users, getLoggedInUserId(), ['class' => 'form-control', 'required', 'id'=>'userId', 'multiple' => true]) }}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        {{ Form::label('host_video',__('messages.live_consultation.host_video').':') }}
                        <div>
                            {{ Form::radio('host_video', \App\Models\LiveConsultation::HOST_ENABLE, ['class' => 'form-control host-enable']) }} {{ __('messages.live_consultation.enable') }}
                            {{ Form::radio('host_video', \App\Models\LiveConsultation::HOST_DISABLED, ['class' => 'form-control host-disabled']) }} {{ __('messages.live_consultation.disabled') }}
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        {{ Form::label('participant_video', __('messages.live_consultation.client_video').':') }}
                        <div>
                            {{ Form::radio('participant_video', \App\Models\LiveConsultation::CLIENT_ENABLE, ['class' => 'form-control client-enable']) }} {{ __('messages.live_consultation.enable') }}
                            {{ Form::radio('participant_video', \App\Models\LiveConsultation::CLIENT_DISABLED, ['class' => 'form-control client-disabled']) }} {{ __('messages.live_consultation.disabled') }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12">
                        {{ Form::label('description', __('messages.testimonial.description').(':')) }}
                        {{ Form::textarea('description', '', ['class' => 'form-control description', 'rows' => 3]) }}
                    </div>
                </div>
                <div class="text-right">
                    {{ Form::button(__('messages.common.save'), ['type' => 'submit','class' => 'btn btn-primary','id' => 'btnSave','data-loading-text' => "<span class='spinner-border spinner-border-sm'></span> Processing..."]) }}
                    <button type="button" class="btn btn-light ml-1"
                            data-dismiss="modal">{{ __('messages.common.cancel') }}</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
