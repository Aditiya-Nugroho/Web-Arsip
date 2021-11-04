@extends('templates.main')
@section('title','Tambah Arsip')
@section('content')
<section class="form">
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
    <section class="get-in-touch">
        <div class="title-form">

                <h2>Data Arsip</h2>

            <div class="cta">
                <a href="{{url('/tambahArsip')}}" type="button" class="btn btn-cta">Tambah Arsip</a>
            </div>
        </div>
        <form class="contact-form row">
           <div class="form-field col-lg-6">
              <div class="row ">
                  <div class="col-md-5">
                    <label class="label" for="name">Nama Pegawai</label>
                  </div>
                  <div class="col-md-7">
                      <select class="form-select form-select-sm" aria-label=".form-select-sm example"required>
                        <option value="" disabled selected hidden>Pilih Pegawai</option>
                        <option value="1">One</option>
                        <option value="2">Oni</option>
                        <option value="3">Onii</option>
                        <option value="3">Oniion</option>
                      </select>
                  </div>
              </div>
           </div>
           <div class="form-field col-lg-6 ">
              <input id="email" class="input-text js-input" type="email" required>
              <label class="label" for="email">E-mail</label>
           </div>
           <div class="form-field col-lg-6 ">
              <input id="company" class="input-text js-input" type="text" required>
              <label class="label" for="company">Company Name</label>
           </div>
            <div class="form-field col-lg-6 ">
              <input id="phone" class="input-text js-input" type="text" required>
              <label class="label" for="phone">Contact Number</label>
           </div>
           <div class="form-field col-lg-12">
              <input id="message" class="input-text js-input" type="text" required>
              <label class="label" for="message">Message</label>
           </div>
           <div class="form-field col-lg-12">
              <input class="btn submit-btn" type="submit" value="Submit">
           </div>
        </form>
     </section>
     
</section>
@endsection