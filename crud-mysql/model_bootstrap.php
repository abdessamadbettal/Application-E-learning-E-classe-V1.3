    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un student </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">


                    <form method="POST" action="">
                        <div class="form-outline mb-4">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-check-label">Phone</label>
                            <input type="number" class="form-control" name="phone" />
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-check-label">Enroll Number</label>
                            <input type="number" class="form-control" name="enroll" />
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-check-label">Date of admission</label>
                            <input type="date" class="form-control" name="date" />
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="save">Save changes</button>
                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>