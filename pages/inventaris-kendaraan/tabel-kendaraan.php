<div class="table-responsive">
    <table class="table table-bordered table-striped" id="tabel_inventaris_kendaraan" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode Kendaraan</th>
            <th>Identitas Kendaraan</th>
            <th>Merk Kendaraan</th>
            <th>Tahun</th>
            <th>Spesifikasi Kendaraan</th>
            <th>Penanggung Jawab</th>
            <th>Banyaknya</th>
            <th>Pengadaan</th>
            <th>Keterangan</th>
            <th>foto</th>
            <th width="13%">Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php
            //Koneksi database
            include '../../config/database.php';
            //perintah sql untuk menampilkan daftar barang
            $sql="select * from inventaris_kendaraan order by id_kendaraan desc";
            $hasil=mysqli_query($kon,$sql);
            $no=0;
            //Menampilkan data dengan perulangan while
            while ($data = mysqli_fetch_array($hasil)):
            $no++;
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['kode_kendaraan']; ?></td>
            <td><?php echo $data['identitas_kendaraan']; ?></td>
            <td><?php echo $data['merk_kendaraan']; ?></td>
            <td><?php echo $data['tahun']; ?></td>
            <td><?php echo $data['spesifikasi_kendaraan']; ?></td>
            <td><?php echo $data['penanggung_jawab']; ?></td>
            <td><?php echo $data['banyaknya']; ?></td>
            <td><?php echo $data['pengadaan']; ?></td>
            <td><?php echo $data['keterangan']; ?></td>
            <td align="center">
				<img src="pages/inventaris-kendaraan/foto/<?php echo $data['foto']; ?>" width="70px" />
			</td>


            <td>
            <button class="tombol_edit btn btn-warning btn-circle" id_kendaraan="<?php echo $data['id_kendaraan']; ?>" kode_kendaraan="<?php echo $data['kode_kendaraan']; ?>" data-toggle="tooltip" title="Edit Kendaraan" data-placement="top"><i class="fa fa-edit"></i></button>
            <button class="tombol_hapus btn btn-danger btn-circle" identitas_kendaraan="<?php echo $data['identitas_kendaraan']; ?>" id="<?php echo $data['id_kendaraan']; ?>"><i class="fa fa-trash"></i></button>
            </td>
        </tr>
        <!-- bagian akhir (penutup) while -->
        <?php endwhile; ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#tabel_inventaris_kendaraan').DataTable( {
            "searching": true,
            "paging":   true,
            "ordering": true,
            "info":     true,
            dom: 'Bfrtip',
            buttons: ['excel','print','copy']
        });
    });
</script>

<script>

$('.tombol_edit').on('click',function(){
    var id_kendaraan = $(this).attr("id_kendaraan");
    $.ajax({
        url: 'pages/inventaris-kendaraan/edit.php',
        method: 'post',
        data: {id_kendaraan:id_kendaraan},
        success:function(data){
            $('#tampil_data').html(data);  
                document.getElementById("judul").innerHTML='Edit Kendaraan';
        }
    });
    // Membuka modal
    $('#modal').modal('show');
});


$('.tombol_hapus').on('click',function(){
    var identitas_kendaraan = $(this).attr("identitas_kendaraan");
    var agree=confirm("Adakah Anda yakin ingin menghapus kendaraan "+identitas_kendaraan+"?");
    if (!agree){
        return false;
    } else {
        var identitas_kendaraan = $(this).attr("identitas_kendaraan");
        $.ajax({
            url: 'pages/inventaris-kendaraan/ajax/hapus.php',
            method: 'post',
            data: {id_kendaraan:id_kendaraan},
            success:function(data){
                tabel_inventaris_kendaraan();
            }
        });
    }
});

</script>