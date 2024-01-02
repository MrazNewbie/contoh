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
    <div class="card">
        <div class="card-body d-flex gap-4">
            <img src="{{ asset('asset/images/contoh1.png') }}" alt="">
            <div class="desc">
                <p style="font-size: 24px; font-weight:700">baju anak aduhai</p>
                <h3>Rp 200.000</h3>
                <p>Jumlah</p>
                <div class="d-flex">
                    <button class="rounded-start bg-secondary p-2 border border-0" id="plus">+</button>
                    <input type="number" name="jml" id="jml" class="form-control w-25 text-center" min="0"
                        max="999" value="1">
                    <button class="rounded-end bg-secondary p-2 border border-0" id="minus" disabled>-</button>
                </div>
            </div>
        </div>
    </div>
@endsection
