var maxSteps = 3;
var currentstep = 1;
function changeStep(step){
$( ".step" ).each(function() {
	$( this ).removeAttr( "style" );
});
     $( "#step" + step ).show('slow');
     sessionStorage.setItem("step",step);
     if(step == 1) {
     	$("#back-step").hide();
     } else {
        $("#back-step").show();
    }
    if(step == maxSteps) {
     	$("#next-step").hide();
     } else {
        $("#next-step").show();
    }
}

$(document).ready(function() {

var step = sessionStorage.getItem("step");

if(step != null) {

currentstep = step;

}

changeStep(currentstep);

});

$("#next-step").click(function() {

currentstep = currentstep + 1;
changeStep(currentstep);
});

$("#back-step").click(function() {

currentstep = currentstep - 1;
changeStep(currentstep);
});