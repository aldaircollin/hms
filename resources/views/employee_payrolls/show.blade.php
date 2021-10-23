@extends('layouts.app')
@section('title')
    {{ __('messages.employee_payroll.employee_payroll_details') }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('coreui-templates::common.errors')
            <div class="d-flex justify-content-end py-2">
                <div>
                    @if (!Auth::user()->hasRole('Doctor|Case Manager|Lab Technician|Nurse|Pharmacist|Receptionist'))
                        <a href="{{ route('employee-payrolls.edit',['employeePayroll' => $employeePayroll->id]) }}"
                           class="btn btn-dark mr-2">{{ __('messages.common.edit') }}</a>
                    @endif
                    <a href="{{ url()->previous() }}"
                       class="btn btn-primary pull-right">{{ __('messages.common.back') }}</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>{{ __('messages.employee_payroll.employee_payroll_details') }}</strong>
                        </div>
                        <div class="card-body">
                            @include('employee_payrolls.show_fields')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
