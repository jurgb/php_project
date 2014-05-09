$(document).ready(function(){
	$(".save").on("click", function(e){
			
			var naam = $("#reservatie_name").val();
			var personen = $("#reservatie_personen").val();
			var datum = $("#reservatie_datum").val();
			var uur = $("#reservatie_uur").val();
			var tafel = $("#reservatie_tafel").val();

			var request = $.ajax({
			  type: "POST",
			  url: "ajax/getReservations.php",
			  data: { name: naam, tafel: tafel, datum: datum, uur: uur, personen: personen },
			  dataType: "json"
			});
			request.done(function( msg ) {

				$("#reservatie_name").val("");
				$("#reservatie_personen").val("");
				$("#reservatie_datum").val("");
				$("#reservatie_uur").val("");
				$("#reservatie_tafel").val("");
	
				var tr = "<tr><td>" + msg.reservaties[1] + "</td><td>" + msg.reservaties[2] + "</td><td>" + msg.reservaties[3] + "</td><td>" + msg.reservaties[4] + "</td><td>" + msg.reservaties[5] + "</td><th class='nopadding white'><a href='delete.php?type=reservatie&amp;id=" + msg.reservaties[0] + "'' class='delete' title='Verwijderen'>Verwijderen</a><a href='edit.php?type=reservatie&amp;id="+msg.reservaties[0] +"'' class='edit' title='Bewerken'>Bewerken</a></th></tr>";
				$('#tabel_reservaties #inputs_toevoegen').after(tr);
				console.log(msg);

				
			});
	
			e.preventDefault();
			
	});
});