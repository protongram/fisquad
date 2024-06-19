<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title></title>
</head>
<body>
<nav class="navbar">
	Orpos Finance Squad
</nav>
<br><br>
<h1>Temukan Airdrop Paling Legit Disini!</h1>
<small>Orpos Finance Squad memberikan info airdrop yang memiliki kriteria berikut :
<ul>
<li>Tidak Ada Undian, Jadi semua sudah pasti dapat</li>
<li>Tidak Ada Tugas wajib follow Sosial media</li>
<li>Sudah Pasti Akan Rilis & Memiliki kemungkinan memiliki harga hijau</li>
</ul>
Karena biasanya kebanyakan airdrop yang diundi & wajib follow sosial media sangat membuang waktu penggarap,
sehingga apabila tidak memenangkan undian, penggarap hanya digunakan untuk meramaikan sosial media si penyelenggara airdrop
</small>
<?php
foreach(glob("public/airdrop_list/*.json") as $airdrop){
	$airdrop = json_decode(file_get_contents($airdrop),true);
	echo "<div class='card'>
		<h1>".$airdrop["title"]."</h1>				<img src='public/images/".$airdrop["cover"]."'>
		<h4>".$airdrop["description"]."</h2>
		<a href='".$airdrop["link"]."'><button>Garap</button></a>
		</div>";
}
?>

<style>
.navbar{
	background:#121217;
	color:#efeff6;
	width:100%;
	position:fixed;
	padding:9px;
	top:0;
	left:0;
}

@font-face{
    src:url(public/Inter-Regular.ttf);
	font-family:inter;
}
body{
	background:#242428;
	color:#efeff8;
	font-family:inter;
}
body *{
	font-weight:normal;
	font-family:inter;
}
.card{
	text-align:center;
	padding:15px;
	font-family:inter;
	margin:17px 10px;
	border-radius:1rem;
	background-image:linear-gradient(70deg, rgba(195,85,255,0.1),rgba(55,155,255,0.2));
}
.card *{
	margin:0;
}
@-moz-keyframes running{
	0%{background-position:200%;padding:10px;}
	100%{background-position:100%;padding:18px;}
}
.featured{
background-image:linear-gradient(to right,fuchsia,orange);
background-repeat:repeat;
background-size:200%;
padding:2px;
border-radius:7px;
animation:running 0.2s infinite;
}

button{
 background:#7a72fa;
 color:#fff;
 width:180px;
 border-radius:0.5rem;
 padding:5px;
 border:0;
}
img{
 max-width:100%;
 border-radius:6px;
 margin:10px 50px;
 box-shadow:3px 3px 50px 10px rgba(0,0,0,0.3);
}
</style>
</body>
</html>