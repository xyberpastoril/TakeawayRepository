<div class="modal fade" id="modal-delete-source" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-delete-source-label" aria-hidden="true">
    <div class="modal-sm modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modal-delete-source-label">Delete Source</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form-delete-source" action="" method="post">
                    @csrf
                    @method('DELETE')
                    Are you sure you want to delete this source?
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <button type="submit" class="btn btn-primary" form="form-delete-source">Yes</button>
            </div>
        </div>
    </div>
</div>