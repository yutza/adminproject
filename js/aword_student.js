function showmo(title, body) {
    $("#headmo").html(title)
    $("#bodymo").html(body)
    $("#alertshow").modal('show');
}
$(document).ready(function () {
    $("#btnupdate").hide();
    $('.aw_st a').click(function (event) {
        event.preventDefault();

        //if($(this).attr('href').includes("connection/select_aword_student")==true)
        //{



        $.get($(this).attr('href'), function (data) {
            showmo('', data);
            $("#btnupdate").show();
            //$("#modalupdate").html(data);
            //$("#form_updatetecher").modal('show');
            //alert(data);

        });

        //}else{
        //window.location=$(this).attr('href');

        // }


        //return false; // for good measure
    });
});