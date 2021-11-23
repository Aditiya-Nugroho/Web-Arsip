@extends('templates.main')
@section('title','Data Pegawai')
@section('content')
    <section class="page-index">
        <div class="static">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-static">                            
                                <div class="icon-static makeCenter">
                                    <i class='bx bx-menu' id="header-toggle"></i>
                                </div>
                                <div class="text-static ">
                                    <p>
                                        Jumlah Arsip
                                    </p>
                                </div>
                                <div class="number-static">
                                    <h1>
                                        10
                                    </h1>
                                </div>                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-static">                            
                                <div class="icon-static makeCenter">
                                    <i class='bx bx-menu' id="header-toggle"></i>
                                </div>
                                <div class="text-static ">
                                    <p>
                                        Jumlah Pegawai
                                    </p>
                                </div>
                                <div class="number-static">
                                    <h1>
                                        10
                                    </h1>
                                </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="title-table">
            <div class="title-form">

                <h2>Data Pegawai</h2>

            <div class="cta">
                <a href="{{url('/tambahPegawai')}}" type="button" class="btn btn-cta">Tambah Pegawai</a>
            </div>
        </div>
        </div>
        <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                <tr>
                    <th style="width: 150px">No Pegawai</th>
                    <th style="width: 150px">Nama</th>
                    <th style="width: 150px">Kelamin</th>
                    <th style="width: 150px">Jabatan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>213123123</td>
                    <td>nama</td>
                    <td>laki</td>
                    <td>staff</td>
                </tr>
                <tbody>
            </table>
        </div>
    </section>
    
@endsection