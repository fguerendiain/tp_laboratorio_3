function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#fotoPreview').attr('src', e.target.result);
            $('#fotoPreview').attr("style","'display:inline;'");
        }

        reader.readAsDataURL(input.files[0]);
    }
}