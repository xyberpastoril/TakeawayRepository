@extends('includes.template')

@section('content')

<div class="d-lg-flex justify-content-between mb-4 mb-lg-2">
    <div class="">
        <p class="mb-1 section-subtitle">
            <i class="fa-solid fa-lightbulb text-warning"></i>
            <b>Source of the Day</b>
        </p>
        <p class="section-title-with-subtitle m-0"><b>The quick brown fox jumps over the lazy fat dog</b></p>
        <p>
            <span class="text-muted">Feb. 12, 2022 | </span>
            <span class="ml-3 badge rounded-pill bg-primary">Test</span>
        </p>
    </div>
    <div class="mt-3">
        <a href="{{-- route('source.show') --}}" class="btn btn-outline-primary">
            <i class="fa-solid fa-arrow-up-right-from-square"></i>
            Read Full Source
        </a>
    </div>
</div>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-4 mb-5">
    <div class="col">
        <a href="{{-- route('source.show') --}}" class="card card-hover h-100">
            <div class="card-body">
                <h5 class="card-title">Card card-hover title</h5>
                <p class="card-text">This is a wider card card-hover with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
            </div>
        </a>
    </div>
    <div class="col">
        <a href="{{-- route('source.show') --}}" class="card card-hover h-100">
            <div class="card-body">
                <h5 class="card-title">Card card-hover title</h5>
                <p class="card-text">This card card-hover has supporting text below as a natural lead-in to additional content.</p>
            </div>
        </a>
    </div>
    <div class="col">
        <a href="{{-- route('source.show') --}}" class="card card-hover h-100">
            <div class="card-body">
                <h5 class="card-title">Card card-hover title</h5>
                <p class="card-text">This is a wider card card-hover with supporting text below as a natural lead-in to additional
                    content. This card card-hover has even longer content than the first to show that equal height action.</p>
            </div>
        </a>
    </div>
</div>

<div class="d-lg-flex justify-content-lg-between mb-4">
    <div class="">
        <p class="section-title m-0">
            <i class="fa-solid fa-rss text-primary"></i>
            <b>Most Recent Sources</b>
        </p>
    </div>
    <div class="mt-1">
        <a href="#" class="btn btn-outline-primary">
            <i class="fa-solid fa-angles-right"></i>
            See More
        </a>
    </div>
</div>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-4">
    <div class="col">
        <a href="{{-- route('source.show') --}}" class="card card-hover h-100">
            <div class="card-body">
                <h5 class="card-title">Card card-hover title</h5>
                <span class="badge rounded-pill bg-primary">Example Tag</span>
            </div>
            <div class="card-footer">
                <small class="text-muted">Feb. 12, 2022</small>
            </div>
        </a>
    </div>
    <div class="col">
        <a href="{{-- route('source.show') --}}" class="card card-hover h-100">
            <div class="card-body">
                <h5 class="card-title">Card card-hover title</h5>
                <span class="badge rounded-pill bg-primary">Example Tag</span>
            </div>
            <div class="card-footer">
                <small class="text-muted">Feb. 12, 2022</small>
            </div>
        </a>
    </div>
    <div class="col">
        <a href="{{-- route('source.show') --}}" class="card card-hover h-100">
            <div class="card-body">
                <h5 class="card-title">Card card-hover title</h5>
                <span class="badge rounded-pill bg-primary">Example Tag</span>
            </div>
            <div class="card-footer">
                <small class="text-muted">Feb. 12, 2022</small>
            </div>
        </a>
    </div>
    <div class="col">
        <a href="{{-- route('source.show') --}}" class="card card-hover h-100">
            <div class="card-body">
                <h5 class="card-title">Card card-hover title</h5>
                <span class="badge rounded-pill bg-primary">Example Tag</span>
            </div>
            <div class="card-footer">
                <small class="text-muted">Feb. 12, 2022</small>
            </div>
        </a>
    </div>
</div>

{{-- MODALS --}}
@include('forms.source.create')

@endsection
