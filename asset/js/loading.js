function show_preload(url = "") {
    $.LoadingOverlay("show", {
        image: url + 'vendor/wika/img/loading.gif'
    });
}

function hide_preload() {
    $.LoadingOverlay("hide");
}