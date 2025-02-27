$(document)
    .ready(function () {



        $.ajax({
            url: "../php/userinfo.php",
            type: "POST",

            beforeSend: function () {},
            complete: function () {},
            error: function (a, b, c) {
                console.log(c);
            },
            success: function (a, b, d) {
                var e = JSON.parse(a);
                document.getElementById("username")
                    .innerHTML = e.username;




            }

        });


        $.ajax({
            url: "../php/leavemanagementstatus.php",
            type: "POST",

            beforeSend: function () {},
            complete: function () {},
            error: function (a, b, c) {
                console.log(c);
            },
            success: function (a, b, d) {
                var json = jQuery.parseJSON(a);
                var serialnumber;
                serialnumber = 0;


                for (var i in json) {


                    serialnumber = serialnumber + 1;



                    $("#statustable > tbody")
                        .append("<tr><td>" + serialnumber + "</td><td>" + json[i].username + "</td>"  + "<td>" + json[i].fromdate + "</td><td>" + json[i].todate + "</td><td>" + json[i].reason + "</td><td>" + json[i].approvalstatus + "</td></tr>");



                }




            }

        });
    });
