<script>
    $(document).ready(function () {
        $(document).on("click", '.delete_button', function (e) {
            var id = $(this).data('id');
            $("#delete_id").val(id);
        });
    });
</script>
