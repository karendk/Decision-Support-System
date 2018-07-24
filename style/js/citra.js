//==============================style input=========================================
//Karen D. Kusuma
$(function() {
    $('#input-tombol').on('click', function() {
        $('#input-gambar').click();
    });
});

//aaaaaaaaaaaa
var defaultscr;
var img = new Image();

//==============================style input=========================================
window.onload = function() {
    var fileInput = document.getElementById('input-gambar');
    fileInput.addEventListener('change', 
      function(e) {
        var file = fileInput.files[0];
        var imageType = /image.*/;
        if (file.type.match(imageType)){
          var reader = new FileReader();
          reader.onload = function(e){
            img.src = reader.result;
            defaultscr=reader.result;
            img.onload = function(){
            draw(this);
            };
        }
      reader.readAsDataURL(file); 
      }
      else{
        fileDisplayArea.innerHTML = "File not supported!";
      }
    });

};

//=======================================Kanvas=====================================
//fungsi untuk mengambil gambar ke kanvas
function draw(img) {
  var canvas = document.getElementById('canvas');
  var ctx = canvas.getContext('2d');
  var ctxdef=canvas.getContext('2d');
  if(img.width<img.height){
    canvas.width = img.width;
    canvas.height = img.width;
  }
  else{
    canvas.width = img.height;
    canvas.height = img.height;
  }
  //canvas.width = img.width;
  //canvas.height = img.height;
  ctx.drawImage(img, 0, 0);
  img.style.display = 'none';
  var imageData = ctx.getImageData(0,0,canvas.width, canvas.height); 
  var datadef = imageData.data; 
  var data = imageData.data;
}

