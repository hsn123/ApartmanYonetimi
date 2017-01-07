<html>
<body background="duvarr.jpg">
<link rel="stylesheet" href="special.css" >
<?php
if(isset($_POST["ekle"])&&isset($_POST["adsyd"])&&isset($_POST["aidat"]))



?>
<div align="center" id="div1"> <br/> APARTMAN OTOMASYONU <br/> <br/>
Umut Apartmanımıza Hoş Geldiniz.
<center>
<form method="post">
<input type="text" id="ekle" placeholder="Daire Ekle" ></input><br/><br/>
<input type="text" id="adsyd" placeholder="Ad-Soyad"></input><br/><br/>
<input type="text" id="aidat" placeholder="Aidat"></input><br/><br/>
<button type="submit" id="butn" class="btn btn-primary" >ÖDE</button>
</form>
</center>
</div>
</body>
</html>