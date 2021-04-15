@extends('layouts.backend-dashboard.app')
@section('title','Import My Data')
@section('breadcrumb', 'Import')

@section('content')
  @include('layouts.Import.html')
@endsection

@section('extra_javascript')
  @include('layouts.Import.javascript')
@endsection
