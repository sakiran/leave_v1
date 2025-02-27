$(document).ready(function() {


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
            document.getElementById("username").innerHTML = e.username;
            var element = document.getElementById('phonenumber');
            if (typeof element !== "undefined" && element.innerHTML == 'phonenumber') {

                document.getElementById("phonenumber").innerHTML = e.phonenumber;

            } else {
                document.getElementById("phonenumber").value = e.phonenumber;

            }
            var element = document.getElementById('department');
            if (typeof element !== "undefined" && element.innerHTML == 'department') {

                document.getElementById("department").innerHTML = e.department;

            }
            var element = document.getElementById('departmenthidden');
            if (typeof element !== "undefined" && element.value == 'department') {

                document.getElementById("departmenthidden").value = e.department;

            }
            var element = document.getElementById('dateofjoining');
            if (typeof element !== "undefined" && element.innerHTML == 'dateofjoining') {

                document.getElementById("dateofjoining").innerHTML = e.dateofjoining;

            }




            document.getElementById("gender").innerHTML = e.gender;
            document.getElementById("homeaddress").innerHTML = e.homeaddress;
            document.getElementById("email").innerHTML = e.email;




        }

    });
});