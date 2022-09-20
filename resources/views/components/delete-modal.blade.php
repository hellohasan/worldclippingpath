<div class="modal fade" id="{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-danger" id="myModalLabel2"><i class='fa fa-exclamation-triangle'></i> Confirmation !</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h5 class="text-danger">Are you sure you want to delete this record? <br> If you delete this, It may delete forever.</h5>
            </div>
            <div class="modal-footer">
                <form action="#" method="post" id="{{ $formId }}">
                    {!! csrf_field() !!}
                    {!! method_field('DELETE') !!}
                    <input type="hidden" name="id" class="{{ $classId }}" value="0">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Yes Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@pushOnce('scripts')
    <script>
        $(document).ready(function() {
            $(document).on("click", '.{{ $classBtn }}', function(e) {
                var id = $(this).data('id');
                var url = '{{ route($route, ':id') }}';
                url = url.replace(':id', id);
                $("#{{ $formId }}").attr("action", url);
                $(".{{ $classId }}").val(id);
            });
        });
    </script>
@endpushOnce
