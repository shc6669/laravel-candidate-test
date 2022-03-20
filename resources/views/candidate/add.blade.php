@extends('layouts.app')

@section('page-title', 'Manage Data')
@section('page-heading', 'Manage Data - Candidate Management')

@section('breadcrumbs')
    <li class="breadcrumb-item">
        <a href="{{ route('candidate-management.index') }}">@lang('Candidate Management')</a>
    </li>
    <li class="breadcrumb-item active">
        Create Data
    </li>
@stop

@section('content')

@include('partials.messages')

{!! Form::open(['route' => 'candidate-management.store', 'id' => 'candidate-form', 'enctype' => 'multipart/form-data']) !!}

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-2">
                <h5 class="card-title">
                    @lang('Applicant Form')
                </h5>
                <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" title="Back" onclick="window.location.href='{{ route('candidate-management.index') }}'">
                    <span>
                        <i class="fa fa-arrow-left"></i> Back
                    </span>
                </button>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label for="education_qualification_id">@lang('Education Qualification')</label>
                    <select class="form-control input-solid" id="education_qualification_id" name="education_qualification_id">
                        <option></option>
                        @foreach($qualifications as $qualification)
                            <option value="{{$qualification->id}}">{{$qualification->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="education_name">@lang('Education Name')</label>
                    <input type="text" class="form-control" id="education_name" name="education_name" placeholder="@lang('Please input name')">
                </div>
                <div class="form-group">
                    <label for="applicant_name">@lang('Applicant Name')</label>
                    <input type="text" class="form-control" id="applicant_name" name="applicant_name" placeholder="@lang('Please input applicant name')">
                </div>
                <div class="form-group">
                    <label for="email">@lang('Applicant Email')</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="@lang('Please input email')">
                </div>
                <div class="form-group">
                    <label for="applied_position">@lang('Applied Position')</label>
                    <input type="text" class="form-control" id="applied_position" name="applied_position" placeholder="@lang('Please input applied position')">
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label for="education_country_id">@lang('Education Country')</label>
                    <select class="form-control input-solid" id="education_country_id" name="education_country_id">
                        <option></option>
                        @foreach($countries as $country)
                            <option value="{{$country->id}}">{{$country->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="experience">@lang('Experience (in years)')</label>
                    <input type="number" class="form-control" id="experience" name="experience" placeholder="@lang('Please input how many experience (in years)')">
                </div>
                <div class="form-group">
                    <label for="birthday">@lang('Applicant Birthday')</label>
                    <div class="form-group">
                        <input type="text" name="birthday" id='birthday' class="form-control input-solid" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone">@lang('Applicant Phone')</label>
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="@lang('Please input phone')">
                </div>
                <div class="form-group">
                    <label for="last_position">@lang('Last Position')</label>
                    <input type="text" class="form-control" id="last_position" name="last_position" placeholder="@lang('Please input last position')">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <div class="form-group">
                    <label for="skills">@lang('Skills')</label>
                    <select class="form-control input-solid" id="skills" name="skills[]" multiple="multiple">
                        <option value=""></option>
                        @foreach($skills as $skill)
                            <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <div class="form-group">
                    <label for="resume">@lang('Resume')</label>
                    <input data-theme="fas" id="resume" name="resume" type="file">
                </div>
            </div>
        </div>
    
        <div class="row pt-sm-2">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <button type="submit" class="btn btn-outline-success">
                    Submit data
                </button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
<br>
@stop

@section('scripts')
    {!! JsValidator::formRequest('Vanguard\Http\Requests\Candidate\CreateRequest', '#candidate-form') !!}
    {!! HTML::script('assets/js/as/custom.js') !!}
@stop
