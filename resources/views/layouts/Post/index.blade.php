@extends('layouts.backend-dashboard.app')
@section('title','My Facebook Posts')
@section('breadcrumb', 'Posts')

@section('content')
  @include('layouts.Post.html')
@endsection

@section('extra_javascript')
  @include('layouts.Post.javascript')
@endsection
