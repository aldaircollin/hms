@extends('layouts.app')
@section('title')
    {{__('messages.accountant.accountant_details')}}
@endsection
@section('page_css')
    <link href="{{ asset('assets/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('coreui-templates::common.errors')
            <div class="d-flex justify-content-end py-2">
                <div>
                    <a href="{{ url('accountants/'.$accountant->id.'/edit') }}"
                       class="btn btn-dark mr-2">{{ __('messages.common.edit') }}</a>
                    <a href="{{ route('accountants.index') }}"
                       class="btn btn-primary pull-right">{{__('messages.common.back')}}</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>{{__('messages.accountant.accountant_details')}}</strong>
                        </div>
                        <div class="card-body">
                            @include('accountants.show_fields')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_scripts')
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ mix('assets/js/custom/custom-datatable.js') }}"></script>
    <script src="{{ mix('assets/js/accountants/accountants_data_listing.js') }}"></script>
@endsection
