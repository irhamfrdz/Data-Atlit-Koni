<form id="form_tambah">

    <div class="form-group">
        <label>Kode:</label>
        <input type="text" class="form-control" name="kode_barang" id="kode_barang" placeholder="Masukan Kode Atlit">
    </div>

    <div class="form-group">
        <span id="alert"></span>
    </div>

    <div class="form-group">
        <label>Nama Atlit:</label>
        <input type="text" class="form-control" name="nama_barang" placeholder="Masukan Nama Atlit">
    </div>

    <div class="form-group">
        <label>Cabang Olahraga:</label>
        <select class="form-control" name="kategori">
            <?php
            include '../../config/database.php';
            $sql="select * from kategori order by id_kategori asc";
            $hasil=mysqli_query($kon,$sql);
            while ($data = mysqli_fetch_array($hasil)):
            ?>
            <option value="<?php echo $data['id_kategori']; ?>"><?php echo $data['nama_kategori']; ?></option>
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
        <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Masukan Nomor Handphone">
    </div>

    <div class="form-group">
        <label>Nomor/Kelas Pertandingan:</label>
        <input type="text" class="form-control" id="nomor_kelas_pertandingan" name="nomor_kelas_pertandingan" placeholder="Masukan Nomor/Kelas Pertandingan">
    </div>

    <div class="form-group">
        <label>Asal Daerah Binaan:</label>
        <input type="text" class="form-control" id="asal_daerah" name="asal_daerah" placeholder="Masukan Asal Daerah Binaan">
    </div>

    <div class="form-group">
        <label>Tinggi Badan:</label>
        <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan" placeholder="Masukan Tinggi Badan">
    </div>

    <div class="form-group">
        <label>Berat badan:</label>
        <input type="text" class="form-control" id="berat_badan" name="berat_badan" placeholder="Masukan Berat Badan">
    </div>

    <div class="form-group">
        <label>Golongan Darah:</label>
        <input type="text" class="form-control" id="gol_darah" name="gol_darah" placeholder="Masukan Asal Daerah Binaan">
    </div>

    <div class="form-group">
        <label>Pekerjaan:</label>
        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Masukan Pekerjaan">
    </div>

    <div class="form-group">
        <label>Pendidikan Terakhir:</label>
        <input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="Masukan Pendidikan Terakhir">
    </div>

    <div class="form-group">
        <label>Email:</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Alamat Email">
    </div>

    <div class="form-group">
        <label>Tahun Kejuaraan:</label>
        <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Masukan Tahun Kejuaraan">
    </div>

</form>

<button class="btn btn-primary btn-fill btn-wd" id="submit"  data-dismiss="modal" >Submit</button>


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
        var form = $('#form_tambah')[0];
        var data = new FormData(form);
        $.ajax({
            type	: 'POST',
            enctype: 'multipart/form-data',
            url: 'pages/barang/ajax/tambah.php',
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

