<form id="form_tambah">
    <div class="form-group">
        <label>Kode:</label>
        <input type="text" class="form-control" name="id_atlit" id="id_atlit" placeholder="Masukan ID Atlit">
    </div>

    <div class="form-group">
        <span id="alert"></span>
    </div>

    <div class="form-group">
        <label>Nama Atlit:</label>
        <input type="text" class="form-control" name="nama_atlit" placeholder="Masukan Nama Atlit">
    </div>

    <div class="form-group">
        <label>Jenis Kelamin:</label>
        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
            <option>Laki Laki</option>
            <option>Perempuan</option>
        </select>
    </div>

    <div class="form-group">
        <label>No HP:</label>
        <input type="text" class="form-control" name="no_hp" placeholder="Masukan Nomor Handphone">
    </div>

    <div class="form-group">
        <label>Cabang Olahraga:</label>
        <input type="text" class="form-control" name="cabang_olahraga" placeholder="Masukan Cabang Olahraga">
    </div>

    <div class="form-group">
        <label>Tempat Tanggal Lahir:</label>
        <input type="text" class="form-control" name="ttl" placeholder="Masukan Tempat Tanggal Lahir">
    </div>
    
    <div class="form-group">
        <label>NIK:</label>
        <input type="text" class="form-control" name="nik" placeholder="Masukan Nomor Induk Keluarga">
    </div>

    <div class="form-group">
        <label>Nomor Kartu Keluarga:</label>
        <input type="text" class="form-control" name="kartu_keluarga" placeholder="Masukan Nomor Kartu Keluarga">
    </div>

    <div class="form-group">
        <label>Alamat:</label>
        <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat ">
    </div>

    <div class="form-group">
        <label>Prestasi:</label>
        <input type="text" class="form-control" name="prestasi" placeholder="Masukan Prestasi ">
    </div>
</form>
<button class="btn btn-primary btn-fill btn-wd" id="submit"  data-dismiss="modal" >Submit</button>

<script>
    $('#submit').click(function(){
        var form = $('#form_tambah')[0];
        var data = new FormData(form);
        $.ajax({
            type	: 'POST',
            url: 'pages/anggota-atlit/ajax/tambah.php',
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            success	: function(data){
                tabel_anggota();
            }
        });
    });
</script>

