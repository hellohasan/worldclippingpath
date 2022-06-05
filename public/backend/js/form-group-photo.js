$(document).on("click", "#close-preview", function () {
    $(".image-preview").popover("hide");
    $(".image-preview").hover(
        function () {
            $(".image-preview").popover("show");
        },
        function () {
            $(".image-preview").popover("hide");
        }
    );
});

$(function () {
    $(".image-preview-filename").val("No file chosen");
    // Set the popover default content
    $(".image-preview").popover({
        trigger: "hover",
        html: true,
        title: "Uploaded Image Preview",
        content: "There's no image",
        placement: "bottom",
        boundary: "scrollParent",
    });
    // Clear event
    $(".image-preview-clear").click(function () {
        $(".image-preview").attr("data-content", "").popover("hide");
        $(".image-preview-filename").val("No file chosen");
        $(".image-preview-clear").hide();
        $(".image-preview-input input:file").val("");
        $(".image-preview-input-title").text("Browse");
    });
    // Create the preview image
    $(".image-preview-input input:file").change(function () {
        var img = $("<img/>", {
            id: "dynamic",
        });
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);
            img.attr("src", reader.result);
            img.attr("style", "width:100% !important");
            $(".image-preview")
                .attr("data-content", $(img)[0].outerHTML)
                .popover("show");
        };
        reader.readAsDataURL(file);
    });
});
