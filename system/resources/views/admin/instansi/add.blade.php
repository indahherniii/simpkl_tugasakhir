@extends('layout.base')
@section('title', 'Admin || Instansi')
@section('content')

    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">FORM TAMBAH DATA INSTANSI</h2>

                </div>

            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
        <div class="row mt--2">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('admin/instansi/addAct') }}" method="post" enctype="multipart/form-data" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <input type="text" name="nama" class="form-control"
                                            placeholder="Nama instansi ..." required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Kuota</label>
                                        <input type="number" value="1" name="kuota" class="form-control"
                                            placeholder="Kuota penerimaan mahasiswa ..." required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Foto</label>
                                        <input type="file" name="foto" class="form-control"
                                            placeholder="Foto instansi ..." required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" name="username" class="form-control"
                                            placeholder="Username instansi ..." required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="text" name="password" class="form-control"
                                            placeholder="Passowrd ..." required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-maps-input">
                                        <label for="">Alamat instansi</label>
                                        <div class="ds">
                                                <input type="text" name="alamat" id="alamat" class="form-control"
                                                placeholder="Alamat instansi ..." readonly required>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn" data-toggle="modal"
                                                data-target="#exampleModal">
                                                <i class="fas fa-map"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Deskripsi</label>
                                        <textarea name="deskripsi" id="tyn" cols="30" rows="10" class="form-control" placeholder="Deskripsi dinas ..."></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="d-flex align-items-center justify-content-center mt-5">
                                        <a href="{{ url('admin/instansi') }}" class="btn btn-warning">BATAL</a>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <input class="form-control" id="alamat2"></input>
                </div>
                <div class="modal-body">
                   <div id="map" class="maps"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">KONFIRMASI ALAMAT</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1MgLuZuyqR_OGY3ob3M52N46TDBRI_9k&callback=initMap&libraries=&v=weekly">
    </script>
    <!-- Core -->
    <script src="{{ url('public') }}/admin/assets/assets/vendor/jquery/dist/jquery.min.js"></script>

    <script>
        let myLatlng = {
            lat: -1.8174964,
            lng: 109.9953996
        };
        let map = new google.maps.Map(document.getElementById("map"), {
            zoom: 12.39,
            center: myLatlng,
        });

        var jumlahClick = 1;
        map.addListener("click", (e) => {

            var clickBaru = jumlahClick++;

            var lat = e.latLng.toJSON().lat
                var lng = e.latLng.toJSON().lng
                $('#lat').val(lat);
                $('#lng').val(lng);

                $.get('https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=' + lat + '&lon=' + lng, function(
                    data) {

                    $('#alamat').val(data.display_name)
                    $('#alamat2').val(data.display_name)


                });
                var mysClean = { lat: lat, lng: lng };
                const marker = new google.maps.Marker({
                    position: mysClean,
                    map,
                    dragable: true
                });
            if (clickBaru > 1) {

                alert('Tidak boleh lebih dari sekali !')

            }


        });
    </script>
@endsection
