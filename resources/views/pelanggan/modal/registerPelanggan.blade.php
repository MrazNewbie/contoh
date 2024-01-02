<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 " id="registerModalLabel">Register</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama <span style="color: red">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama" name="nama" value=""
                            placeholder="Masukan nama anda" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-3 col-form-label">Email <span
                            style="color: red">*</span></label></label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="email" name="email" value=""
                            placeholder="Masukan email anda" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="password" class="col-sm-3 col-form-label">Password <span
                            style="color: red">*</span></label></label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Masukan password anda" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-3 col-form-label">Alamat <span
                            style="color: red">*</span></label></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="alamat" name="alamat"
                            placeholder="Masukan alamat anda">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tlp" class="col-sm-3 col-form-label">No HP <span
                            style="color: red">*</span></label></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="tlp" name="tlp"
                            placeholder="Masukan no hp anda">
                    </div>
                </div>

                <button type="button" class="btn btn-success col-sm-12">Login</button>
                <p class=" m-auto text-center p-2" style="font-size: 12px"> </p>
                <button type="button" class="btn btn-danger col-sm-12" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
