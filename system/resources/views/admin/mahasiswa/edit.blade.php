
@extends('layout.base')
@section('title', 'Admin || Mahasiswa')
@section('content')
    <div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">FORM UPDATE DATA MAHASISWA</h2>

							</div>

						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
                                    <form action="{{ url('admin/mahasiswa/editAct') }}" method="post">
                                        <input type="hidden" name="id" value="{{ $list->id }}" class="form-control" placeholder="Nim ..." required>
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">NIM</label>
                                                    <input type="text" name="nim" value="{{ $list->nim }}" class="form-control" placeholder="Nim ..." required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Nama</label>
                                                    <input type="text" name="nama" value="{{ $list->nama }}"  class="form-control" placeholder="Nama ..." required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Jenis Kelamin</label>
                                                    <select name="jenis_kelamin" id="" class="form-control">
                                                        <option value="">--- Pilih ---</option>
                                                        <option value="Laki-laki" @if ($list->jenis_kelamin == 'Laki-laki') selected @endif>Laki-laki</option>
                                                        <option value="Perempuan" @if ($list->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Agama</label>
                                                    <select name="agama" id="" class="form-control">
                                                        <option value="">--- Pilih ---</option>
                                                        <option value="Islam" @if ($list->agama == 'Islam') selected @endif>Islam</option>
                                                        <option value="Kristen"> @if ($list->agama == 'Kristen') selected @endif>Kristen</option>
                                                        <option value="Katolik" @if ($list->agama == 'Katolik') selected @endif>Katolik</option>
                                                        <option value="Hindu" @if ($list->agama == 'Hindu') selected @endif>Hindu</option>
                                                        <option value="Budha" @if ($list->agama == 'Budha') selected @endif>Budha</option>
                                                        <option value="Konghuchu" @if ($list->agama == 'Konghuchu') selected @endif>Konghuchu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Tempat Lahir</label>
                                                    <input type="text" name="tempat_lahir" value="{{ $list->tempat_lahir }}" class="form-control" placeholder="Tempat lahir ..." required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Tanggal Lahir</label>
                                                    <input type="date" name="tanggal_lahir" value="{{ $list->tanggal_lahir }}" class="form-control" placeholder="Tanggal lahir ..." required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="d-flex align-items-center justify-content-center mt-5">
                                                    <a href="{{url('admin/mahasiswa')}}" class="btn btn-warning">BATAL</a>
                                                    <button class="btn btn-primary mx-2">SIMPAN</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
								</div>
							</div>
						</div>

					</div>

				</div>
@endsection
