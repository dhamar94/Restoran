<!-- <center> -->
<h2>Menu Makanan </h2>
<br>
  <table class="table">
      <tr>
          <th>No</th>
          <th>Gambar</th>
          <th>Nama</th>
          <th>Kategori</th>
          <th>Harga</th>
      </tr>
  <?php $no=1; $base_url="http://localhost/Ujikom-Ypc/"; foreach ($makanan as $key ) { ?>
      <tr>
          <td><?php echo $no++; ?></td>
          <td><img width="100" height="100" src="http://localhost/Ujikom-Ypc/assets/image/<?php echo $key->gambar; ?>"></td>
          <td><?php echo $key->nama_referensi; ?></td>
          <td><?php echo $key->kategori; ?></td>
          <td><?php echo $key->harga; ?></td>
      </tr>
  <?php }?>
  </table>
<!-- </center> -->
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
</style>

<script type="text/javascript">
  myFunction();
  function myFunction() {
  window.print();
}
    
</script>

