<div class="jumbotron" align="center">
	KRITERIA MOTOR: 
	<?=$jenis.", ".$merek.", "
	.str_replace('_', ' ', ''.$harga.'').", "
	.str_replace('_', ' ', ''.$mesin.'').", "
	.str_replace('_', ' ', ''.$konsumsi_bensin.'').", <b>dan</b> "
	.str_replace('_', ' ', ''.$kapasitas_bensin.''); ?>
</div>
<div class="container">
    <button data-toggle="collapse" class="btn btn-info" data-target="#data-fuzzy">Data Fuzzy</button><br><br>
    <div id="data-fuzzy" class="collapse  table-responsive">
		<table id="" class="table table-bordered">
			<tr>
			  	<td>ID</td>
			  	<td>Nama Motor</td>
			  	<td><?=str_replace('_', ' ', ''.$harga.'');?></td>
			  	<td><?=str_replace('_', ' ', ''.$mesin.'');?></td>
			  	<td><?=str_replace('_', ' ', ''.$konsumsi_bensin.'');?></td>
			  	<td><?=str_replace('_', ' ', ''.$kapasitas_bensin.'');?></td>
			  	<td>Hasil (DAN)</td>
		  	</tr>
		<?php
		foreach($motor as $data){
		    $f1=$data->$harga;
		    $f2=$data->$mesin;
		    $f3=$data->$konsumsi_bensin;
		    $f4=$data->$kapasitas_bensin;
			$hasil=min($f1,$f2,$f3,$f4);
			if($hasil==0){}
			else{
		?>
		    <tr>
		     	<td><?="M".$data->id?></td>
		     	<td><?=$data->nama_motor;?></td>
		     	<td><?=$f1;?></td>
		     	<td><?=$f2;?></td>
		     	<td><?=$f3;?></td>
		     	<td><?=$f4;?></td>
			  	<td><?=$hasil;?></td>
		    </tr>     
		    <?php }
		    }?>
	    </table>
	</div>
	<div class="list-group">
		<?php
		foreach($motor as $data){
		    $f1=$data->$harga;
		    $f2=$data->$mesin;
		    $f3=$data->$konsumsi_bensin;
		    $f4=$data->$kapasitas_bensin;
			$hasil=min($f1,$f2,$f3,$f4);
			if($hasil==0){}
			else{
		?>	
				<a href="<?=base_url('beranda/lihat_motor/'.$data->id);?>" class="list-group-item">
		    	<?php echo "<img src=".str_replace(' ', '%20', ''.base_url('asset/gambar/').$data->gambar.'')." alt='Motor' style='width:100px;height:90px'>";
		    	echo "&nbsp;&nbsp;".$data->merek." ".$data->nama_motor;?>
		    </a>  
		<?php }
	}?>
	</div>
	
</div>