<form id="form_tambah">

    <div class="form-group">
        <label>ID Barang:</label>
        <input name="id" type="text" class="form-control" placeholder="Masukan ID Barang" required>
    </div>

    <div class="form-group">
        <label>Lokasi Barang:</label>
        <input name="lokasi" type="text" class="form-control" placeholder="Masukan Lokasi Barang" required>
    </div>

    <div class="form-group">
        <label>Nama Barang:</label>
        <input name="nama_barang" type="text" class="form-control" placeholder="Masukan Nama Barang" required>
    </div>

    <div class="form-group">
        <label>Nama Merk atau Spesifikasi:</label>
        <input name="merk_spesifikasi" type="text" class="form-control" placeholder="Masukan Merk atau Spesifikasi Barang" required>
    </div>

    <div class="form-group">
        <label>Banyaknya:</label>
        <input name="banyaknya" type="text" class="form-control" placeholder="Masukan Banyaknya Barang" required>
    </div>

    <div class="form-group">
        <label>Pengadaan:</label>
        <input name="pengadaan" type="text" class="form-control" placeholder="Masukan Pengadaan Barang" required>
    </div>

    <div class="form-group">
        <label>Keterangan Barang:</label>
        <select class="form-control" id="keterangan" name="keterangan">
            <option>Baik</option>
            <option>Sedang</option>
            <option>Rusak</option>
        </select>
    </div>

    <div class="form-group">
        <div id="msg"></div>
        <label>Pas Foto:</label>
        <input type="file" name="foto" id="foto">
            <div class="input-group my-3">
                <div class="input-group-append">
                    <button type="button" id="pilih_foto_barang" class="browse btn btn-light">Pilih</button>
                </div>
            </div>
        <img src="" id="preview_foto_barang" class="img-thumbnail">
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

    $('#preview_foto_barang').hide();
    $(document).on("click", "#pilih_foto_barang", function() {
    var file = $(this).parents().find("#foto");
    file.trigger("click");
    });
    $('#foto').change(function(e) {

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
    $('#submit').click(function(){
        var form = $('#form_tambah')[0];
        var data = new FormData(form);
        $.ajax({
            type	: 'POST',
            url: 'pages/stok/ajax/tambah.php',
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

