<br><br>
<div class="container">
	<!--<button id="reloadbtn" class="btn btn-info">DATABASE</button><br><br> -->
    <div id="tabel-motor" class="row">
    <?php 
	foreach($motor as $data){?>
	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">

          <div class="over"  style="height: 300px; width: 100%;">
          	<?php echo "<img src=".str_replace(' ', '%20', ''.base_url('asset/gambar/').$data->gambar.'')." alt='Motor' width='100%' class='grow';>";?>
          </div>
	      
	      <div class="caption" style="background-color: #EEEEEE;">
	        <h3><?=$data->merek." ".substr($data->nama_motor, 0, 15);?></h3>
	        <p>	
				Tipe: <?=$data->jenis;?><br>
				Harga: Rp. <i style="color: blue"><?=number_format($data->harga);?>,-</i>
	        </p>
	        <p class="text-right">
	        	<a href="<?=base_url('beranda/lihat_motor/'.$data->id);?>" class="btn btn-info">		    	
	    			<i class="glyphicon glyphicon-eye-open"></i>
		    	</a>  
	        </p>
	      </div>
	    </div>
	  </div>
	    <?php }?>
	</div>  
	<nav>
        <ul class="pagination">
            <!-- Pagination links -->
             <?=$pagination;?>
        </ul>
    </nav>
</div>
<script type="text/javascript">
	/*$(document).ready(function(){
		function reload(){	
			$( "#tabel-motor" ).load( "<?php echo base_url('beranda/tampil_motor/')?>" );
		}
		$('#reloadbtn').on('click',reload);
	});*/	
</script>