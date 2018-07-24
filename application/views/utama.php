<div class="jumbotron" align="center">SPK Pemilihan Motor dengan Metode Basisdata Fuzzy Tahani</div>
<div class="container">
	<form action="<?php echo base_url('beranda/inputnilai'); ?>" id="form" class="form-horizontal" method="POST">
		<label>Masukan Logika:</label><br>
		<label class="radio-inline">
		  	<input type="radio" name="logika" id="logika" value="0"> Dan
		</label>
		<label class="radio-inline">
		  	<input type="radio" name="logika" id="logika" value="1" checked> Atau
		</label><br><br>

		<label>Masukan Tipe:</label><br>
		<label class="radio-inline">
		  	<input type="radio" name="jenis" id="jenis" value="0" checked> Manual
		</label>
		<label class="radio-inline">
		  	<input type="radio" name="jenis" id="jenis" value="1"> Matic
		</label><br><br>
		<label>Masukan Merek:</label><br>
		<label class="radio-inline">
		  	<input type="radio" name="merek" id="merek" value="0"> HONDA
		</label>
		<label class="radio-inline">
		  	<input type="radio" name="merek" id="merek" value="1"> KAWASAKI
		</label>
		<label class="radio-inline">
		  	<input type="radio" name="merek" id="merek" value="2" checked> SUZUKI
		</label>
		<label class="radio-inline">
		  	<input type="radio" name="merek" id="merek" value="3"> YAMAHA
		</label><br><br>
		<label>Masukan Harga:</label>
		<select id="p_harga" class="form-control" name="harga" >
			<option value="murah" selected>Murah</option>
			<option value="normal">Normal</option>
			<option value="mahal">Mahal</option>
			<option value="mahal_sekali">Mahal Sekali</option>
		</select><br>
		<label>Tingkat konsumsi bensin:</label>
		<select id="p_konsumsi_bensin" class="form-control" name="konsumsi_bensin" >
			<option value="irit">Irit</option>
			<option value="normal" selected>Normal</option>
			<option value="boros">Boros</option>
		</select><br>
		<label>Ukuran kapasitas mesin:</label>
		<select id="p_mesin" class="form-control" name="mesin" >
			<option value="sangat_kecil" selected>Sangat kecil</option>
			<option value="kecil">Kecil</option>
			<option value="sedang">Sedang</option>
			<option value="besar">Besar</option>
			<option value="sangat_besar">Sangat besar</option>
		</select><br>
		<label>Daya tampung bahan bakar:</label>
		<select id="p_kapasitas_bensin" class="form-control" name="kapasitas_bensin" >
			<option value="sedikit" selected>Sedikit</option>
			<option value="lumayan">Lumayan</option>
			<option value="banyak">Banyak</option>
		</select><br>
		<button id="submitbtn" type="submit" class="btn btn-info">Ok</button>
	</form>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
<script type="text/javascript">
/*$(document).ready(function(){
	function tambah(){
	    // ajax menambah ke database
	    $.ajax({
	        url : "<?php echo base_url('beranda/inputnilai'); ?>",
	        type: "POST",
			data : $('#form').serialize(),
	        dataType: "JSON",
	        success: function(data){
	        	//location.reload();
	        	window.location=base_url('beranda/hasil_fuzzy');
	        },
	        error: function (jqXHR, textStatus, errorThrown){
	        	window.location=base_url('beranda/hasil_fuzzy');
	            alert('Error adding / update data');
	        }
	    });
	}
	$('#submitbtn').on('click',tambah);
});	*/
</script>