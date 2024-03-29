@extends('pelanggan.layout.index')

@section('content')
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <!---- Group List ---->
                <div class="card-header">
                    Kategori
                </div>
                <div class="card-body">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Standing Pouch
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="d-flex flex-column gap-2">
                                        <a href="#" class="page-link">
                                            <i class="fa fa-plus"></i>Kecil
                                        </a>
                                        <a href="#" class="page-link">
                                            <i class="fa fa-plus"></i>Sedang
                                        </a>
                                        <a href="#" class="page-link">
                                            <i class="fa fa-plus"></i>Besar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Dus/Box
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="accordion-body p-0">
                                        <div class="d-flex flex-column gap-2">
                                            <a href="#" class="page-link">
                                                <i class="fa fa-plus"></i>Kecil
                                            </a>
                                            <a href="#" class="page-link">
                                                <i class="fa fa-plus"></i>Sedang
                                            </a>
                                            <a href="#" class="page-link">
                                                <i class="fa fa-plus"></i>Besar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Paper Bag
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="accordion-body p-0">
                                        <div class="d-flex flex-column gap-2">
                                            <a href="#" class="page-link">
                                                <i class="fa fa-plus"></i>Kecil
                                            </a>
                                            <a href="#" class="page-link">
                                                <i class="fa fa-plus"></i>Sedang
                                            </a>
                                            <a href="#" class="page-link">
                                                <i class="fa fa-plus"></i>Besar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 d-flex flex-wrap gap-3 mb-4">
            <div class="card" style="width: 200px;">
                <div class="card-header m-auto" style="border-radius:5px;">
                    <img src="{{ asset('asset/images/contoh1.png') }}" alt="baju 1" style="width: 100%">
                </div>
                <div class="card-body">
                    <p class="m-0 text-justify">Baju Cutton warna hitam </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i>5+</p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 15px; font-weight:600;"> Rp.500.000 </p>
                    <button class="btn btn-outline-primary" style="font-size:15px">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>
            <div class="card" style="width: 200px;">
                <div class="card-header m-auto" style="border-radius:5px;">
                    <img src="{{ asset('asset/images/contoh1.png') }}" alt="baju 1" style="width: 100%">
                </div>
                <div class="card-body">
                    <p class="m-0 text-justify">Baju Cutton warna hitam </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i>5+</p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 15px; font-weight:600;"> Rp.500.000 </p>
                    <button class="btn btn-outline-primary" style="font-size:15px">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>
            <div class="card" style="width: 200px;">
                <div class="card-header m-auto" style="border-radius:5px;">
                    <img src="{{ asset('asset/images/contoh1.png') }}" alt="baju 1" style="width: 100%">
                </div>
                <div class="card-body">
                    <p class="m-0 text-justify">Baju Cutton warna hitam </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i>5+</p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 15px; font-weight:600;"> Rp.500.000 </p>
                    <button class="btn btn-outline-primary" style="font-size:15px">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>
            <div class="card" style="width: 200px;">
                <div class="card-header m-auto" style="border-radius:5px;">
                    <img src="{{ asset('asset/images/contoh1.png') }}" alt="baju 1" style="width: 100%">
                </div>
                <div class="card-body">
                    <p class="m-0 text-justify">Baju Cutton warna hitam </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i>5+</p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 15px; font-weight:600;"> Rp.500.000 </p>
                    <button class="btn btn-outline-primary" style="font-size:15px">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>
            <div class="card" style="width: 200px;">
                <div class="card-header m-auto" style="border-radius:5px;">
                    <img src="{{ asset('asset/images/contoh1.png') }}" alt="baju 1" style="width: 100%">
                </div>
                <div class="card-body">
                    <p class="m-0 text-justify">Baju Cutton warna hitam </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i>5+</p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 15px; font-weight:600;"> Rp.500.000 </p>
                    <button class="btn btn-outline-primary" style="font-size:15px">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>
            <div class="card" style="width: 200px;">
                <div class="card-header m-auto" style="border-radius:5px;">
                    <img src="{{ asset('asset/images/contoh1.png') }}" alt="baju 1" style="width: 100%">
                </div>
                <div class="card-body">
                    <p class="m-0 text-justify">Baju Cutton warna hitam </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i>5+</p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 15px; font-weight:600;"> Rp.500.000 </p>
                    <button class="btn btn-outline-primary" style="font-size:15px">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>
            <div class="card" style="width: 200px;">
                <div class="card-header m-auto" style="border-radius:5px;">
                    <img src="{{ asset('asset/images/contoh1.png') }}" alt="baju 1" style="width: 100%">
                </div>
                <div class="card-body">
                    <p class="m-0 text-justify">Baju Cutton warna hitam </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i>5+</p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 15px; font-weight:600;"> Rp.500.000 </p>
                    <button class="btn btn-outline-primary" style="font-size:15px">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>
            <div class="card" style="width: 200px;">
                <div class="card-header m-auto" style="border-radius:5px;">
                    <img src="{{ asset('asset/images/contoh1.png') }}" alt="baju 1" style="width: 100%">
                </div>
                <div class="card-body">
                    <p class="m-0 text-justify">Baju Cutton warna hitam </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i>5+</p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 15px; font-weight:600;"> Rp.500.000 </p>
                    <button class="btn btn-outline-primary" style="font-size:15px">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>
            <div class="card" style="width: 200px;">
                <div class="card-header m-auto" style="border-radius:5px;">
                    <img src="{{ asset('asset/images/contoh1.png') }}" alt="baju 1" style="width: 100%">
                </div>
                <div class="card-body">
                    <p class="m-0 text-justify">Baju Cutton warna hitam </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i>5+</p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 15px; font-weight:600;"> Rp.500.000 </p>
                    <button class="btn btn-outline-primary" style="font-size:15px">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>
            <div class="card" style="width: 200px;">
                <div class="card-header m-auto" style="border-radius:5px;">
                    <img src="{{ asset('asset/images/contoh1.png') }}" alt="baju 1" style="width: 100%">
                </div>
                <div class="card-body">
                    <p class="m-0 text-justify">Baju Cutton warna hitam </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i>5+</p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 15px; font-weight:600;"> Rp.500.000 </p>
                    <button class="btn btn-outline-primary" style="font-size:15px">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>
            <div class="card" style="width: 200px;">
                <div class="card-header m-auto" style="border-radius:5px;">
                    <img src="{{ asset('asset/images/contoh1.png') }}" alt="baju 1" style="width: 100%">
                </div>
                <div class="card-body">
                    <p class="m-0 text-justify">Baju Cutton warna hitam </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i>5+</p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 15px; font-weight:600;"> Rp.500.000 </p>
                    <button class="btn btn-outline-primary" style="font-size:15px">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>
            <div class="card" style="width: 200px;">
                <div class="card-header m-auto" style="border-radius:5px;">
                    <img src="{{ asset('asset/images/contoh1.png') }}" alt="baju 1" style="width: 100%">
                </div>
                <div class="card-body">
                    <p class="m-0 text-justify">Baju Cutton warna hitam </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i>5+</p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 15px; font-weight:600;"> Rp.500.000 </p>
                    <button class="btn btn-outline-primary" style="font-size:15px">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>
            <!---- Pagination ---->
            <nav class="">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
