// Fetch all Records from table
FetchDeatils();
function FetchDeatils(){
    $.ajax({
        type: 'GET',
        url: "../componets/Fetchdetails.php",
        success: function(response) {
        $('#fetchedData').html(response)
        },
        error:function(err){
            $('#fetchedData').html(err);
        }
    });
}

///dELETE eMPLOYEE
function mydelefunct(id){
    var ISconfirmed = window.confirm('Are You Sure?');
    if(ISconfirmed){
    var DEleteme = "DEleteme";
    $.ajax({
        type: 'POST',
        url: "../componets/delete.php",
        data: {DEleteme:DEleteme,empid:id},
        success: function(response) {
            FetchDeatils();
            $('#submitresponse').text(response);
            $('#submitresponse').show();
        setTimeout(function(){ $('#submitresponse').hide();},2000)
 
        },
        error:function(err){
            $('#submitresponse').text(err);
        }
    });
}
}


function myUpdatefunct(id){
    $('#Updateresponse').html('');
    var Updateme = "Updateme";
    $.ajax({
        type: 'POST',
        url: "../componets/Update.php",
        data: {Updateme:Updateme,empid:id},
        success: function(response) {
            FetchDeatils();
            $('#Updateresponse').html(response);
            $('#Updateresponse').show();
        // setTimeout(function(){ $('#Updateresponse').hide();},2000)
 
        },
        error:function(err){
            $('#Updateresponse').html(err);
        }
    });
}
$(document).ready(function(){

    $('#adduser').on('click',function(event){
        event.preventDefault();
        var empnamer = $('#empnamer').val();
        var department = $('#department').val();
        var emp_ud = $('#emp_ud').val();
        var Submituser ="Submituser";


        $.ajax({
            type: 'POST',
            url: "../componets/insert.php",
            data: {empnamer:empnamer,department:department,emp_ud:emp_ud,Submituser:Submituser},
            success: function(response) {
                $('#submitresponse').text(response);
                $('#submitresponse').show();
            setTimeout(function(){ $('#submitresponse').hide();},2000)
            $("form")[0].reset();
            FetchDeatils();
            },
            error:function(err){
                $('#submitresponse').text(err);
            }
        });
    })




});









