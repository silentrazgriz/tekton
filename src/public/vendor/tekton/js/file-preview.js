$('.tekton-file-upload').change((e) => {
    $($(this).data('target')).html($(this).val());
});