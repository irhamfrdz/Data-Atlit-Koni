<?php 
    include '../../config/database.php';
    $id_kendaraan=addslashes(trim($_POST['id_kendaraan']));
    $sql="select * from inventaris_kendaraan where id_kendaraan='$id_kendaraan' limit 1";
    $hasil=mysqli_query($kon,$sql);
    $data = mysqli_fetch_array($hasil); 
?>
<form id="form_edit">

    <div class="form-group">
        <input type="hidden" class="form-control" name="id_kendaraan" value="<?php echo $data['id_kendaraan'];?>" id="id_kendaraan" placeholder="Masukan ID Kendaraan">
    </div>

    <div class="form-group">
        <label>Kode Kendaraan:</label>
        <input type="text" class="form-control" name="kode_kendaraan" id="kode_kendaraan" value="<?php echo $data['kode_kendaraan'];?>" placeholder="Masukan Kode Kendaraan " disabled>
    </div>

    <div class="form-group">
        <span id="alert"></span>
    </div>

    <div class="form-group">
        <label>Identitas Kendaraan:</label>
        <input type="text" class="form-control" name="identitas_kendaraan" id="identitas_kendaraan" value="<?php echo $data['identitas_kendaraan'];?>" placeholder="Masukan Identitas Kendaraan "required>
    </div>

    <div class="form-group">
        <label>Merk Kendaraan:</label>
        <input type="text" class="form-control" name="merk_kendaraan" id="merk_kendaraan" value="<?php echo $data['merk_kendaraan'];?>" placeholder="Masukan Merk Kendaraan"required>
    </div>

    <div class="form-group">
        <label>Tahun Kendaraan:</label>
        <input type="text" class="form-control" name="tahun" id="tahun" value="<?php echo $data['tahun'];?>" placeholder="Masukan Tahun Kendaraan "required>
    </div>

    <div class="form-group">
        <label>Spesifikasi Kendaraan Kendaraan:</label>
        <input type="text" class="form-control" name="spesifikasi_kendaraan" id="spesifikasi_kendaraan" value="<?php echo $data['spesifikasi_kendaraan'];?>" placeholder="Masukan Spesifikasi Kendaraan"required>
    </div>

    <div class="form-group">
        <label>Penanggung jawab Kendaraan:</label>
        <input type="text" class="form-control" name="penanggung_jawab" id="penanggung_jawab" value="<?php echo $data['penanggung_jawab'];?>" placeholder="Masukan Penanggung Jawab Kendaraan"required>
    </div>

    <div class="form-group">
        <label>Banyaknya Kendaraan:</label>
        <input type="text" class="form-control" name="banyaknya" id="banyaknya" value="<?php echo $data['banyaknya'];?>" placeholder="Masukan Banyaknya Kendaraan "required>
    </div>

    <div class="form-group">
        <label>Pengadaan Kendaraan:</label>
        <input type="text" class="form-control" name="pengadaan" id="pengadaan" value="<?php echo $data['pengadaan'];?>" placeholder="Masukan Pengadaan Kendaraan"required>
    </div>
    
    <div class="form-group">
        <label>Keterangan:</label>
        <select class="form-control" id="keterangan" name="keterangan"required>
            <option>Baik</option>
            <option>Sedang</option>
            <option>Rusak</option>
        </select>
    </div>
</form>

<button class="btn btn-primary btn-fill btn-wd" id="submit2"  data-dismiss="modal" >Submit</button>

<script>
    $('#kode_kendaraan').bind('keyup', function () {
        var kode_supplier=$("#kode_kendaraan").val();
        $.ajax({
          url: 'pages/inventaris-kendaraan/ajax/cek-kode.php',
          method: 'POST',
          data:{kode_kendaraan:kode_kendaraan},
          success:function(data){
            $("#alert").html(data);
          }
      }); 
    });
</script>

<script>
    $('#submit2').click(function(){
        var form = $('#form_edit')[0];
        var data = new FormData(form);
        $.ajax({
            type	: 'POST',
            url: 'pages/inventaris-kendaraan/ajax/edit.php',
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            success	: function(data){
                console.log(data);
                tabel_inventaris_kendaraan();
            }
        });
    });
</script>

