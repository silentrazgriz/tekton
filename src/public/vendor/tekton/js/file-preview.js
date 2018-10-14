$('.tekton-file-upload').each((index, fileUpload) => {
    $(fileUpload).change(function (e) {
        $(this.dataset.filename).html(this.value.replace('C:\\fakepath\\', ''));
    });
});