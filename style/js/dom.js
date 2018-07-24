//===============================================untuk DOM============================================================
//Karen D. Kusuma
//global variable
var teks=/[^A-Za-z ]+/,
    angka=/[^0-9]+/,
    tgl_string=/[^0-9/-]+/,
    spasi=/[^.@A-Za-z0-9_-]+/,
    tekstanggal=/[^/]+/,
    almt_string=/[^.A-Za-z0-9-=: ]+/,
    idname=['username','password','email','nama_lengkap','tanggal','no_hp','alamat','ukuran_id','repassword'],
    isian={},
    a= new Date(),//membuat waktu sekarang
    sekarang=a.toISOString().slice(0,10); //memotong dari digit 0 ke 10 yyyy-mm-dd

for(var i=0; i<idname.length; i++){
  isian[i]=document.getElementById(idname[i]);
}

function ukur(tulisan){
  isian[7].value=tulisan;
  isian[7].value=isian[7].value.replace(angka,"");
}

function aspasi(tulisan){
  isian[0].value=tulisan;
  isian[0].value=isian[0].value.replace(spasi,"");
}

isian[2].oninput=function(){
  isian[2].value=isian[2].value.replace(spasi,"");
}

isian[3].onkeyup=function(){
  isian[3].value=isian[3].value.toUpperCase();
}
isian[3].oninput=function(){
  isian[3].value=isian[3].value.replace(teks,"");
}

function nohp(tulisan){
  isian[5].value=tulisan;
  isian[5].value=isian[5].value.replace(angka,"");
}

function tgl(tulisan){
  isian[4].value=tulisan;
  isian[4].value=isian[4].value.replace(tgl_string,"");
}

function almt(tulisan){
  isian[6].value=tulisan;
  isian[6].value=isian[6].value.replace(almt_string,"");
}


function reset(){
  for(var i=1; i<idname.length; i++){
  isian[i]="";
  }
}