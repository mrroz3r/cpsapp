@extends('layouts.admin')
@section('title')
Karyawan
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col md-8">
          <div class="table-responsive">
          <table class="table" id="example">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>No Telepon</th>
              <th>Tanggal Masuk</th>
              <th>Gaji Pokok</th>
              <th>Tunjangan</th>
              <th>Status</th>
              <th>Keterangan</th>
              <th>Rincian</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody> 
          <?php
              $i= 1;
              $k = \App\Karyawan::all();
              ?>
              @foreach($k as $q)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{$q->nama}}</td>
              <td>{{$q->alamat}}</td>
              <td>{{$q->telpon}}</td>
              <td>{{$q->tanggalmasuk}}</td>
              <td>{{$q->gajipokok}}</td>
              <td>{{$q->tunjangan}}</td>
              <td>{{$q->status}}</td>
              <td>{{$q->keterangan}}</td>
              <td>{{$q->rincian}}</td>
              <td>
                <a href="{{url('admin/form/karyawan/edit/'.$q->id)}}" class="btn btn-outline-warning btn-sm"><i class="fa fa-edit-square"></i>
                </a>
                 <a href="{{url('admin/form/karyawan/delete/'.$q->id)}}" onclick="return confirm('anda yakin untuk menghapusnya ?')" 
                 class="btn btn-outline-danger btn-sm"><i class="fa fa-delete-square"></i>
                 </a>
                 <a href="{{url('admin/form/cekabsensi/pdfid/'.$q->id)}}" class="btn btn-outline-success">PDF</a>
                <a href="{{url('admin/form/cekabsensi/downloadExcelid/'.$q->id)}}" class="btn btn-outline-success">EXCEL</a>
              </td>
            </tr>
            @endforeach               
          </tbody>
        </table>
        </div>
        <hr>
          <a href="{{url('admin/form/karyawan/add')}}" class="btn btn-outline-primary btn-lg"><i class="fas fa-plus-square"></i></a>
           <div style="float:right; ">
            <a href="{{ url('admin/form/karyawan/pdf')}}">
              <button class="btn btn-outline-primary">Download PDF</button></a>
              
            <a href="{{ url('admin/form/karyawan/downloadExcel/xlsx') }}"><button class="btn btn-outline-primary">Download Excel</button></a>
          </div>
      </div>
    </div>
@endsection