<!-- Fonts and icons -->
<script src="{{ url('public') }}/admin-tempelate/assets/js/plugin/webfont/webfont.min.js"></script>
<script>
    WebFont.load({
        google: {
            "families": ["Lato:300,400,700,900"]
        },
        custom: {
            "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                "simple-line-icons"
            ],
            urls: ['{{ url('public') }}/admin-tempelate/assets/css/fonts.min.css']
        },
        active: function() {
            sessionStorage.fonts = true;
        }
    });
</script>
<!--   Core JS Files   -->
<script src="{{ url('public') }}/admin-tempelate/assets/js/core/jquery.3.2.1.min.js"></script>
<!-- Bootstrap Notify -->
<script src="{{ url('public') }}/admin-tempelate/assets/js/core/bootstrap-notify/bootstrap-notify.min.js"></script>
@foreach (['success', 'danger', 'warning', 'info'] as $status)
    @if (session($status))
        <script>
            $.notify({
                icon: 'flaticon-alarm-1',
                title: `{{ $status }}`,
                message: ` {{ session($status) }}`,
            }, {
                type: `{{ $status }}`,
                placement: {
                    from: "top",
                    align: "right"
                },
                hideAnimation: 'slideUp',
                showDuration: 400,
                hideDuration: 100,
            });
            //Notify
            setTimeout(() => {
                $('.alert').addClass('fadeOut')
            }, 1000);
        </script>


        </div>
    @endif
@endforeach
