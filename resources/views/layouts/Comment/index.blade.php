@extends('layouts.backend-dashboard.app')
@section('title','My Comments')
@section('breadcrumb', 'Comments')

@section('content')
  @include('layouts.Comment.html')
@endsection

@section('extra_javascript')
  @include('layouts.Comment.javascript')
@endsection
