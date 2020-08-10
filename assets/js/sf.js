$(document).ready(function () {
    oSetInputValidation();
});

function oSetInputValidation() {
    $('.numeric').keyup(function () {
        var start = this.selectionStart,
            end = this.selectionEnd;
        this.value = this.value.replace(/[^0-9\.]/g, '');
        this.setSelectionRange(start, end);
    });
    $('.letteric').bind('keyup blur', function () {
        var start = this.selectionStart,
            end = this.selectionEnd;
        var node = $(this);
        node.val(node.val().replace(/[^a-z]/g, ''));
        this.setSelectionRange(start, end);
    });
    $('.text-uppercase').keyup(function () {
        var start = this.selectionStart,
            end = this.selectionEnd;
        this.value = this.value.toUpperCase();
        this.setSelectionRange(start, end);
    });
    $('.text-lowercase').focusout(function () {
        var start = this.selectionStart,
            end = this.selectionEnd;
        this.value = this.value.toLowerCase();
        this.setSelectionRange(start, end);
    });
    $('.preventsubmit').on('keyup keypress', function (e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) {
            e.preventDefault();
            return false;
        }
    });
    $('input.date').datepicker({
        format: 'yyyy/mm/dd',
        orientation: "auto",
        autoclose: true,
        todayHighlight: true
    });
    $('.date-ym').datepicker({
        format: "yyyy/mm",
        viewMode: "months",
        minViewMode: "months",
        autoclose: true
    });
    $('.date-m').datepicker({
        format: "mm",
        viewMode: "months",
        minViewMode: "months",
        autoclose: true
    });
    $('.date-y').datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years",
        autoclose: true
    });
}