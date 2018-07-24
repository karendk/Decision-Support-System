<br><br>
<div class="container">
	<?php 
	foreach($motor as $data){?>
			<div class="col-sm-6">
	     	<?php echo "<img src=".str_replace(' ', '%20', ''.base_url('asset/gambar/').$data->gambar.'')." alt='Motor' style='width:100%;height:100%'>";?>    
	     	</div>
	     	<div class="list-group col-sm-6">
	     		<h3><?=$data->merek." ".$data->nama_motor;?></h3>
	     		<a href="" class="list-group-item">Kode Produk: M <?=$data->id;?></a>
	     		<a href="" class="list-group-item">Tipe Gigi: <?=$data->jenis;?></a>
	     		<a href="" class="list-group-item">Harga: <?=number_format($data->harga);?></a>
	     		<a href="" class="list-group-item">Besar Mesin: <?=$data->mesin." cc";?></a>
	     		<a href="" class="list-group-item">Konsumsi Bensin: <?=$data->konsumsi_bensin." km/l";?></a>
	     		<a href="" class="list-group-item">Kapasitas Bensin: <?=$data->kapasitas_bensin." liter";?></a>
	     	</div>
	    <?php }?>  
</div>
<br><br>