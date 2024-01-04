@extends('pelanggan.layout.index')

@section('content')
    <div class="row mt-3">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <h3>Masukan Alamat Penerima</h3>

                    <div class="row mb-3">
                        <label for="nama_penerima" class="col-form-label col-sm-3">Nama penerima</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="alamat_penerima" name="namaPenerima"
                                placeholder="Masukan Nama penerima" autofocus>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="alamat_penerima" class="col-form-label col-sm-3">Alamat</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control " id="alamat_penerima" name="namaPenerima"
                                placeholder="Masukan alamat penerima">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tlp" class="col-form-label col-sm-3">No HP</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tlp" name="tlp"
                                placeholder="Masukan no hp penerima">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="kurir" class="col-form-label col-sm-3">Jasa Pengiriman</label>
                        <div class="col-sm-9">
                            <select name="kurir" class="form-control" id="kurir">
                                <option value="">-- Pilih Jasa --</option>
                                <option value="jnt">JNT Express</option>
                                <option value="jne">JNE Regular</option>
                                <option value="sicepat">Sicepat</option>
                                <option value="ninja">Ninja Express</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header text-center p-2">
                    <h3>Nota Belanja</h3>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <label for="totalBelanja" class="col-form-label col-sm-4">Harga :</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control " id="totalBelanja" name="totalBelanja" value="200000"
                                disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="discount" class="col-form-label col-sm-4">Discount :</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control " id="discount" name="discount" value="0"
                                disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Ppn" class="col-form-label col-sm-4">Ppn :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control " id="Ppn" name="Ppn" value="2200"
                                disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="ongkir" class="col-form-label col-sm-4">Ongkir :</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control " id="ongkir" name="ongkir" value="10000"
                                disabled>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <label for="dibayarkan" class="col-form-label col-sm-4">Total </label>
                        <div class="col-sm-8">
                            <input type="nunber" class="form-control " id="dibayarkan" name="dibayarkan" value="212200"
                                disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="diterima" class="col-form-label col-sm-4">Uang Masuk </label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="diterima" name="diterima" value="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="dikembalikan" class="col-form-label col-sm-4">Kembalian </label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control " id="dikembalikan" name="dikembalikan"
                                value="" readonly>
                        </div>
                    </div>
                    <button class="btn btn-success w-100">
                        <i class="fas fa-print"></i>
                        Print Invoice
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
