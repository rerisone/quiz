@extends('layouts.navbar')

@section('isi')
<h1>Periode Kuesioner S1 Sistem Informasi</h1>
<br>
    <a href="/kuis" class="btn btn-primary">Tambah</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">Periode</th>                
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">221</th>
                <td><input type="button" class="btn btn-success" value="lihat">                    
                </td>
            </tr>
        </tbody>
    </table>
@endsection