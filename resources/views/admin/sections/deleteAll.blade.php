<!-- Delete All Laptops With Section Page /content/ -->

@extends('admin.layouts.layout')

@section('title', 'Delete Section')


@section('content')

<div class="row list-group-item-info page-title">
    <div class="col-xs-12">
         Are you sure that you want to delete all Laptops in <b> {{ $id->name }} </b> Section.
    </div>
</div>


<div class="row list-group-item">
    <div class="col-xs-12">
        <a href="/admin/section/deleteAll/{{ $id->id }}" type="button" class="btn btn-danger">Delete All !</button> 
        <a href="/admin/get-sections" type="button" class="btn btn-default">No Go Back</a> 
    </div>
</div>

@stop