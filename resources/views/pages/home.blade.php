@extends('layouts.app')

@section('content')

<x-topbar />
<x-navbar />

@include('sections.home.hero')
@include('sections.home.about')
@include('sections.home.services')
@include('sections.home.pricing')
@include('sections.home.testimonials')
@include('sections.home.blog')
@include('sections.home.contact')

<x-footer />

@endsection