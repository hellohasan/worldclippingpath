<script src="{{ asset('assets/backend/js/select2.full.min.js') }}"></script>

@if (isset($show))
    <script>
        $('.select2').select2({ width: '100%' })
    </script>
@endif
