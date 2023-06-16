@extends('layouts.main')

@section('title', 'eMaha - Form Student')
    
@section('content')
    
          <div class="card mt-4">
            <div class="card-header">Form Data Student</div>
            <div class="card-body">
                <form action="/student/save" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>NIM</label>
                        <input type="number" name="nim" class="form-control" placeholder="Masukan Nim">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
                    </div>

                    <label>Gender</label>
                    <div class="form-check">
                        <input type="radio" name="gender" class="form-check-input" value="Pria">
                        <label>Pria</label>
                        
                    </div>
                    <div class="form-check">
                        <input type="radio" name="gender" class="form-check-input" value="Wanita">
                        <label>Wanita</label>
                        
                    </div>

                    <label >Prodi</label>
                    <div class="form-group">
                        <select name="prodi" class="form-control">
                            <option value="0">Pilih Program Studi</option>
                            <option value="Sistem Informasi">Sistem informasi</option>
                            <option value="Informatika">Informatika</option>
                            <option value="Ilmu Komputer">Ilmu Komputer</option>
                        </select>
                    </div>

                    <label >Minat</label>
                    <div class="form-check">
                        <input type="checkbox" name="minat[]" class="form-check-input" value="AI">
                        <label >AI</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="minat[]" class="form-check-input" value="Web Enggineer">
                        <label >Web Engginer</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="minat[]" class="form-check-input" value="Database Engginer">
                        <label >Database Engginer</label>
                    </div>

                    <div class="form-group mt-4">
                        <button type="submit" role="button" class="btn btn-primary float-right">Submit</button>
                    </div>
                </form>
            </div>
          </div>
@endsection