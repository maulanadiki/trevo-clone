@section('title','Buat Pembelian')

@extends('layout.layout')
@section('konten')
<script>
function tampilkanPreview(gambar, idpreview) {
    var gb = gambar.files;
    for (var i = 0; i < gb.length; i++) {
        var gbPreview = gb[i];
        var imageType = /image.*/;
        var preview = document.getElementById(idpreview);
        var reader = new FileReader();

        if (gbPreview.type.match(imageType)) {
            preview.file = gbPreview;
            reader.onload = (function(element) {
                return function(e) {
                    element.src = e.target.result;
                };
            })(preview);
            reader.readAsDataURL(gbPreview);
        } else {
            alert("file yang anda upload tidak sesuai. Khusus mengunakan image.");
        }

    }
}
</script>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 p-3 fs-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List Asset</li>
                </ol>
            </nav>

        </div>
        <div class="col-md-6 justify-content-end text-end p-3" style="display:flex; flex-direction:row; gap:12px;">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Category">
                <i class='bx bx-sitemap'></i> Add Category
            </button>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Car">
                <i class='bx bx-plus-circle'></i> Add Car
            </button>
        </div>

        <div class="col-md-12">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Merk</th>
                        <th>Model</th>
                        <th>nopo</th>
                        <th>CC</th>
                        <th>warna</th>
                        <th>Tarif</th>
                        <th>Foto Mobil</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mobil as $mb)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$mb->merk}}</td>
                        <td>{{$mb->model}}</td>
                        <td>{{$mb->nopol}}</td>
                        <td>{{$mb->cc}}</td>
                        <td>{{$mb->warna}}</td>
                        <td>Rp. {{number_format($mb->tarif)}}</td>
                        <td><img src="{{ asset('images/'.$mb->foto_mobil) }}" width="100px" height="auto" alt=""></td>
                        <td><form action="{{route('hapus_mobil',$mb->id)}}" method="post">@csrf
                            <button class="btn btn-danger" ><i class='bx bx-trash'></i> </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
                

            </table>
        </div>
    </div>
</div>











<!-- modal tambah kategori -->
<form action="{{route('saveCategory') }}" method="post">
    @csrf
    <div class="modal fade" id="Category" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true"">
    <div class=" modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Category</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @php
                $type ++;
                $huruf = "MBL-";
                $kode = $huruf.sprintf('%05d', $type);
                @endphp

                <input type="hidden" name="id_type" value="{{$kode}}">
                <div class="row">
                    <div class="col-md-3 mt-3">
                        <span class="fs-6">Car Brand</span>
                    </div>
                    <div class="col-md-6 mt-3">
                        <input type="text" class="form-control" placeholder="Input Brand Car Here !" name="merk"
                            aria-label="Input Brand Car Here !" aria-describedby="basic-addon1" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mt-3">
                        <span class="fs-6">Car Model</span>
                    </div>
                    <div class="col-md-6 mt-3">
                        <input type="text" class="form-control" placeholder="Input Type Car Here !" name="model"
                            aria-label="Input Brand Car Here !" aria-describedby="basic-addon1" required>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><i class='bx bx-save'></i> Save</button>
            </div>
        </div>
    </div>
    </div>
</form>

<!-- modal tambah Mobil -->
<form action="{{route('saveCar') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="Car" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Car</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">Brand Car</div>
                        <div class="col-md-3"><span id="brand"></span>
                        </div>
                        <div class="col-md-2">Type Car</div>
                        <div class="col-md-4">
                            <select class="form-select" aria-label="Default select example" required id="select_car" name="code_car">
                                <option selected>Please Select</option>
                                @foreach($tipe as $tp)
                                <option value="{{$tp->id_type}},{{$tp->merk}}" onChange="tipe_mobil('{{$tp->merk}}')">{{$tp->model}}</option>
                                @endforeach
                                
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3">Number Regist Police</div>
                        <div class="col-md-3">
                            <div
                                style="display:grid; grid-template-columns:33px 1fr 60px; grid-gap:6px; align-items: center;">
                                <input type="text" name="nopol1" class="form-control" id="" placeholder="F"
                                    maxlength="1" required
                                    onkeypress="return event.charCode < 48 || event.charCode >57">
                                <input type="text" name="nopol2" class="form-control" id="" placeholder="1234"
                                    maxlength="4" minlength="1" required
                                    onkeypress="return event.charCode >= 48 && event.charCode <=57">
                                <input type="text" name="nopol3" class="form-control" id="" placeholder="ABC"
                                    maxlength="3" required
                                    onkeypress="return event.charCode < 48 || event.charCode >57">
                            </div>
                        </div>
                        <div class="col-md-2">CC</div>
                        <div class="col-md-4"><input type="text"
                                onkeypress="return event.charCode >= 48 && event.charCode <=57" name="cc"
                                class="form-control" required maxlength="4"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3">Warna</div>
                        <div class="col-md-3"><input type="text" name="warna" class="form-control"
                                onkeypress="return event.charCode < 48 || event.charCode >57" required></div>
                        <div class="col-md-2">Tarif</div>
                        <div class="col-md-4"><input type="text" class="form-control" name="tarif"
                                onkeypress="return event.charCode >= 48 && event.charCode <=57" required maxlength="8"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">Foto Mobil</div>
                        <div class="col-md-12">


                            <input type="file" class="input form-control" accept="image/*" onchange="tampilkanPreview(this,'preview')" name="foto" />
                            <!--untuk menampilkan file gambar yang telah di upload-->
                            <img id="preview" src="" alt="" width="750px" height="auto" class="mt-3" />


                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class='bx bx-save'></i> Save</button>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
$(document).ready(function() {
    $('#example').DataTable();
});

document.getElementById("select_car").addEventListener("change", function() {
    const isi = this.value;
    const splited = isi.split(",");
    const merk = splited[1];

    document.getElementById("brand").innerHTML = merk;
    console.log(merk);
})

</script>
@endsection