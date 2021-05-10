<html>
  <head>
    <title>Lihat Orderan</title>
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
    </nav>
    <center><h1>Lihat Orderan</h1></center>
    <br>
    <!-- <a href='<?php echo base_url("order/tambah"); ?>'>Tambah Data</a><br><br> -->
    <table border="1" cellpadding="10" style="margin-left: 300px">
      <tr>
        <th>Produk</th>
        <th>Jumlah</th>
        <th>Nama Pemesan</th>
        <th>Alamat Pemesan</th>
        <th>Status Pengiriman</th>
        <th colspan="2">Action</th>
      </tr>
      <?php
      if( ! empty($order)){ // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
        foreach($order as $data){
          echo "<tr>
          <td>".$data->produk."</td>
          <td>".$data->jumlah."</td>
          <td>".$data->nama_pemesan."</td>
          <td>".$data->alamat_pemesan."</td>
          <td>".$data->status."</td>
          <td><a href='".base_url("order/ubah/".$data->id)."'>Ubah</a></td>
          </tr>";
          // <td><a href='".base_url("order/hapus/".$data->alamat_pemesan)."'>Hapus</a></td>
        }
      }else{ // Jika data siswa kosong
        echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
      }
      ?>
    </table>
  </body>
</html>