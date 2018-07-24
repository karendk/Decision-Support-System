  <div class="navbar nav-justified navbar-fixed-top navbar-inverse atas">
    <div class="container">
      <div class="navbar-header">
       <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
       </button>
          <a class="navbar-brand" href="<?=base_url(); ?>" style="color: white">
            BERANDA
          </a>
        </div>
       <div class="collapse navbar-collapse navHeaderCollapse">
          <ul class="nav navbar-nav" style="margin-top: 0px; margin-bottom: 0px;">
            <li class='lina'><a href="<?=base_url('beranda/lihat_semua_motor'); ?>" style="color: white">Daftar Motor</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right" style="margin-top: 0px; margin-bottom: 0px;">
            <li class='lina'><a href='' class='smoothScroll' data-toggle='modal' data-target='#myModal' style="color: white"><span class='glyphicon glyphicon-info-sign'></span>&nbsp;</a></i>
          </ul>
        </div>    
       </div>
  </div>

  <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tentang</h4>
      </div>
      <div class="modal-body">
      Developer:
      <ul>
        <li>Risalatul M.</li>
        <li>Rizia Praja R.</li>
        <li>Karen D. Kusuma</li>
        <li>Rulysa P.</li>
      </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      </div>
    </div>

  </div>
</div>