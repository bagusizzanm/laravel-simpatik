@extends('index')

@section('content')


<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>
<div class="page-heading">
    <h3>Wisata Tersedia</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-lg-12">
            <div class="row p-2 bg-white">
                <div class="col-md-10">
                    <input type="search" name="search" id="search" class="form-control" placeholder="Cari disini">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalwisata">Tambah Wisata</button>
                </div>
            </div>
            <div class="card border-0 mt-3">
                <div class="card-body">
                    <table class="table" id="table1">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nama Wisata</th>
                                <th>Harga Tiket</th>
                                <th>Gambar</th>
                                <th>Rating</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-center"><a href="/detailwisata" class="btn btn-sm btn-secondary align-items-center" data-bs-toggle="modal" data-bs-target="#lihatgambar"><i class="bi bi-eye-fill"></i></a></td>
                                <td></td>
                                <td class="text-center">
                                    <span class="badge bg-success">Active</span>
                                </td>
                                <td class="text-center">
                                    <a href="/detailwisata" class="btn btn-sm btn-secondary align-items-center" data-bs-toggle="modal" data-bs-target="#modaledit"><i class="bi bi-pencil"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>



{{-- Modal Tambah --}}
<div class="modal fade" id="modalwisata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Wisata</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="card border-0">
                <div class="card-body py-0">
                    <form action="" method="POST" class="form form-vertical">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="first-name-vertical">Alamat Wisata</label>
                                        <input type="text" id="" class="form-control"
                                            name="alamat" placeholder="Alamat...">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Nama Wisata</label>
                                        <input type="text" id="" class="form-control"
                                            name="email-id" placeholder="Nama...">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Harga Tiket Masuk</label>
                                        <input type="number" id="" class="form-control"
                                            name="contact" placeholder="Rp. 15.000,-">
                                    </div>
                                </div>
                                <div class="col-12 mb-1">
                                    <select name="status" id="" class="form-select">
                                        <option value="aktif">Aktif</option>
                                        <option value="nonaktif">Tidak Aktif</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Deskripsi</label>
                                        <textarea id="" class="form-control"
                                            name="contact" placeholder="" rows="3">
                                        </textarea>
                                    </div>
                                </div>
                                <div class="col-12 ">
                                    <div class="input-group mb-3">
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupFile01"><i
                                                    class="bi bi-upload"></i></label>
                                            <input type="file" class="form-control" id="inputGroupFile01">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class='form-check'>
                                        <div class="checkbox">
                                            <input type="checkbox" id="checkbox3" class='form-check-input'
                                                checked>
                                            <label for="checkbox3">Remember Me</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end mt-3">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset"
                                        class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Modal Edit --}}
<div class="modal fade" id="modaledit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Wisata</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="card border-0">
                <div class="card-body py-0">
                    <form action="" method="POST" class="form form-vertical">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="first-name-vertical">Alamat Wisata</label>
                                        <input type="text" id="" class="form-control"
                                            name="alamat" value="">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Nama Wisata</label>
                                        <input type="text" id="" class="form-control"
                                            name="email-id" value="">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Harga Tiket Masuk</label>
                                        <input type="number" id="" class="form-control"
                                            name="contact" value="">
                                    </div>
                                </div>
                                <div class="col-12 mb-1">
                                    <select name="status" id="" class="form-select">
                                        <option value="aktif">Aktif</option>
                                        <option value="nonaktif">Tidak Aktif</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Deskripsi</label>
                                        <textarea id="" class="form-control"
                                            name="contact" rows="3">
                                        </textarea>
                                    </div>
                                </div>
                                <div class="col-12 ">
                                    <div class="input-group mb-3">
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupFile01"><i
                                                    class="bi bi-upload"></i></label>
                                            <input type="file" class="form-control" id="inputGroupFile01">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class='form-check'>
                                        <div class="checkbox">
                                            <input type="checkbox" id="checkbox3" class='form-check-input'
                                                checked>
                                            <label for="checkbox3">Remember Me</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end mt-3">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset"
                                        class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Lihat Gambar --}}
  <div class="modal fade" id="lihatgambar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nama Wisata</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="card border-0">
                <div class="card-content">
                    <img class="card-img-top img-fluid" src="assets/images/samples/origami.jpg" alt="Card image cap"
                        style="height: 20rem" />
                    <div class="card-body">
                        <h4 class="card-title">Top Image Cap</h4>
                        <p class="card-text">
                            Jelly-o sesame snaps cheesecake topping. Cupcake fruitcake macaroon donut
                            pastry gummies tiramisu chocolate bar muffin. Dessert bonbon caramels brownie chocolate
                            bar
                            chocolate tart dragée.
                        </p>
                        <p class="card-text">
                            Cupcake fruitcake macaroon donut pastry gummies tiramisu chocolate bar muffin.
                        </p>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection