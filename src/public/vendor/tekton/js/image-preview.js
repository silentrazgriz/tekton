$('.tekton-image-upload').each((index, imageUpload) => {
    $(imageUpload).change(function (e) {
        let img = $(this.dataset.target);
        let container = $(this.dataset.container);

        let reader = new FileReader();
        reader.onload = function(e) {
            img[0].src = e.target.result;
        };
        reader.readAsDataURL(this.files[0]);
        $(this.dataset.filename).html(this.files[0].name);

        if (!container.hasClass('tekton-show-preview')) {
            container.addClass('tekton-show-preview');
        }
    });
});