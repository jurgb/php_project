$(document).ready(function(){

	$("#email").on("focusout", function(){

		var username = $("#email").val();
		var request = $.ajax({
			  type: "POST",
			  url: "ajax/checkregistratie.php",
			  data: {username: username}
			});
			request.done(function( msg ) {
			
			if (msg == "free") {
				$("#alert").css("display", "none");
			}
			else
			{
				$("#alert").html(msg);
				$("#alert").css("display", "block");
			}
			});
	});
	/*$(".save").on("click", function(e){
			
			var gerecht = $("#menu_gerecht").val();
			var prijs = $("#menu_prijs").val();
			var type = $("#menu_type").val();
			

			var request = $.ajax({
			  type: "POST",
			  url: "ajax/getMenu.php",
			  data: { gerecht: gerecht, prijs: prijs, type: type},
			  dataType: "json"
			});
			request.done(function( msg ) {
				
			

			   var tr = "<tr><td>" + msg.menu[2] + "</td><td>&euro; " + msg.menu[3] + "</td><td>" + msg.menu[4] + "</td><th class='nopadding white'><a href='delete.php?type=menu&amp;id=" + msg.menu[0] + "'' class='delete' title='Verwijderen'>Verwijderen</a><a href='edit.php?type=menu&amp;id="+msg.menu[0] +"'' class='edit' title='Bewerken'>Bewerken</a></th></tr>";
			$('#tabel_menu #inputs_toevoegen').after(tr);
				
				console.log(msg);
				
			});
	
			e.preventDefault();
			
	});*/
});         