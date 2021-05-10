<html>
  <head>
    <title>Form Order - CRUD Codeigniter</title>
  </head>
  <body>
    <h1>Order Barang</h1>
    <hr>
    <!-- Menampilkan Error jika validasi tidak valid -->
    <div style="color: red;"><?php echo validation_errors(); ?></div>
    <?php echo form_open("order/tambah"); ?>
    <center>
      <table cellpadding="8">
        <tr><br>
          <select name="input_produk" style="height: 40px; width: 310px" value="<?php echo set_value('input_produk'); ?>">
            <option value="">Pilih Produk</option>
            <option value="headset">Headset</option>
            <option value="samsung">Samsung A72</option>
            <option value="oppo">Oppo A51</option>
            <option value="iphone">Iphone Se 2020</option>
            <option value="xiaomi">Xiaomi</option>
          </select>
        </tr>

        <tr>
          <td><input type="text" placeholder="Jumlah" name="input_jumlah" style="height: 40px; width: 310px" value="<?php echo set_value('input_jumlah'); ?>"></td>
        </tr>

        <tr>
         <td><input type="text" placeholder="Nama Pemesan" name="input_nama" style="height: 40px; width: 310px" value="<?php echo set_value('input_nama'); ?>"></td>
        </tr>

        <tr>
         <td><input type="text" placeholder="Alamat Pemesan" name="input_alamat" style="height: 40px; width: 310px" value="<?php echo set_value('input_alamat'); ?>"></td>
        </tr>
      </table>
      </center>
      <div style="margin-left: 730px">
        <input type="submit" name="submit"  value="Order" style="height: 40px; width: 100px">
      </div>
    <?php echo form_close(); ?>

  </body>
</html>