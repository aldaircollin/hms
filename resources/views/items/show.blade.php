@extends('layouts.app')
@section('title')
    {{ __('messages.item.item_details') }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('coreui-templates::common.errors')
            <div class="d-flex justify-content-end py-2">
                <div>
                    <a href="{{ route('items.edit', $item->id) }}"
                       class="btn btn-dark pull-right text-white">{{ __('messages.common.edit') }}</a>
                    <a href="{{ route('items.index') }}"
                       class="btn btn-primary pull-right">{{ __('messages.common.back') }}</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>{{ __('messages.item.item_details') }}</strong>
                        </div>
                        <div class="card-body">
                            @include('items.show_fields')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
