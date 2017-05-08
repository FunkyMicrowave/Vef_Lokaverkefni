$(document).ready(function () {
    setInterval(function updateDiv()
{ 
        
        $( "#Container" ).load(window.location.href + " #View" );
            
        
}, 500);
});