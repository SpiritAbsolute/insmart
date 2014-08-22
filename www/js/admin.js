$(function() {
    $('#create_project').click(function(){
        $("#dialog").dialog({
            width: 340,
            minHeight: 180,
            resizable: false,
            modal: true,
            title: 'Новый проект',
            open: function(event, ui) {
                $('#cancel').on('click', function() {
                    $("#dialog").dialog('close');
                });
            }
        });
    });
})


