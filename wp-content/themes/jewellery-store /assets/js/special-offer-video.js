jQuery(document).ready(function ($) {
    $("#openModalBtn").click(function () {
        $("#videoModal").show();
    });
    $("#closeModalBtn").click(function () {
        $("#videoModal").hide();
    });
    $(window).click(function (event) {
        if (event.target === $("#videoModal")[0]) {
            $("#videoModal").hide();
        }
    });
});
