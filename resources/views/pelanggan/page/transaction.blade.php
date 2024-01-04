@extends('pelanggan.layout.index')

@section('content')
    <!---Untuk menghilangkan arrow di dalam form number --->
    <style>
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>

    <h3 class="mt-5"> Keranjang Belanja</h3>
    <div class="card mb-3">
        <div class="card-body d-flex gap-4">
            <img src="{{ asset('asset/images/contoh1.png') }}" alt="">
            <div class="desc w-100">
                <p style="font-size: 24px; font-weight:700">baju anak aduhai</p>
                <input type="number" class="form-control border-0 fs-1" id="harga" value="200000">
                <div class="row mb-2">
                    <label for="jml" class="col-sm-2 col-form-label fs-5">Jumlah</label>
                    <div class="col-sm-5 d-flex">
                        <button class="rounded-start bg-secondary p-2 border border-0" id="plus">+</button>
                        <input type="number" name="jml" id="jml" class="form-control w-25 text-center"
                            min="0" max="999" value="1">
                        <button class="rounded-end bg-secondary p-2 border border-0" id="minus" disabled>-</button>
                    </div>
                </div>
                <div class="row">
                    <label for="harga" class="col-sm-2 col-form-label fs-5"> Total</label>
                    <input type="text" class="col-sm-2 form-control w-25 border-0 fs-4" readonly id="total">
                </div>
                <div class="row w-50 gap-1">
                    <a href="/checkout" class="btn btn-success col-sm-5">
                        <i class="fa fa-shopping-cart"> </i>
                        Check out
                    </a>
                    <button class="btn btn-danger col-sm-5">
                        <i class="fa fa-trash-alt"> </i>
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
