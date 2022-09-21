@extends('layouts.navbar')

@section('isi')
    <h1>Kuesioner S1 Sistem Informasi</h1>
    <br>
   
        {{-- <div class="row align-items-start">
            <div class="col">

            </div>
            <div class="col">

            </div>
            <div class="col">
                
            </div>
        </div> --}}
        <div class="float-end ms-2">
            <a href="/tambah"><button class="btn btn-primary">Tambah</button></a>  
        </div>
        <div class="float-end">
            <a href="/periode"><button class="btn btn-primary">Kembali</button></a>
        </div>
      
              
        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">Periode</th>
                    <th scope="col">Tanggal Pembuatan</th>
                    <th scope="col">Total Responden</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">221</th>
                    <td>05 September 2022</td>
                    <td>244</td>
                    <td><input type="button" class="btn btn-warning" value="update">
                        <input type="button" class="btn btn-danger" value="delete">
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
@endsection
