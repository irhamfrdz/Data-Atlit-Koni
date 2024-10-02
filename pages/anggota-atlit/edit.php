<?php 
    include '../../config/database.php';
    $id_atlit=addslashes(trim($_POST['id_atlit']));
    $sql="select * from atlit where id_atlit='$id_atlit' limit 1";
    $hasil=mysqli_query($kon,$sql);
    $data = mysqli_fetch_array($hasil); 
?>
<form id="form_edit">

    <div class="form-group">
        <input type="text" class="form-control" name="id_atlit" value="<?php echo $data['id_atlit'];?>" id="id_barang" disabled>
    </div>

    <div class="form-group">
        <span id="alert"></span>
    </div>

    <div class="form-group">
        <label>Nama Atlit:</label>
        <input type="text" class="form-control" name="nama_atlit" value="<?php echo $data['nama_atlit'];?>" placeholder="Masukan Nama Atlit">
    </div>

    <div class="form-group">
        <label>Jenis Kelamin:</label>
        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
            <option>Laki Laki</option>
            <option>Perempuan</option>
        </select>
    </div>

    <div class="form-group">
        <label>No Hp:</label>
        <input type="text" class="form-control" name="no_hp" value="<?php echo $data['no_hp'];?>" placeholder="Masukan Nomor Handphone">
    </div>

    <div class="form-group">
        <label>Cabang Olahraga:</label>
        <input type="text" class="form-control" name="cabang_olahraga" value="<?php echo $data['cabang_olahraga'];?>" placeholder="Masukan Cabang Olahraga">
    </div>

    <div class="form-group">
        <label>Tempat Tanggal Lahir:</label>
        <input type="text" class="form-control" name="ttl" value="<?php echo $data['ttl'];?>" placeholder="Masukan Tempat Tanggal lahir">
    </div>

    <div class="form-group">
        <label>NIK:</label>
        <input type="text" class="form-control" name="nik" value="<?php echo $data['nik'];?>" placeholder="Masukan Nomor Induk Keluarga">
    </div>

    <div class="form-group">
        <label>Nomor Kartu Keluarga:</label>
        <input type="text" class="form-control" name="kartu_keluarga" value="<?php echo $data['kartu_keluarga'];?>" placeholder="Masukan Nomor Kartu Keluarga">
    </div>

    <div class="form-group">
        <label>Alamat:</label>
        <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat'];?>" placeholder="Masukan Alamat Atlit">
    </div>

    <div class="form-group">
        <label>Prestasi:</label>
        <input type="text" class="form-control" name="prestasi" value="<?php echo $data['prestasi'];?>" placeholder="Masukan Prestasi">
    </div>

</form>

<button class="btn btn-primary btn-fill btn-wd" id="submit4"  data-dismiss="modal" >Submit</button>


<script>
    $('#submit4').click(function(){
        var form = $('#form_edit')[0];
        var data = new FormData(form);
        $.ajax({
            type	: 'POST',
            url: 'pages/anggota-atlit/ajax/edit.php',
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            success	: function(data){
                console.log(data);
                tabel_atlit();
            }
        });
    });
</script>

