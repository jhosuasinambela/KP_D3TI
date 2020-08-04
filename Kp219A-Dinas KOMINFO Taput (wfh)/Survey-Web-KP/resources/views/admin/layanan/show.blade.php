@extends('layouts.master')
@section('content')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
@endif
     <h2>Layanan {{$instansi['nama_instansi']}} Kabupaten Tapanuli Utara</h2>
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
       Tambah Layanan
     </button>


     <table class="table table-striped">
        <thead class="thead-dark">
          <th>No</th>
          <th>Nama Layanan</th>
          <th>Keterangan</th>
          <th>Action</th>
        </thead>
        <tbody>
          <tr>
            <?php $no = 1; ?>
            @foreach($layanans as $layanan)
            <td><?= $no++; ?></td>
            <td>{{$layanan['nama_layanan']}}</td>
            <td>{{$layanan['keterangan_layanan']}}</td>
            <td> <a href="/instansi/layanan/{{$layanan['id']}}/edit_layanan" class="btn btn-warning">Edit</a> </td>
            <td> <a href="/instansi/layanan/{{$layanan['id']}}/delete_layanan" class="btn btn-danger">Delete</a> </td>
          </tr>
            @endforeach
        </tbody>
     </table>
     <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Tambah Layanan</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">
             <form action="/instansi/layanan/{{$instansi['id']}}/store_layanan" method="POST">
               {{csrf_field()}}
               <div class="form-group">
                 <label for="namaLayanan">Nama Layanan</label>
                 <input name="nama_layanan" type="text" class="form-control" id="namaLayanan" required>
               </div>

               <div class="form-group">
                 <label for="keteranganLayanan">Keterangan Layanan</label>
                 <textarea name="keterangan_layanan" type="text" class="form-control" id="keteranganLayanan" required></textarea>
               </div>

               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-primary">Tambah</button>
               </div>
             </form>
           </div>
         </div>
       </div>
     </div>
@endsection
