@extends('layouts.app')
@section('title')
    {{ __('messages.patient_admission.details') }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('coreui-templates::common.errors')
            <div class="d-flex justify-content-end py-2">
                <div>
                    <a href="{{ route('patient-admissions.edit',['patient_admission' => $patientAdmission->id]) }}"
                       class="btn btn-dark mr-2">{{ __('messages.common.edit') }}</a>
                    <a href="{{ url()->previous() }}"
                       class="btn btn-primary pull-right">{{ __('messages.common.back') }}</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>{{ __('messages.patient_admission.details') }}</strong>
                        </div>
                        <div class="card-body">
                            @include('patient_admissions.show_fields')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
