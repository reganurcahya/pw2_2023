<?php 
require_once 'dbkoneksi.php';
?>
        
        
<?php
if (isset($_GET['idedit']))
{
  $idedit = $_GET['idedit'];
  $sql = "SELECT * FROM produk where id = $idedit";

  $st = $dbh->prepare($sql);
  $st->execute();
  $row = $st->fetch();
}
else{
  $row = [];
}
?>

<form method="POST" action="proses_produk.php">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="kode" name="kode" type="text" class="form-control"
        value="<?php if (isset($row['kode'])) echo $row['kode'];?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Produk</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control" 
        value="<?php if (isset($row['nama'])) echo $row['nama'];?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div> 
        <input id="harga_beli" name="harga_beli" 
        value="<?php if (isset($row['harga_beli'])) echo $row['harga_beli'];?>" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Stok</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="stok" name="stok" value="<?php if (isset($row['stok'])) echo $row['stok'];?>"
        type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="min_stok" class="col-4 col-form-label">Minimum Stok</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-right"></i>
          </div>
        </div> 
        <input id="min_stok" name="min_stok" 
        value="<?php if (isset($row['min_stok'])) echo $row['min_stok'];?>"
        type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis" class="col-4 col-form-label">Jenis Produk</label> 
    <div class="col-8">
        <?php 
            $sqljenis = "SELECT * FROM jenis_produk";
            $rsjenis = $dbh->query($sqljenis);
        ?>
      <select id="jenis" name="jenis" class="custom-select">
          <?php 
            foreach($rsjenis as $rowjenis){
         ?>
            <option 
              value="<?=$rowjenis['id']?>" 
              <?php 
              if(isset($row['jenis_produk_id'])){
              if ($rowjenis["id"] == $row['jenis_produk_id']) echo "selected";
              }?> 
            > 
              <?=$rowjenis['nama']?>
            </option>
         <?php
            }
        ?>
        <!--
        <option value="1">Elektronik</option>
        <option value="2">Furniture</option>
        <option value="3">Makanan</option>-->

      </select>
    </div>
  </div> 
  <div class="form-group row">
    <?php
    if (isset($idedit)) {
      $btn = "Update";
    } else{
      $btn = "Simpan";
    }
    ?>

    <button name="proses" value="<?=$btn?>">
      <?=$btn?>
    </button>

    <input type="hidden" name="idedit" value="<?=$idedit?>">
  </div>
</form>
