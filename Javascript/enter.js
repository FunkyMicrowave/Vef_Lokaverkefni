    $(document).ready(function() {
$('#chatbox').keydown(function() {
var message = $("#chatbox").val();
if (event.keyCode == 13) {
if (message == "") {
$("#chatbox").val('');
    return false;
} else {
$('#myForm').submit();
}
$("#chatbox").val('');
return true;
}
});
});    
$(document).ready(function() {
$('#chatboxid').keydown(function() {
var message = $("#chatboxid").val();
if (event.keyCode == 13) {
if (message == "") {
$("#chatboxid").val('');
    return false;
} else {
$('#myForm1').submit();
}
$("#chatboxid").val('');
return true;
}
});
});