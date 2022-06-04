<script src="{{ asset('assets/backend/js/nicEdit.js') }}"></script>
<script type="text/javascript">
    bkLib.onDomLoaded(function() {
        new nicEditor({fullPanel : true,iconsPath : '{{ asset('assets/backend/js/nicEditorIcons.gif') }}'}).panelInstance('area1');
    });
</script>
