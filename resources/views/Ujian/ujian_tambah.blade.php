<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Laravel</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Pegawai - <strong>TAMBAH DATA</strong> - <a href="https://www.malasngoding.com/category/laravel" target="_blank">www.malasngoding.com</a>
                </div>
                <div class="card-body">
                    <a href="/ujian" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/ujian/store">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>ID</label>
                            <input type="text" name="id" class="form-control" placeholder="">
 
                            @if($errors->has('id'))
                                <div class="text-danger">
                                    {{ $errors->first('id')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>NAMA MK</label>
                            <textarea name="nama_mk" class="form-control" placeholder=""></textarea>
 
                             @if($errors->has('nama_mk'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_mk')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>JUMLAH SOAL</label>
                            <textarea name="jumlah_soal" class="form-control" placeholder=""></textarea>
 
                             @if($errors->has('jumlah_soal'))
                                <div class="text-danger">
                                    {{ $errors->first('jumlah_soal')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>DOSEN</label>
                            <textarea name="dosen" class="form-control" placeholder=""></textarea>
 
                             @if($errors->has('dosen'))
                                <div class="text-danger">
                                    {{ $errors->first('dosen')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>KETERANGAN</label>
                            <textarea name="keterangan" class="form-control" placeholder=""></textarea>
 
                             @if($errors->has('keterangan'))
                                <div class="text-danger">
                                    {{ $errors->first('keterangan')}}
                                </div>
                            @endif
 
                        </div>

                       
 
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-success" value="Simpan">
                         
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>