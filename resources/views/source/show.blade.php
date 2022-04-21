@extends('includes.template')

@section('content')


<div class="mb-3">
    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal-create-takeaway">Create Takeaway</button>
    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modal-edit-source">Edit Source</button>
    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-source">Delete</button>
    <div class="row mt-1">
        <p class="section-title-with-subtitle m-0"><b>{{ $title }}</b></p>
        <p>
            <span class="text-muted">
                {{ $date }} 
                @if(count($tags)) | @endif
            </span>
            @foreach($tags as $tag)
                <span class="ml-3 badge rounded-pill bg-primary">{{ $tag['name'] }}</span>
            @endforeach
        </p>
    </div>
</div>


<div class="row" data-masonry="{&quot;percentPosition&quot;: true }" style="position: relative; height: 690px;">
    <div class="col-sm-6 col-lg-4 mb-4" style="position: absolute; left: 0%; top: 0px;">
        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal-edit-takeaway" class="card card-hover">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                    dy=".3em">Image cap</text>
            </svg>

            <div class="card-body">
                <h5 class="card-title">Card title that wraps to a new line</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4" style="position: absolute; left: 33.3333%; top: 0px;">
        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal-edit-takeaway" class="card card-hover p-3">
            <figure class="p-3 mb-0">
                <blockquote class="blockquote">
                    <p>A well-known quote, contained in a blockquote element.</p>
                </blockquote>
                <figcaption class="blockquote-footer mb-0 text-muted">
                    Someone famous in <cite title="Source Title">Source Title</cite>
                </figcaption>
            </figure>
        </a>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4" style="position: absolute; left: 66.6667%; top: 0px;">
        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal-edit-takeaway" class="card card-hover">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                    dy=".3em">Image cap</text>
            </svg>

            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4" style="position: absolute; left: 33.3333%; top: 171px;">
        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal-edit-takeaway" class="card card-hover  bg-primary text-white text-center p-3">
            <figure class="mb-0">
                <blockquote class="blockquote">
                    <p>A well-known quote, contained in a blockquote element.</p>
                </blockquote>
                <figcaption class="blockquote-footer mb-0 text-white">
                    Someone famous in <cite title="Source Title">Source Title</cite>
                </figcaption>
            </figure>
        </a>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4" style="position: absolute; left: 33.3333%; top: 310px;">
        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal-edit-takeaway" class="card card-hover  text-center">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has a regular title and short paragraph of text below it.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4" style="position: absolute; left: 0%; top: 362px;">
        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal-edit-takeaway" class="card card-hover">
            <svg class="bd-placeholder-img card-img" width="100%" height="260" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder: Card image" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                    dy=".3em">Card image</text>
            </svg>

        </a>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4" style="position: absolute; left: 66.6667%; top: 378px;">
        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal-edit-takeaway" class="card card-hover  p-3 text-end">
            <figure class="mb-0">
                <blockquote class="blockquote">
                    <p>A well-known quote, contained in a blockquote element.</p>
                </blockquote>
                <figcaption class="blockquote-footer mb-0 text-muted">
                    Someone famous in <cite title="Source Title">Source Title</cite>
                </figcaption>
            </figure>
        </a>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4" style="position: absolute; left: 33.3333%; top: 488px;">
        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal-edit-takeaway" class="card card-hover">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is another card with title and supporting text below. This card has some
                    additional content to make it slightly taller overall.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </a>
    </div>
</div>
  
  <!-- Modal -->
  

{{-- MODALS --}}
@include('forms.source.create')
@include('forms.source.edit')
@include('forms.source.delete')
@include('forms.takeaway.create')
@include('forms.takeaway.edit')
@include('forms.takeaway.delete')

@endsection
