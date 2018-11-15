$(document).ready(function(){
	$("#drop").hide();
	$("#drop1").hide();
	$("#drop2").hide();
	$("#drop3").hide();
    // side bar toogle
    $(".nav-icon").click(function(){
        $("#mysidenav").toggle("'slide', {direction: 'left'}, 9000");
        $(".content").toggleClass("col-lg-12");
    });
    // drop down menus
     $("#drop-click").click(function(){
		$("#drop").toggle("slow");
    });
    $("#drop-click1").click(function(){
		$("#drop1").toggle("slow");
    });
    $("#drop-click2").click(function(){
		$("#drop2").toggle("slow");
    });
    $("#drop-click3").click(function(){
		$("#drop3").toggle("slow");
    });
    // to getting sorting searching and pagination in a table
    $('#mytable').DataTable();
  $('.dataTables_length').addClass('bs-select');
});