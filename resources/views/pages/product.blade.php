@extends('layouts.master')

@section('title', 'Product')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Product</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Product</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-md-12">
            <table class="table text-center">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Stock</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody >
                    @forelse ($data as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->stock}}</td>
                        <td>{{$item->price}}</td>
                        <td colspan="2">
                          <form action="product/delete" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id" value="{{$item->id}}">
                            <button type="submit" class="btn btn-outline-danger">Hapus</button>
                          </form>
                          &nbsp;
                          <button class="btn btn-outline-primary">Ubah</button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7">Tidak ada data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
          </div>
          
      </div>
      <!-- /.row -->

    </div><!-- /.container-fluid -->
  </section>
@endsection