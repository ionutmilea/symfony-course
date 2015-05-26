
$(function () {
    setupUi();
});
function setupUi() {
    $(':input').addClass('ui-widget-content');
    $('input[type="submit"], .button, #footer a').button();
    $('th').addClass('ui-widget-header');
    $('.tree').menu();
}

function openEditCategoryDialog(url) {
    $('#dialogContainer').html('');
    $("#dialogContainer").dialog({
        open : function (event, ui) {
            $('#dialogContainer').load(url, function () {});
        }
    });
}