<!-- <center> -->
<h2>Laporan Keuangan </h2>
<br>
<table>
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal</th>
      <th scope="col">No Meja</th>
      <th scope="col">User</th>
      <th scope="col">Total Bayar</th>
      

    </tr>
  </thead>
  <tbody>
    <?php $hasil=0 ; $no=1; foreach($laporan as $key) { ?>
    <tr>
      <th scope="row"><?php echo $no++; ?></th>
      <td><?php echo $key->tanggal; ?></td>
      <td><?php echo "Meja  ".$key->no_meja."" ?></td>
      <td><?php echo $key->nama_user; ?></td>
      <td>Rp.<?php echo $key->total_bayar; ?></td>
      <?php $hasil =  $hasil+ $key->total_bayar;?>
    </tr>    
    <?php } ?>
    <tfoot>
      <tr>
        <td colspan="4" style="border:none;">
          <h3 style="float: right; margin-right: 50px;">Total :</h3>
        </td>
        <td colspan="1">
          <br>
          <h3>Rp.<?php echo $hasil; ?></h3>
        </td>
      </tr>
    </tfoot>
    
  </tbody>
</table>
<!-- </center> -->
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 2px;
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

