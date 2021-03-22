<!DOCTYPE html>
<html>
<head>
	<title>Combo box dengan Ajax</title>

<script
			  src="https://code.jquery.com/jquery-3.6.0.js"
			  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
			  crossorigin="anonymous"></script>
</head>

<body>
		<form action="" method="post">
			<label>	Provinsi </label>
			<select name="provinsi" id="provinsi">	
				<?php foreach ($provinsi as $prov) :?>
					<option value='<?= $prov->id ?>' ><?= $prov->name ?></option>";
				<?php endforeach ?>
			</select>
			<label>	Kabupate / Kota</label>
			<select name="kabupaten" id="kabupaten">
				<option>Pilih Kabupaten / Kota</option>
			</select>
			<label>	Kecamatan</label>
			<select name="kecamatan" id="kecamatan">
				<option>Pilih Kabupaten / Kota</option>
			</select>
			<label>	Desa</label>
			<select name="desa" id="desa">
				<option>Pilih Kabupaten / Kota</option>
			</select>
		</form>
</body>
	<script >
		// ketika halam siap jalankan jquery
		$(document).ready(function(){
			// get vallue provinsi dan jadikan parameter untuk mengambil nilai kabupaten
			// ketika id='provinsi' berubah maka
			$('#provinsi').change(function(){
				// buat tangkap nilainya 
				var provinsi_id	= $('#provinsi').val();
				if(provinsi_id !=''){
					$.ajax({
						url:"<?php base_url();?>negara/kabupaten",
						method:"POST",
						// provinsi -> key , ini id kirim ke controller dgn method post
						// provinsi_id ->valu dari #provinsi
						data:{provinsi:provinsi_id},
						success:function(data){
							$('#kabupaten').html(data);
						}
					})
				}
			});

			// kecamaten
			$('#kabupaten').change(function(){
				// tangkap nilai #kabupaten , gunanya untuk parameter select kecamatan
				var id_kabupaten	= $('#kabupaten').val();
					// buat request ajax
					$.ajax({
						// ambil data dari
						url 	: "<?php base_url()?>negara/kecamatan",
						// method yg digunakan
						method 	: 'POST',
						// Kirim data ke negar/kecamatan , data{name:value}
						data	: {kabupaten:id_kabupaten},
						// jika data suksek di olah
						success:function(data){
							// letakkan hasilnya di #kecamatan
							console.log(id_kabupaten);
							$('#kecamatan').html(data);
						}
					})
			});

			// desa
			$('#kecamatan').change(function(){
				// tankap id #kecamatan
				var id_kecamatan	= $('#kecamatan').val();
				// jalankan ajax
				$.ajax({
					// ambil data data desa berdasarkan id kecamatan
					url 	: "<?php base_url()?>negara/desa",
					method	: 'POST',
					data 	: {kecamatan:id_kecamatan},
					// jika data sukses di olah letakkan di #desa
					success:function(data){
						console.log(id_kecamatan);
						$('#desa').html(data);
					}
				})
			})
		})
	</script>
</html>