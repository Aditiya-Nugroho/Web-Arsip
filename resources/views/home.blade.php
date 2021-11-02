@extends('templates.main')
@section('title','My Arsip')
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
                                        Jumlah Surat Masuk
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
                                <div class="text-static">
                                    <p>
                                        Jumlah Surat Masuk
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
            <h2>Responsive Table</h2>
        </div>
        <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                <tr>
                    <th>Header 1</th>
                    <th>Header 2</th>
                    <th>Header 3</th>
                    <th>Header 4</th>
                    <th>Header 5</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Content 1</td>
                    <td>Content 1</td>
                    <td>Content 1</td>
                    <td>Content 1</td>
                    <td>Content 1</td>
                </tr>
                <tr>
                    <td>Content 2</td>
                    <td>Content 2</td>
                    <td>Content 2</td>
                    <td>Content 2</td>
                    <td>Content 2</td>
                </tr>
                <tbody>
            </table>
        </div>
    </section>
    
@endsection