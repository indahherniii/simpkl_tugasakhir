
@extends('layout.base')
@section('title', 'Admin || INSTANSI')
@section('content')
    <div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">DATA INSTANSI</h2>

							</div>
							<div class="ml-md-auto py-2 py-md-0">
								<a href="{{url('admin/instansi/add')}}" class="btn btn-secondary btn-round">Tambah Data</a>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
                                    <table class="table table-hover" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th><center>No.</center></th>
                                                <th><center>Nama</center></th>
                                                <th><center>Alamat</center></th>
                                                <th><center>Kuota</center></th>
                                                <th><center>Agama</center></th>
                                                <th><center>TTL</center></th>
                                                <th><center>Action</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($list as $item)

                                            <tr>
                                                <td><center>{{ $loop->iteration }}</center></td>
                                                <td><center>{{  $item->nama}}</center></td>
                                                <td><center>{{  $item->alamat}}</center></td>
                                                <td><center>{{  $item->kuota}}</center></td>

                                                <td>
                                                    <center>
                                                        <div class="btn-group">
                                                            <a href="{{ url('admin/instansi/detail', $item->id) }}" class="btn btn-warning">
                                                                <i class="fa fa-info"></i>
                                                            </a>
                                                            <a href="{{ url('admin/instansi/edit', $item->id) }}" class="btn btn-primary">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a href="{{ url('admin/instansi/hapus', $item->id) }}" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?!')">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </center>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
								</div>
							</div>
						</div>

					</div>

				</div>
@endsection
