@extends('index')

@section('content')


<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>
<div class="page-heading">
    <h3>Transaksi</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-lg-12">
            <div class="row p-2 bg-white">
                <div class="col-md-10">
                    <input type="search" name="search" id="search" class="form-control" placeholder="Cari disini">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaltransaksi">Tambah Transaksi</button>
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
                                <th>Jumlah Tiket</th>
                                <th>Pembayaran</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-center">
                                    <span class="badge bg-success">Lunas</span>
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>


{{-- Modal Tambah --}}
<div class="modal fade" id="modaltransaksi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Transaksi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="card border-0">
                <div class="card-body py-0">
                    <form action="" method="POST" class="form form-vertical">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12 mb-1">
                                    <select name="nama" id="" class="form-select">
                                        <option value="" selected>Nama Wisata</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Nominal</label>
                                        <input type="text" id="" class="form-control"
                                            name="nominal" placeholder="Rp. 15.000,-">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Jumlah Tiket Masuk</label>
                                        <input type="text" id="" class="form-control"
                                            name="jumlah" placeholder="1">
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

@endsection