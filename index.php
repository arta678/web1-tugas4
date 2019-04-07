<!DOCTYPE html>
<html>
<head>
	<title>Tugas 4 - Arta - Wiguna</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="bos">
	<?php 
	
	$bobot 	= [74,79,76,84,87];
	$sks 	= [20,24,22,24,24];

	$ipk = ((($bobot[0]/$sks[0])+      
			 ($bobot[1]/$sks[1])+
			 ($bobot[2]/$sks[2])+
			 ($bobot[3]/$sks[3])+
			 ($bobot[4]/$sks[4]))/count($bobot));

	$nilaiIPK = round($ipk,2);


	echo "	===================<br>
			I GEDE ARTA WIGUNA<br>
			16101468<br><br>";

	for ($i=0; $i < count($bobot); $i++) { 
		
		$ips = $bobot[$i] /$sks[$i];

		$cekIPS ="";	
		if ($ips>4) {
			$cekIPS = "(IPS > 4)";
		} elseif ($ips<0) {
			$cekIPS = "(IPS < 0)";
		} 

		echo "IP Semester ",$i+1," = ", 
			 $bobot[$i],"/",$sks[$i]," = ",
			 round($ips,2)," ",$cekIPS,"<br>";
	} 


	// ---------CEK KONDISI IPK----------
		if ($ipk >= 3.75 && $ipk<= 4) {
			$keterangan = "Cum Laude !";
			$urlgambar = "gambar/up.png";
			$warna = "#fff";
		}elseif ($ipk <= 3.74 && $ipk >= 3.50 ) {
			$keterangan = "Sangat Memuaskan !";
			$urlgambar = "gambar/up.png";
			$warna = "#fff";
		}elseif ($ipk<=3.49 && $ipk>=3) {
			$keterangan = "Memuaskan !";
			$urlgambar = "gambar/up.png";
			$warna = "#fff";
		}elseif($ipk<3 && $ipk>0){
			$keterangan ="IPK Kurang Memuaskan!";
			$urlgambar = "gambar/down.png";
			$warna = "#F8AEAE";
		}else{
			$keterangan = "Ups Sepertinya Anda salah Input Nilai!";
			$urlgambar = "gambar/error.png";
			$warna = "#F8AEAE";
		}

	
	echo "	===================<br>";
	echo "	<script>
			  	function sw(){
			  		Swal.fire({
						imageUrl: '$urlgambar',
  						imageHeight: 100,
  						imageWidth:100,
  						title: '$keterangan',
  						text: 'IPK Anda $nilaiIPK',
  						confirmButtonText: 'Tutup',
  						background: '$warna',
  						
			  		})
			  	}
			</script>";
	?>

	<button onclick="sw()" class="btnLihatIpk">Lihat IPK</button>

	</div>
	<script src="sweetalert2/dist/sweetalert2.all.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</body>
</html>