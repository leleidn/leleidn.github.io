<html>
<head>
<link rel="icon" href="favicon-lele.png" type="image/gif" sizes="16x16">
<link href='https://fonts.googleapis.com/css?family=Roboto&amp;display=swap' rel='stylesheet' type='text/css'>
<title>Lele.IDN - Formulir Pemesanan</title>
<style>
body{font-family:'Roboto',Arial,sans-serif}.none{display:none}

.datainput{position:relative;margin:5px 0 20px}.datainput p{font-size:12px;background:#eee;display:inline-block;padding:5px 15px;border-radius:.5rem}.whatsapp-form textarea{min-height:120px}.datainput select{padding:12px 0;color:#555;font-size:14px;width:100%;border:0;border-bottom:1px solid #ddd;outline:none;background:#fff}.datainput input,.datainput textarea{font-size:15px;padding:15px 0;display:block;width:100%;border:none;border-bottom:1px solid #ddd}.datainput input:focus,.datainput textarea:focus{outline:none}.datainput label{color:#999;font-size:14px;font-weight:400;position:absolute;pointer-events:none;left:0;top:18px;transition:.2s ease all}.datainput input:focus~label,.datainput input:valid~label,.datainput textarea:focus~label,.datainput textarea:valid~label{top:-10px;font-size:14px;color:#21a51f}#notif-license span{font-size:40px}#notif-license{display:none;position:fixed}.bar{position:relative;display:block;width:100%}.bar:before,.bar:after{content:'';height:2px;width:0;bottom:1px;position:absolute;background:#21a51f;transition:.2s ease all}.bar:before{left:50%}.bar:after{right:50%}.datainput input:focus~.bar:before,.datainput input:focus~.bar:after,.datainput textarea:focus~.bar:before,.datainput textarea:focus~.bar:after{width:50%}.indigox{background:#3f51b5}.orangex{background:#ff9800}.pinkx{background:#e91e63}.bluex{background:#2196F3}.purplex{background:#9c27b0}.redx{background:#F44336}.greenx{background:#4CAF50}.highlight{position:absolute;height:50%;width:100px;top:25%;left:0;pointer-events:none;opacity:.5}.datainput input:focus~.highlight,.datainput textarea:focus~.highlight{animation:inputHighlighter .3s ease}.datainput input:focus~label,.datainput input:valid~label,.datainput textarea:focus~label,.datainput textarea:valid~label{top:-10px;font-size:13px;color:#21a51f}

form.whatsapp-form {
    box-shadow: 0 1px 6px rgba(32,33,36,.28);
    border-radius: .5rem;
    padding: 20px;
    box-sizing: border-box;
    color: #444;
    font-size: 14px;
    line-height: 1.5;
}
 .whatsapp-form a.send_form {
    color: #fff;
    background: #21a51f;
    text-decoration: none;
    display: inline-block;
    padding: 10px 25px;
    border-radius: .3rem;
    font-weight: 700;
    letter-spacing: .5px;
    font-size: 15px;
}
#text-info span {
    display: block;
    padding: 10px 15px;
    text-align: center;
    font-weight: 700;
    margin: 15px 0;
    border-radius: .5rem;
}
#text-info span.yes {
    background: #c6ffc5;
    color: #0ea904;
}
#text-info span.no {
    background: #ffc5c5;
    color: #ce0404;
}
.whatsapp-form{
  width:100%;
  max-width:700px;
  margin:0 auto;
  box-sizing:border-box;
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<center><img src="logo.png" alt="Lele.IDN" width="150" height="150"></center>

<body onload="setRand()">
<form class="whatsapp-form" method="post">
<div class="datainput">
<input class="validate" id="nama" name="nama" required="" type="text" value=''/>
<span class="highlight"></span><span class="bar"></span>
<label>Nama Pemesan</label>
<input type="text" id="nopesanan" name="nopesanan" disabled>
</div>
<div class="datainput">
<input class="validate" id="catatan" name="catatan" required="" type="text" value=''/>
<span class="highlight"></span><span class="bar"></span>
<label>Catatan Pengiriman</label>
</div>
<div class="datainput">
<input class="validate" id="tanggal_kirim" name="tanggal_kirim" required="" type="date"/>
<span class="highlight"></span><span class="bar"></span>
<label></label>
</div>
<input type="hidden" id="tanggal_pemesanan" name="tanggal_pemesanan" value="<?php echo date('Y-m-d'); ?>" />
<div class="datainput">
<input class="validate" id="telepon" name="telepon" required="" type="number" value=''/>
<span class="highlight"></span><span class="bar"></span>
<label>Nomor Telepon</label>
</div>
<div class="datainput">
<input class="validate" id="alamat" name="alamat" required="" type="text" value=''/>
<span class="highlight"></span><span class="bar"></span>
<label>Alamat Pengiriman</label>
<p>Silahkan isi alamat pengiriman lengkap dengan infromasi tambahan.</p>
</div>
<div class="datainput">
<select id="menu1" name="menu1">
  <option hidden='hidden' selected='selected' value='default'>Pilihan Menu 1</option>
  <option value="MELID001-15000">(MELID001) Lele Siap Goreng Rp.15.000</option>
  <option value="MELID002-20000">(MELID002) Nugget Lele Rp.20.000</option>
  <option value="MELID003-30000">(MELID003) Lele Katsu Rp.30.000</option>
</select>
</div>
<div class="datainput">
<input class="validate" id="jumlah_menu1" name="jumlah_menu1" required="" type="number" value=''/>
<span class="highlight"></span><span class="bar"></span>
<label>Jumlah</label>
</div>
<div class="datainput">
<select id="menu2" name="menu2">
  <option hidden='hidden' selected='selected' value='default'>Pilihan Menu 2</option>
  <option value="MELID001-15000">(MELID001) Lele Siap Goreng Rp.15.000</option>
  <option value="MELID002-20000">(MELID002) Nugget Lele Rp.20.000</option>
  <option value="MELID003-30000">(MELID003) Lele Katsu Rp.30.000</option>
  <option value="MELID000-0">-</option>
</select>
</div>
<div class="datainput">
<input class="validate" id="jumlah_menu2" name="jumlah_menu2" required="" type="number" value=''/>
<span class="highlight"></span><span class="bar"></span>
<label>Jumlah</label>
</div>
<div class="datainput">
<textarea id="catatan_pesanan" name="catatan_pesanan" placeholder='' maxlength='5000' row='1' required=""></textarea>
<span class="highlight"></span><span class="bar"></span>
<label>Catatan Pesanan</label>
<p>Silahkan isi sesuai catatan yang ingin anda tambahankan pada pesanan.</p>
</div>
<!-- <center><a><input class="button send_form" href="javascript:void" type="submit" value="Pesan - WhatsApp"></a></center> -->
<center><a class="send_form" href="javascript:void" type="submit" title="Pesan - WhatsApp">Pesan - WhatsApp</a></center>
<div id="text-info"></div>
</form>

<script type="text/javascript">
function rand(len){
  return Math.floor(Math.random() * Math.pow(10, len));
}

function setRand(){
   document.getElementById('nopesanan').value = rand(3); 
}
</script>

<script type="text/javascript">
$(document).on('click','.send_form', function(){
var input_pesanan = document.getElementById('catatan_pesanan');

var link = 'https://web.whatsapp.com/send',
    phone = '6281215054813',
    headertext = 'Form Pemesanan Lele.IDN ',
    text_yes = 'Formulir pemesanan telah terkirim!',
    text_no = 'Isi formulir pemesanan terlebih dahulu!';

if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
var walink = 'whatsapp://send';
}

if("" != input_pesanan.value){

var input_menu1 = $("#menu1 :selected").val(),
    input_menu2 = $("#menu2 :selected").val(),
    input_jumlah_menu1 = $("#jumlah_menu1").val(),
    input_jumlah_menu2 = $("#jumlah_menu2").val(),
    input_nama = $("#nama").val(),
    input_nopesanan = $("#nopesanan").val(),
    input_catatankirim = $("#catatan").val(),
    input_tanggalkirim = $("#tanggal_kirim").val(),
    input_tanggalpemesanan = $("#tanggal_pemesanan").val(),
    input_telepon = $("#telepon").val(),
    input_alamat = $("#alamat").val(),
    input_catatan = $("#catatan_pesanan").val();

var idpesanan = input_telepon.substring(0, 7)
var kode_pesanan = idpesanan+input_nopesanan;

var pilihan_menu1= $('#menu1').val().split('-')[1];
var pilihan_menu2 =$('#menu2').val().split('-')[1];
var totalharga_menu1 = parseFloat(pilihan_menu1) * parseFloat(jumlah_menu1);
var totalharga_menu2 = parseFloat(pilihan_menu2) * parseFloat(jumlah_menu2);
var totalharga = totalharga_menu1+totalharga_menu1;

var pesanan_whatsapp = link + '?phone=' + phone + '&text=' + headertext + '%0A%0A' +
    '*Tanggal Pemesanan* : ' + input_tanggalpemesanan + '%0A' +
    '*Kode Pesanan* : ' + kode_pesanan + '%0A' +
    '===============' + '%0A' +
    '*Nama Pemesan* : ' + input_nama + '%0A' +
    '*Catatan Pengiriman* : ' + input_catatankirim + '%0A' +
    '*Tanggal Pengiriman* : ' + input_tanggalkirim + '%0A' +
    '*Nomor Telepon* : ' + input_telepon + '%0A' +
    '*Alamat Pengiriman* : ' + input_alamat + '%0A' +
    '*Pilihan Menu 1* : ' + input_menu1 + '%0A' +
    '*Jumlah* : ' + input_jumlah_menu1 + '%0A' +
    '*Pilihan Menu 2* : ' + input_menu2 + '%0A' +
    '*Jumlah* : ' + input_jumlah_menu2 + '%0A' +
    '*Catatan* : ' + input_catatan + '%0A';

window.open(pesanan_whatsapp,'_blank');
document.getElementById("text-info").innerHTML = '<span class="yes">'+text_yes+'</span>';
} else {
document.getElementById("text-info").innerHTML = '<span class="no">'+text_no+'</span>';
}
});
</script>

</body>
</html>