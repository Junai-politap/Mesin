@extends('template.admin')
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">

                            </ol>
                        </div>
                        <h4 class="page-title"> Edit Data Pedoman</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <form action="{{ url('admin/pedoman', $pedoman->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"> Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" value="{{ $pedoman->nama }}">
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"> Jenis</label>
                                <div class="col-sm-10">
                                    <select name="jenis_pedoman" class="form-control">
                                        <option value="Pedoman Lab" @if ($pedoman->jenis_pedoman == 'Pedoman Lab') selected @endif>Pedoman Lab
                                        </option>

                                        <option value="Pedoman Bengkel" @if ($pedoman->jenis_pedoman == 'Pedoman Bengkel') selected @endif>Pedoman Bengkel
                                        </option>

                                        <option value="Pedoman Tugas Akhir" @if ($pedoman->jenis_pedoman == 'Pedoman Tugas Akhir') selected @endif>Pedoman Tugas Akhir
                                        </option>
                                    </select>
                                </div>
                            </div>

                           
    
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"> File Word</label>
                                
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="file_word" value="{{ $pedoman->file_word }}" accept="application/msword">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"> File PDF</label>
                                <div class="col-md-6">
                                    <embed src="{{ url("public/$pedoman->file_pdf") }}" type="application/pdf">
                                </div>
                                <div class="col-sm-4">
                                    <input type="file" class="form-control" name="file_word" value="{{ $pedoman->file_word }}" accept="application/pdf">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-2"></div>
                                <div class="col-sm-10">
                                    <button class="btn btn-primary float-right rounded"><span class="fa fa-save"></span>
                                        Simpan</button>
                                </div>
                            </div>

                        </form>

                    </div> <!-- end card-box -->
                </div><!-- end col -->
            </div>
        </div>
    </div>
@endsection
