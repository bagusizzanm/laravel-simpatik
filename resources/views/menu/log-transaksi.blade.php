@extends('index')

@section('content')


<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>
<div class="page-heading">
    <h3>Log Transaksi</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-lg-12">
           
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
                                <td>
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


@endsection