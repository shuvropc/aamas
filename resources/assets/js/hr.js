$(document).ready(function()
{
    $(".backup_picture").on("error", function(){
        $(this).attr('src', './images/nopicture.png');
    });
});
</s