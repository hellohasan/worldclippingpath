<script src="{{ asset('assets/backend/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/responsive.bootstrap4.min.js') }}"></script>

@if (isset($show))
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>
@endif
