<?php 
    include '../../config/database.php';
    $id_barang=addslashes(trim($_POST['id_barang']));
    $sql="select * from barang where id_barang='$id_barang' limit 1";
    $hasil=mysqli_query($kon,$sql);
    $data = mysqli_fetch_array($hasil); 
?>
<form id="form_edit">

    <div class="form-group">
        <input type="hidden" class="form-control" name="id_barang" value="<?php echo $data['id_barang'];?>" id="id_barang">
    </div>

    <div class="form-group">
        <label>Kode:</label>
        <input type="text" class="form-control" name="kode_barang" value="<?php echo $data['kode_barang'];?>" id="kode_barang" placeholder="Masukan Kode Barang" disabled>
    </div>

    <div class="form-group">
        <span id="alert"></span>
    </div>

    <div class="form-group">
        <label>Nama Atlit:</label>
        <input type="text" class="form-control" name="nama_barang" value="<?php echo $data['nama_barang'];?>" placeholder="Masukan Nama Barang">
    </div>

    <div class="form-group">
        <label>Cabang Olahraga:</label>
        <select class="form-control" name="kategori">
            <option value="0">Pilih</option>
            <?php
            include '../../config/database.php';
            $sql="select * from kategori order by id_kategori asc";
            $hasil=mysqli_query($kon,$sql);
            while ($row = mysqli_fetch_array($hasil)):
            ?>
            <option <?php if ($data['kategori_barang']==$row['id_kategori']) echo 'selected';?> value="<?php echo $row['id_kategori']; ?>"><?php echo $row['nama_kategori']; ?></option>
            <?php endwhile; ?>
        </select>
    </div>

    <div class="form-group">
        <label>Jenis Kelamin:</label>
        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
            <option>Laki Laki</option>
            <option>Perempuan</option>
        </select>
    </div>

    <div class="form-group">
        <label>Nomor Handphone:</label>
        <input type="number" class="form-control" id="no_hp" name="no_hp" value="<?php echo $data['no_hp'];?>" placeholder="Masukan Nomor Handphone">
    </div>

    <div class="form-group">
        <label>Nomor/Kelas Pertandingan:</label>
        <input type="text" class="form-control" id="nomor_kelas_pertandingan" name="nomor_kelas_pertandingan" value="<?php echo $data['nomor_kelas_pertandingan'];?>" placeholder="Masukan Nomor Atau Kelas Pertandingan">
    </div>

    <div class="form-group">
        <label>Asal Daerah Binaan:</label>
        <input type="text" class="form-control" id="asal_daerah" name="asal_daerah" value="<?php echo $data['asal_daerah'];?>" placeholder="Masukan Asal Daerah Binaan">
    </div>

    <div class="form-group">
        <label>Tinggi Badan:</label>
        <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan" value="<?php echo $data['tinggi_badan'];?>" placeholder="Masukan Tinggi Badan">
    </div>

    <div class="form-group">
        <label>Berat Badan:</label>
        <input type="text" class="form-control" id="berat_badan" name="berat_badan" value="<?php echo $data['berat_badan'];?>" placeholder="Masukan Berat Badan">
    </div>

    <div class="form-group">
        <label>Golongan Darah:</label>
        <input type="text" class="form-control" id="gol_darah" name="gol_darah" value="<?php echo $data['gol_darah'];?>" placeholder="Masukan Golongan Darah">
    </div>

    <div class="form-group">
        <label>Pekerjaan:</label>
        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?php echo $data['pekerjaan'];?>" placeholder="Masukan Pekerjaan">
    </div>

    <div class="form-group">
        <label>Pendidikan Terakhir:</label>
        <input type="text" class="form-control" id="pendidikan" name="pendidikan" value="<?php echo $data['pendidikan'];?>" placeholder="Masukan Pendidikan Terakhir">
    </div>

    <div class="form-group">
        <label>Email:</label>
        <input type="text" class="form-control" id="email" name="email" value="<?php echo $data['email'];?>" placeholder="Masukan Alamat Email">
    </div>

    <div class="form-group">
        <label>Tahun Kejuaraan:</label>
        <input type="text" class="form-control" id="tahun" name="tahun" value="<?php echo $data['tahun'];?>" placeholder="Masukan Tahun Kejuaraan">
    </div>

    <div class="form-group">
        <div id="msg"></div>
        <label>Pas Foto:</label>
        <input type="file" name="foto_barang" id="foto_barang">
            <div class="input-group my-3">
                <div class="input-group-append">
                    <button type="button" id="pilih_foto_barang" class="browse btn btn-light">Pilih</button>
                </div>
            </div>
        <img src="pages/barang/foto/<?php echo $data['foto_barang']; ?>" id="preview_foto_barang" class="img-thumbnail">
    </div>

    <div class="form-group">
        <input type="hidden" class="form-control" name="foto_lama" value="<?php echo $data['foto_barang'];?>">
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


    $(document).on("click", "#pilih_foto_barang", function() {
    var file = $(this).parents().find("#foto_barang");
    file.trigger("click");
    });
    $('#foto_barang').change(function(e) {

    var reader = new FileReader();
    reader.onload = function(e) {
        $('#preview_foto_barang').show();
        // get loaded data and render thumbnail.
        document.getElementById("preview_foto_barang").src = e.target.result;
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
    });
</script>

<script>
    $('#kode_barang').bind('keyup', function () {
        var kode_barang=$("#kode_barang").val();
        $.ajax({
          url: 'pages/barang/ajax/cek-kode.php',
          method: 'POST',
          data:{kode_barang:kode_barang},
          success:function(data){
            $("#alert").html(data);
          }
      }); 
    });
</script>

<script>
    $('#submit').click(function(){
        var form = $('#form_edit')[0];
        var data = new FormData(form);
        $.ajax({
            type	: 'POST',
            enctype: 'multipart/form-data',
            url: 'pages/barang/ajax/edit.php',
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            success	: function(data){
                tabel_barang();
            }
        });
    });
</script>

