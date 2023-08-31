<script defer src="{{ asset('') }}assets/js/code.jquery.com_jquery-3.7.0.min.js"></script>
<script src="{{ asset('') }}assets/js/core/popper.min.js"></script>
<script src="{{ asset('') }}assets/js/core/bootstrap.min.js"></script>
<script src="{{ asset('') }}assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="{{ asset('') }}assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="{{ asset('') }}assets/js/plugins/chartjs.min.js"></script>
<script type="text/javascript">
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('') }}assets/js/argon-dashboard.min.js?v=2.0.4"></script>
<script>
    $(document).ready(function() {
        $('#tabel-data').DataTable();
    });


    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;
        return true;
    }

    function showPreviewposter(event) {
        if (event.target.files.length > 0) {
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("file-preview-poster");
            preview.src = src;
            preview.style.display = "block";
        }
    }
</script>
{{-- datatable --}}
{{-- <script defer src="{{ asset('') }}assets/js/code.jquery.com_jquery-3.7.0.min.js"></script> --}}
<script defer src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script defer src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

{{-- <script type="text/javascript">
    new DataTable('#example');
</script> --}}
