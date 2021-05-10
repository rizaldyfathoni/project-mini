<html>
  <head>
    <title>Ubah Status Pengiriman</title>
  </head>
  <body>
    <h1>Ubah Order Barang</h1>
    <hr>
    <!-- Menampilkan Error jika validasi tidak valid -->
    <div style="color: red;"><?php echo validation_errors(); ?></div>
    <?php echo form_open("order/ubah/".$order->id); ?>
    <center>
      <table cellpadding="8">
        <tr><br>
          <select name="input_status" style="height: 40px; width: 310px" value="<?php echo set_value('input_status', $order->status); ?>">
            <option>Ubah Status</option>
            <option value="<?php echo set_value('input_status', 'Belum Diproses'); ?>">Belum Diproses</option>
            <option value="<?php echo set_value('input_status', 'Sedang Diproses'); ?>">Sedang Diproses</option>
            <option value="<?php echo set_value('input_status', 'Pesanan Sampai'); ?>">Pesanan Sampai</option>
          </select>
        </tr>
      <div style="margin-left: 210px; margin-top: 20px">
        <input type="submit" name="submit" value="Ubah" style="height: 40px; width: 100px">
      </div>
    </center>
    <?php echo form_close(); ?>

  </body>
</html>