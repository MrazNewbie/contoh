@extends('pelanggan.layout.index')

@section('content')
    <div class="row mt-4 align-items-center">
        <div class="col-md-6">
            <div class="content-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Error hic, atque quaerat tenetur, magni enim,
                fugiat at
                maxime deserunt tempore quia laboriosam explicabo alias eveniet? Maxime maiores ipsum pariatur est? Quidem
                perferendis id fugiat tempora ullam quod, magnam itaque. Placeat, sit ipsam ea fuga cupiditate magni, quam
                libero ratione odit, accusamus illum vitae! Dolores repellendus ratione eum quas, in dolorem fugiat sequi?
                Dolorem, excepturi distinctio. Saepe nemo expedita dignissimos veniam labore sint recusandae velit fugit
                culpa
                nam eius ipsum odit distinctio molestiae aliquam, asperiores inventore reiciendis aliquid? Voluptatem, est.
                Earum error officia quod voluptates quibusdam alias saepe aliquid ex, iusto, quis autem inventore
                necessitatibus
                sit, itaque natus ullam qui obcaecati voluptatem quae beatae eos corporis. Ad asperiores nobis nulla in ea
                odio
                dolor. Ad placeat animi nobis blanditiis ducimus accusantium corporis necessitatibus dicta odio dolor.
                Tempore
                nulla animi dolorum, excepturi aut, ratione laborum eligendi doloribus delectus hic aliquid tenetur? Enim.
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('asset/images/office.png') }}" style="width: 100%" alt="">
        </div>
    </div>

    <div class="d-flex justify-content-lg-between mt-5">
        <div class="d-flex align-items-center gap-4">
            <i class="fa fa-users fa-2x"></i>
            <p class="m-0 fs-5"> +300 Pelanggan</p>
        </div>
    </div>

    <h4 class="text-center mt-md-5 mb-md-2">Contact Us</h4>
    <hr class="mb-5 ">
    <div class="row mb-md-5">
        <div class="col-md-5">
            <div class="bg-secondary" style="width:100%; height:50vh; border-radius:10px;"></div>
        </div>

        <!--- Saran Dan Masukan --->
        <div class="col-md-7">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Kritik Dan Saran</h4>
                </div>
                <div class="card-body">
                    <p class="p-0 mb-5 text-lg-center"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem harum
                        saepe fuga quaerat beatae culpa? Iusto mollitia magnam atque ad.</p>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" value=""
                                placeholder="Masukan email anda">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pesan" placeholder="Masukan pesan anda">
                        </div>
                    </div>
                    <button class="btn btn-primary mt-4 w-100"> Kirim</button>
                </div>
            </div>
        </div>
    </div>
@endsection
