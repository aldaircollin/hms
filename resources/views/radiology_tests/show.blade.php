@extends('layouts.app')
@section('title')
    {{ __('messages.radiology_test.radiology_test_details') }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('coreui-templates::common.errors')
            <div class="d-flex justify-content-end py-2">
                <div>
                    <a href="{{ route('radiology.test.edit',['radiologyTest' => $radiologyTest->id]) }}"
                       class="btn btn-dark mr-2">{{ __('messages.common.edit') }}</a>
                    <a href="{{ url()->previous() }}"
                       class="btn btn-primary pull-right">{{ __('messages.common.back') }}</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>{{ __('messages.radiology_test.radiology_test_details') }}</strong>
                        </div>
                        <div class="card-body">
                            @include('radiology_tests.show_fields')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection