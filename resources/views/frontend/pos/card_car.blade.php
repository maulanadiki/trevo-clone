<style>
.mobil::after{
content:'';
width:2px;
height:90vh;
}
.card_car:hover{
filter:brightness(90%);
}
</style>

<div class="container-fluid p-3 overflow-auto mobil">
    <div class="col-md-12 d-flex justify-content-end">
        <div class="col-md-6 ">
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" type="button" aria-expanded="false">Cari</button>

                <input type="text" class="form-control" aria-label="Text input with dropdown button">
            </div>
        </div>
    </div>
    <div class="row overflow-auto" style="height:90vh; overflow:auto; background-color:#f2f2f2;">
        @foreach($mobil as $mb)
        <div class="col-md-4 p-2 card_car">
        <a style="cursor:pointer;">
            <div class="card shadow text-center" style="width: 18rem;">
                <p class="fs-5 text-center p-2">{{$mb->merk}} - {{$mb->model}}</p>
                <img src="{{asset('images/'.$mb->foto_mobil) }}" class="card-img-top" alt="{{$mb->model}}"
                    style="width:270px; height:163px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <p class="fs-6">HP</p>
                        </div>
                        <div class="col-md-5">
                            <p class="fs-6">{{$mb->cc}} HP</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <p class="fs-6">Tarif</p>
                        </div>
                        <div class="col-md-7">
                            <p class="fs-6">{{number_format($mb->tarif)}} / Hari</p>
                        </div>
                    </div>
                        <button class="btn btn-success">Booked Now</button>
                </div>
            </div>
            </a>
        </div>
        @endforeach
    </div>
</div>