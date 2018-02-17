function showmo(title, body) {
    $("#headmo").html(title)
    $("#bodymo").html(body)
    $("#alertshow").modal('show');
}
function showdata(body){
    $("#bodydata_len").html(body);
    $("#alertdatalen").modal('show');
}
$(document).ready(function () {
    $("#btnupdate").hide();
    $('.aw_len a').click(function (event) {
        event.preventDefault();
    
        //if($(this).attr('href').includes("connection/select_aword_student")==true)
        //{

        $.get($(this).attr('href'), function (data) {
            showdata(data);
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