<!DOCTYPE html>
<html>
<head>
	<title>Combo box dengan Ajax</title>
</head>

<body>
		<form action="" method="post">
			<label>	Provinsi </label>
			<select name="Provinsi" id="Provinsi">	
				<?php foreach ($provinsi as $prov) :?>
					<option value='<?= $prov["id"]?>' ><?= $prov["name"] ?></option>";
				<?php endforeach ?>
			</select>
			<label>	Kabupate / Kota</label>
			<select name="Kabupate" id="Kabupate">	
				<option value="">Pilih Kota</option>
				<option></option>
			</select>
		</form>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous" ></script>

<script >
	$(document).ready(function () {
		$('#Provinsi').change(function(){
			var provinsi_id	= $(this).val();

			// definisikan ajax
			$.ajax({
				type	: "POST", // method
				url		: "<?php echo base_url()?>combo/AmbilData", // action
				data	: "prov_id="+provinsi_id, // $_POST['prov_id']
				success : function(response){
					$('Kabupate').html(response); // hasil yg didapat aka disimpan di selelct id='kabupaten'
				}
			});
		})
	});
</script>
</html>