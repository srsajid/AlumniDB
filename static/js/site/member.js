$(function() {
    var memberImageInput = $(".member-image-input"), imagePreview = $(".member-image-preview");
    function imagePreviewer(file, img) {
        var reader = new FileReader();
        reader.onload = function(e) {
            img.attr('src', e.target.result);
        };
        reader.readAsDataURL(file);
    }

    memberImageInput.on("change", function() {
        if(this.files.length) {
            imagePreviewer(this.files[0], imagePreview)
        } else {
            imagePreview.attr("src", "http://placehold.it/300x300")
        }
    });

    function toggle($this) {
        var target = $this.attr("toggle-target");
        if($this.is(":checked")) {
            $("." + target).show()
        } else {
            $("." + target).hide()
        }
    }
    $("[toggle-target]").each(function() {
        var $this = $(this), name = $this.attr("name"), toggleOn = $('[name=' + name + ']');
        toggleOn.on("change", function() {
            toggle($this)
        })
        toggleOn.trigger("change");
    });
});
