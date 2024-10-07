$(document).ready(function() {
    $("#Search").keyup(function(){
        let searchText = $(this).val();
        $.ajax({
            url: "action.php",
            method:"post" ,
            data: {
                query : searchText
            },
            success: function(response) {
                $("#show-list").html(response);
            }
        })
    })
})