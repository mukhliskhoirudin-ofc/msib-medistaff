<div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="backDropModalTitle">Create Doctor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="nameBackdrop" class="form-label">Name</label>
                        <input type="text" id="nameBackdrop" class="form-control" placeholder="Enter Name" />
                    </div>
                </div>
                <div class="row g-2 mb-3">
                    <div class="col mb-0">
                        <label for="emailBackdrop" class="form-label">Email</label>
                        <input type="text" id="emailBackdrop" class="form-control" placeholder="xxxx@xxx.xx" />
                    </div>
                    <div class="col mb-0">
                        <label for="phoneBackdrop" class="form-label">Phone</label>
                        <input type="text" id="phoneBackdrop" class="form-control" placeholder="08xx-xxxx-xxxx" />
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlSelect1" class="form-label">Gender</label>
                    <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                        <option value="" hidden>-- Select Gender --</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
