@extends('layout.user.main')

<!-- @section('tittle') @lang('Informasi - jenis Kulit') @endsection -->

@section('container')
<div>
    <section>
    <div class="container pt-5 mb-5">
        <div class="row gx-5 justify-content-center">
        <div class="col-lg-11 col-xl-5 col-xxl-8">
            <!-- Project Card 2-->
            <div class="card overflow-hidden shadow rounded-4 border-0">
                <div class="card">
                    <div class="card-body">
                    <div class="alert alert-info alert-dismissible" role="alert">
                        <center>
                            <strong><h4>Konsultasi</h4></strong>
                        </center>
                    </div>
                        <div class="card text-center">
                            <div class="card-header">
                            Jawablah pertanyaan berikut sesuai dengan gejala yang Anda rasakan
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><b>Apakah Anda memiliki Kulit yang banyak mengeluarkan minyak ?</b></h5>
                                <div class="form-group c0l-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                </div>
                                <div class="col-12 pt-3">
                                    <button class="btn btn-primary" type="submit">Jawab</button>
                                </div>
                            </div>
                        </div>
                    <!-- <form class="custom-validation" action="#">
                        <div class="table-responsive mt-0">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="text-center">
                                            <th>kode</th>
                                            <th>Gejala</th>
                                            <th>checklist</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($gejalakulit as $gk)
                                        <tr>
                                            <th class="text-center" scope="row">{{$gk->kode_gejala}}</th>
                                            <td>Apakah Anda memiliki {{$gk->nama_gejala}} ?</td>
                                            <td class="text-center">
                                                <input class="form-check-input" type="checkbox" id="formCheck1">
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                        <div class="d-md-flex justify-content-md-end">
                            <input type="submit" href="" value="Proses Diagnosa" class="btn btn-primary">
                        </div>
                        </div>
                    </form> -->
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    </section>
</div>


  @endsection



