var apply = {
    basic: function() {
        var a = $("#apply-leave").serializeArray();
        $.ajax({
            url: "../php/applyleave.php",
            type: "POST",
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
                    window.location="status.html";
                } 
                 else {
                    alert("Unable to applyleave.Try again after some time");
                    
                }
            }
        });
    }
};

//date plugin code

            $('#fromdate').pickadate({
                format: 'mm/dd/yyyy',
                formatSubmit: 'mm/dd/yyyy',
                hiddenName: true
            });
            $('#todate').pickadate({
                format: 'mm/dd/yyyy',
                formatSubmit: 'mm/dd/yyyy',
                hiddenName: true
            });

$(document).on('click', '#submitbutton', function() {

    apply.basic();

});