$(document).ready(function(){
	$(".save").on("click", function(e){
			
			var personen = $("#tafel_personen").val();
			var tafel = $("#tafel_nr").val();

			var request = $.ajax({
			  type: "POST",
			  url: "ajax/gettafels.php",
			  data: { personen: personen, tafel: tafel },
			  dataType: "json"
			});
			request.done(function( msg ) {

				$("#tafel_personen").val("");
				$("#tafel_nr").val("");
				
				var tr = "<tr><td>" + msg.tafels[1] + "</td><td>" + msg.tafels[3] + "</td><th class='nopadding white'><a href='delete.php?type=tafel&amp;id=" + msg.tafels[0] + "'' class='delete' title='Verwijderen'>Verwijderen</a><a href='edit.php?type=tafel&amp;id="+msg.tafels[0] +"'' class='edit' title='Bewerken'>Bewerken</a></th></tr>";
				$('#tabel_tafels #inputs_toevoegen').after(tr);
				
				
				
			});
	
			e.preventDefault();
			
	});
});