$(document)
    .ready(function() {



        $.ajax({
            url: "../php/userinfo.php",
            type: "POST",

            beforeSend: function() {},
            complete: function() {},
            error: function(a, b, c) {
                console.log(c);
            },
            success: function(a, b, d) {
                var e = JSON.parse(a);
                document.getElementById("username")
                    .innerHTML = e.username;




            }

        });




        $.ajax({
            url: "../php/approveclassincharge.php",
            type: "POST",

            beforeSend: function() {},
            complete: function() {},
            error: function(a, b, c) {
                console.log(c);
            },
            success: function(a, b, d) {
                var json = jQuery.parseJSON(a);
                var serialnumber;
                serialnumber = 0;


                for (var i in json) {


                    serialnumber = serialnumber + 1;



                    $("#approvetable tbody")
                        .append(" <tr>" + "<td>" + serialnumber + "</td><td>" +
                            json[i].username + "</td><td class =\"nr\">" + json[i].fromdate +
                            "</td><td>" + json[i].todate + "</td><td>" +
                            json[i].reason + "</td> <td> " +


                            " <span ><a href=\"#\"    data-original-title=\"Edit this user\" data-toggle=\"tooltip\"  " +
                            "type=\"button\" id = \"Approved " + json[i].serialno + "\" " +
                            " class=\"leave btn btn-sm btn-primary\"><i class=\"glyphicon glyphicon-ok\"></i></a> " +
                            "<a href=\"#\"   data-original-title=\"Remove this user\" data-toggle=\"tooltip\" type=\"button\" " +
                            "id = \"Rejected " + json[i].serialno + "\" " +
                            "class=\"leave btn btn-sm btn-danger\"  ><i class=\"glyphicon glyphicon-remove\"></i></a> " +
                            "  </span></td>" + "</tr>");




                }




            }

        });



    });

function updateleave(id,status) {

    var id = arguments[0];
    var status = arguments[1];
   // var member = id+status;
    

    
    var a= {serialno:id,status:status};
     $.ajax({
            url: "../php/updatestatus.php",
            type: "GET",
            data: a,
            dataType: "html",
            beforeSend: function() {},
            complete: function() {},
            error: function(a, b, c) {
                console.log(c);
            },
            success: function(a, b, c) {
                var d = a.trim();
                if ("success" == d) {


                    //$("tr#"+member).hide();
                   //alert(member);
                } 
                 else {

                    alert("Unable to approve.Try again after some time");
                     
                    
                }
            }
        });
   
}

function leavemanagement(name) {

    var someString = arguments[0];

    var index = someString.indexOf(" "); // Gets the first index where a space occours
    var status = someString.substr(0, index); // Gets the first part
    var id = someString.substr(index + 1); // Gets the text part
    updateleave(id,status);
    
}




$(document).on('click', '.leave', function() {

    leavemanagement(this.id);
     $(this).closest('tr').remove();

});