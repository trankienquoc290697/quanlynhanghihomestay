@extends('Backend::layouts.main')
@section('title', __('Customer Update'))
@section('icon') <i class="icon-user"></i> @endsection
@section('direction')
<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
    <div class="d-flex">
        <div class="breadcrumb">
            <a href="http://cms-team2.com:8000/admin" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
            <a href="{{route('customer.index')}}" class="breadcrumb-item">Customer & Provider</a>
            <span class="breadcrumb-item active">Customer Edit</span>
        </div>

        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>
</div>
@endsection
@section('toolbar')
<a href="{{ route('customer.index') }}"
class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
<i class="icon-close2 text-pink-800"></i>
<span>{{ __('Cancel') }}</span>
</a>
<a href="javascript:void(0)" onclick="$('#frmMain').submit()"
class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
<i class="icon-check text-green-800"></i>
<span>{{ __('Save') }}</span>
</a>
@endsection
@section('content')
<div class="card">
    @include('Backend::partials.messages', ['errors' => $errors])
    <div class="card-header header-elements-inline">
    </div>

    <div class="card-body">
        <p class="mb-4"></p>

        <form method="post" action="{{ route('customer.update',$customer->id) }}" id="frmMain">
           @csrf
           @method('put')
           <fieldset class="mb-3">

            <div class="form-group row">
                <label class="col-form-label col-lg-2" for="name">{{ __('Customer First Name') }}</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" name="first_name" id="first_name" value="{{$customer->first_name}}">
                    @if ($errors->has('first_name'))
                    <span class="invalid-feedback" role="alert">{{ $errors->first('first_name') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-lg-2" for="last_name">{{ __('Customer Last Name') }}</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" name="last_name" id="last_name" value="{{$customer->last_name}}">
                    @if ($errors->has('last_name'))
                    <span class="invalid-feedback" role="alert">{{ $errors->first('last_name') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-lg-2" for="email">{{ __('Email') }}</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" id="email" value="{{$customer->email}}">
                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-lg-2" for="phone">{{ __('Phone') }}</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" name="phone" id="phone" value="{{$customer->phone}}">
                    @if ($errors->has('phone'))
                    <span class="invalid-feedback" role="alert">{{ $errors->first('phone') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-2" for="role">{{ __('Role') }}</label>
                <div class="col-lg-10">
                    <select class="form-control select select2-hidden-accessible" data-fouc="" tabindex="-1" aria-hidden="true" name="role">
                        <optgroup class="srole">
                            <option value="1">Wholesale Customers</option>
                            <option value="2">Retail Customers</option>
                        </optgroup>
                    </select>
                    @if ($errors->has('role'))
                    <span class="invalid-feedback" role="alert">{{ $errors->first('role') }}</span>
                    @endif  
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-2" for="address">{{ __('Address') }}</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" id="address" value="{{$customer->address}}">
                    @if ($errors->has('address'))
                    <span class="invalid-feedback" role="alert">{{ $errors->first('address') }}</span>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>


@endsection