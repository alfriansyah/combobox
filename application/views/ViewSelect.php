<!DOCTYPE html>
<html>
<head>
	<title>combo box</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script type="text/javascript">
		
		

<script type="text/javascript">

$(function(){

$.ajaxSetup({
type:"POST",
url: "<?php echo base_url('select/ambil_data') ?>",
cache: false,
});

$("#provinsi").change(function(){

var value=$(this).val();
if(value>0){
$.ajax({
data:{modul:'kabupaten',id:value},
success: function(respond){
$("#kabupaten-kota").html(respond);
}
})
}

});


$("#kabupaten-kota").change(function(){
var value=$(this).val();
if(value>0){
$.ajax({
data:{modul:'kecamatan',id:value},
success: function(respond){
$("#kecamatan").html(respond);
}
})
}
})

$("#kecamatan").change(function(){
var value=$(this).val();
if(value>0){
$.ajax({
data:{modul:'kelurahan',id:value},
success: function(respond){
$("#kelurahan-desa").html(respond);
}
})
} 
})

})
	</script>
</head>
<body>
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="form-group">
					<select class='form-control' id='Provinsi'>
						<label>Provinsi</label>
						<option value="0">Pilih Provinsi</option>
						<?php 
							foreach ($provinsi as $prov) {
								echo "<option value='$prov[id]' >$prov[name] </option>";
							}
						?>
					</select>
				</div>
				<div class='form-group'>
					<label>Kabupaten/kota</label>
					<select class='form-control' id='kabupaten-kota'>
					<option value='0'>--pilih--</option>
					</select>
				</div>
				<div class='form-group'>
					<label>Kecamatan</label>
					<select class='form-control' id='kecamatan'>
					<option value='0'>--pilih--</option>
					</select>
				</div>
				<div class='form-group'>
					<label>Kelurahan/desa</label>
					<select class='form-control' id='kelurahan-desa'>
					<option value='0'>--pilih--</option>
					</select>
				</div>

			</div> <!-- row -->
		</div>
	</div>
	
</body>
</html>