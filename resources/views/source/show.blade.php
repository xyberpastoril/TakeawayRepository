@extends('includes.template')

@section('content')


<div class="mb-3">
    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
    <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
    <div class="row mt-1">
        <p class="section-title-with-subtitle m-0"><b>The quick brown fox jumps over the lazy fat dog</b></p>
        <p>
            <span class="text-muted">Feb. 12, 2022 | </span>
            <span class="ml-3 badge rounded-pill bg-primary">Test</span>
        </p>
    </div>
</div>


<div class="row" data-masonry="{&quot;percentPosition&quot;: true }" style="position: relative; height: 690px;">
    <div class="col-sm-6 col-lg-4 mb-4" style="position: absolute; left: 0%; top: 0px;">
        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal-takeaway" class="card card-hover">
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
        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal-takeaway" class="card card-hover p-3">
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
        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal-takeaway" class="card card-hover">
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
        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal-takeaway" class="card card-hover  bg-primary text-white text-center p-3">
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
        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal-takeaway" class="card card-hover  text-center">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has a regular title and short paragraph of text below it.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4" style="position: absolute; left: 0%; top: 362px;">
        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal-takeaway" class="card card-hover">
            <svg class="bd-placeholder-img card-img" width="100%" height="260" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder: Card image" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                    dy=".3em">Card image</text>
            </svg>

        </a>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4" style="position: absolute; left: 66.6667%; top: 378px;">
        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal-takeaway" class="card card-hover  p-3 text-end">
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
        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal-takeaway" class="card card-hover">
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
  <div class="modal fade" id="modal-takeaway" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-takeaway-label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-takeaway-label">Edit takeaway</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>

@endsection
