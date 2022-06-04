<link href="//cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.js"></script>
@if ($show)
    <script>
        $('.summernote').summernote({
            placeholder: 'Write here..',
            height: 200,
        });
    </script>
@endif

