<div class="modal fade" id="modal-edit-source" tabindex="-1" aria-labelledby="modal-edit-source-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-edit-source-label">Edit Source</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form-edit-source" action="" method="post">                    
                    <div class="row mb-3">
                        <label for="f-es-title" class="col-sm-3 col-form-label">Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="f-es-title" name="title">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="f-es-reference-url" class="col-sm-3 col-form-label">Reference</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="f-es-reference-url" name="reference_url">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="f-es-tags" class="col-sm-3 col-form-label">Tags</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="f-es-tags" name="tags">
                        </div>
                    </div>
                     <div class="row mb-3">
                        <label for="f-es-date" class="col-sm-3 col-form-label">Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="f-es-date" name="date">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="form-edit-source">Update Source</button>
            </div>
        </div>
    </div>
</div>