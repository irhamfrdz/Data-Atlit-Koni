<?php 
    include '../../config/database.php';
    $id=addslashes(trim($_POST['id']));
    $sql="select * from inventaris_barang b where b.id='$id' limit 1";
    $hasil=mysqli_query($kon,$sql);
    $data = mysqli_fetch_array($hasil); 
?>
<form id="form_edit">

    <div class="form-group">
        <label>ID Barang:</label>
        <input type="text" class="form-control" name="id" value="<?php echo $data['id'];?>" id="kode_barang" placeholder="Masukan ID Barang" disabled>
    </div>

    <div class="form-group">
        <span id="alert"></span>
    </div>

    <div class="form-group">
        <label>Lokasi Barang:</label>
        <input type="text" class="form-control" name="lokasi" value="<?php echo $data['lokasi'];?>" placeholder="Masukan Lokasi Barang">
    </div>
    
    <div class="form-group">
        <label>Nama Barang:</label>
        <input type="text" class="form-control" name="nama_barang" value="<?php echo $data['nama_barang'];?>" placeholder="Masukan Nama Barang">
    </div>

    <div class="form-group">
        <label>Merk Atau Spesifikasi Barang:</label>
        <input type="text" class="form-control" name="merk_spesifikasi" value="<?php echo $data['merk_spesifikasi'];?>" placeholder="Masukan Merk Atau Spesifikasi Barang">
    </div>

    <div class="form-group">
        <label>Banyaknya Barang:</label>
        <input type="text" class="form-control" name="banyaknya" value="<?php echo $data['banyaknya'];?>" placeholder="Masukan Banyaknya Barang">
    </div>

    <div class="form-group">
        <label>Pengadaan Barang:</label>
        <input type="text" class="form-control" name="pengadaan" value="<?php echo $data['pengadaan'];?>" placeholder="Masukan Pengadaaan Barang">
    </div>

    <div class="form-group">
        <label>Lokasi Barang:</label>
        <input type="text" class="form-control" name="lokasi" value="<?php echo $data['lokasi'];?>" placeholder="Masukan Lokasi Barang">
    </div>

    <div class="form-group">
        <label>Keterangan:</label>
        <select class="form-control" id="keterangan" name="keterangan">
            <option>Baik</option>
            <option>Sedang</option>
            <option>Rusak</option>
        </select>
    </div>
</form>

<button class="btn btn-primary btn-fill btn-wd" id="submit"  data-dismiss="modal" >Submit</button>
<style>
    .file {
    visibility: hidden;
    position: absolute;
    }
    #file {
    visibility: hidden;
    position: absolute;
    }
</style>
<script>
    $('#submit').click(function(){
        var form = $('#form_edit')[0];
        var data = new FormData(form);
        $.ajax({
            type	: 'POST',
            enctype: 'multipart/form-data',
            url: 'pages/stok/ajax/edit.php',
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            success	: function(data){
                tabel_inventaris();
            }
        });
    });
</script>

