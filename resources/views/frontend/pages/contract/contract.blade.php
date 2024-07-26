@extends('frontend.layout.app')
@section('title',$title)
@section('content')
    {{-- @include('frontend.components.component.breadcome_section',['title'=>$title]) --}}
    @include('frontend.components.contract.contract')
@endsection
