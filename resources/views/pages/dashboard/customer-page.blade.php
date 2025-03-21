@extends('layouts.sidenav-layout')


@section('content')

@include('components.customer.customer-list')
@include('components.customer.customer-create')
@include('components.customer.customer-update')
@include('components.customer.customer-delete')

@endsection

{{-- customer Listing --}}
{{-- customer Create --}}
{{-- customer Update --}}
{{-- customer Edit --}}