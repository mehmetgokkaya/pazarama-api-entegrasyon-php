<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pazarama Güncelle</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 16px;
}
</style>
  </head>
  <body>
	 <div style="width:100%;" class="containe">
	  <div class="row justify-content-center">
		<div class="col">
		 <table id="myTable"  class="table table-bordered table-striped table-dark">
			<tr>
			<td style="border-color: #000;">Sayı</td>
<th style="border-color: #000;width: 20%;">Adı</th>
			 <th style="border-color: #000;">Barkod</th>
			 <th style="border-color: #000;">Stok Sonuç</th>
			 <th style="border-color: #000;">Fiyat Sonuç</th>
			 </tr>
			 
			 <?php
			$count = 1;
			$affectedRow = 0;
 
// Load xml file else check connection
$xml = simplexml_load_file("/products.xml") //stokların çekileceği xml adresi 
    or die("Error: Cannot create object");
 
// Assign values
//Kendi xml dosyanıza göre doldurabilirsiniz
foreach ($xml->children() as $row) {
    $adi = $row->Baslik; 
    $barkod = $row->Varyantlar->Varyant->Barkod;
    $stok = $row->Stok;
    $resim = $row->Gorseller->url;
    $pfiyati = $row->PiyasaFiyati;
    $fiyat = $row->SatisFiyati;
    $marka= $row->Marka;
    $kategori= $row->Kategori;
			
			?>
                            
			
<tr>
<td style="border-color: #000;" ><?php echo $count; ?></td>
<td style="border-color: #000;width: 10%;"><?= $adi?></td>
			 	<td style="border-color: #000;width: 10%;"><?= $barkod ?></td>
				<td style="border-color: #000;"><iframe src="<?php echo ("/stokguncelle.php?stok=$stok&barkod=$barkod") ?>" style="border: none;width: 100%;height: 100px;" ></iframe></td>
				<td style="border-color: #000;"><iframe src="<?php echo ("/fiyatguncelle.php?fiyat=$fiyat&barkod=$barkod&pfiyati=$pfiyati") ?>" style="border: none;width: 100%;height: 100px;" ></iframe></td>

			    </tr>
				<?php $count=$count+1; ?>
			 <?php } ?>
 
			</table> 
		  </div>  
	  </div>



  </body>
</html>
