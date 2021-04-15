@extends('layouts.backend-dashboard.app')
@section('title','Dashboard')
@section('breadcrumb', 'Dashboard')
@section('content')
  @include('layouts.Dashboard.html')
@endsection
@section('extra_javascript')
  @include('layouts.Dashboard.javascript')
@endsection
