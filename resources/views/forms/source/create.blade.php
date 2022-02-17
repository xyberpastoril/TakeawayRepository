<div class="modal fade" id="modal-create-source" tabindex="-1" aria-labelledby="modal-create-source-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-create-source-label">Create Source</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form-create-source" action="" method="post">
                    <div class="row mb-3">
                        <label for="f-cs-title" class="col-sm-3 col-form-label">Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="f-cs-title" name="title">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="f-cs-reference-url" class="col-sm-3 col-form-label">Reference</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="f-cs-reference-url" name="reference_url">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="f-cs-tags" class="col-sm-3 col-form-label">Tags</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="f-cs-tags" name="tags">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="f-cs-date" class="col-sm-3 col-form-label">Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="f-cs-date" name="date">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="form-create-source">Save Source</button>
            </div>
        </div>
    </div>
</div>