<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>@yield('title')</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ url('public') }}/admin-tempelate/assets/img/icon.ico" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="{{ url('public') }}/admin-tempelate/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: { "families": ["Lato:300,400,700,900"] },
			custom: { "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ url('public') }}/admin-tempelate/assets/css/fonts.min.css'] },
			active: function () {
				sessionStorage.fonts = true;
			}
		});
	</script>
        <link rel="stylesheet" href="{{ url('public') }}/admin-tempelate/assets/js/plugin/datatables/dataTables.bootstrap5.min.css">

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ url('public') }}/admin-tempelate/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ url('public') }}/admin-tempelate/assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{ url('public') }}/admin-tempelate/assets/css/demo.css">
    <style>
        .tox-statusbar,
        .tox-notifications-container{
            display: none !important;
        }
        .form-maps-input{
            position: relative;
        }
        .form-maps-input .ds{
            display: flex;
            align-items: center;
        }
        .maps{
            width: 100%;
            height: 500px;
        }
        .modal-content{
            min-width: 1350px !important;
            margin-left: -400px !important;
        }
    </style>
</head>

<body>
	<div class="wrapper">

		@include('layout.header')
		<!-- Sidebar -->
		@include('layout.sidebar')
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				@yield('content')
			</div>
		</div>

		<!-- Custom template | don't include it in your project! -->

		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="{{ url('public') }}/admin-tempelate/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="{{ url('public') }}/admin-tempelate/assets/js/core/popper.min.js"></script>
	<script src="{{ url('public') }}/admin-tempelate/assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script
		src="{{ url('public') }}/admin-tempelate/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script
		src="{{ url('public') }}/admin-tempelate/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script
		src="{{ url('public') }}/admin-tempelate/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart Circle -->
	<script src="{{ url('public') }}/admin-tempelate/assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="{{ url('public') }}/admin-tempelate/assets/js/plugin/datatables/datatables.min.js"></script>
	<script src="{{ url('public') }}/admin-tempelate/assets/js/plugin/datatables/dataTables.bootstrap5.min.js"></script>


	<!-- jQuery Vector Maps -->
	<script src="{{ url('public') }}/admin-tempelate/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="{{ url('public') }}/admin-tempelate/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>


	<!-- Atlantis JS -->
	<script src="{{ url('public') }}/admin-tempelate/assets/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="{{ url('public') }}/admin-tempelate/assets/js/setting-demo.js"></script>
    <script src="https://cdn.tiny.cloud/1/dvqiqnhw0jc0f8huntc1c0gv6n4gz6mb5z5ocfc3r2hiknuu/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
	<script>
		Circles.create({
			id: 'circles-1',
			radius: 45,
			value: 60,
			maxValue: 100,
			width: 7,
			text: 5,
			colors: ['#f1f1f1', '#FF9E27'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})

		Circles.create({
			id: 'circles-2',
			radius: 45,
			value: 70,
			maxValue: 100,
			width: 7,
			text: 36,
			colors: ['#f1f1f1', '#2BB930'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})

		Circles.create({
			id: 'circles-3',
			radius: 45,
			value: 40,
			maxValue: 100,
			width: 7,
			text: 12,
			colors: ['#f1f1f1', '#F25961'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})
		Circles.create({
			id: 'circles-4',
			radius: 45,
			value: 25,
			maxValue: 100,
			width: 7,
			text: 12,
			colors: ['#f1f1f1', '#F25961'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})


        $('#dataTable').DataTable();

	</script>
     @include('layout.notif')

     <script>
        tinymce.init({
          selector: 'textarea#tyn',
          plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
          toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
      </script>
</body>

</html>
