<html>
	<head>
		<title>Dashboard</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?> ">
		<script>
			function openNav() {
		    document.getElementById("sideNavigation").style.width = "250px";
		    document.getElementById("main").style.marginLeft = "250px";
		}
		 
		function closeNav() {
		    document.getElementById("sideNavigation").style.width = "0";
		    document.getElementById("main").style.marginLeft = "0";
		}
		</script>
	</head>
	<body>
		<div id="sideNavigation" class="sidenav">
   		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  		  <hr><a>Menu Admin</a><hr>
  		  <ul>
		  	<a href="<?php echo base_url ('order/admin')?>">Dashboard</a>
		  	<a href="<?php echo base_url ('order/form_order')?>">Lihat Orderan</a>
		  </ul>
		</div>
		 
		<nav class="topnav">
		  <a href="#" onclick="openNav()">
		    <svg width="30" height="30" id="icoOpen">
		        <path d="M0,5 30,5" stroke="#000" stroke-width="5"/>
		        <path d="M0,14 30,14" stroke="#000" stroke-width="5"/>
		        <path d="M0,23 30,23" stroke="#000" stroke-width="5"/>
		    </svg>
		  </a>
		</nav><br>

	<section class="grid-1">
		<div class="item-1">
		  	<center>Jumlah Semua Orderan<br><br>
		  	<?php 
		  		echo $count;
		  	?>
		  	</center>
		</div>

		<div class="item-2">
		  	<center>Jumlah Orderan Kemarin<br><br>
		  		<?php 
		  		 	echo $count_date;
		  		 ?>
		  	</center>
		</div>

		<div class="item-3">
			<center>Jumlah Orderan Hari ini<br><br>
				<?php
					echo $count_date1;
				?>
			</center>
		</div>

		<div class="item-4">
			<center>Jumlah Orderan Belum Diproses<br><br>
			<?php 
		  		echo $count1;
		  	?>
			</center>
		</div>
		  
		<div class="item-5">
			<center>Jumlah Orderan Sedang Diproses<br><br>
			<?php 
		  		echo $count2;
		  	?>
			</center>
		</div>

		<div class="item-6">
			<center>Jumlah Orderan Selesai<br><br>
				<?php
					echo $count3;
				?>
			</center>
		</div>
	</section>

	</body>
</html>