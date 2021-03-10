$(document).ready(function(){     
    $("#b1").click(function(){
        $("h1").hide("linear", function(){
        });
    });
    
    $("#button").click(function(){
        $("h1").show();
    });
});	