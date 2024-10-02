<div class="table-responsive">
<table class="table table-bordered table-striped" id="tabel_anggota" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>No</th>
            <th>ID Atlit</th>
            <th>Nama Atlit</th>
            <th>Jenis Kelamin</th>
            <th>No HP</th>
            <th>Cabang Olahraga</th>
            <th>Tempat Tanggal Lahir</th>
            <th>NIK</th>
            <th>Kartu Keluarga</th>
            <th>Alamat</th>
            <th>Prestasi</th>
            <th width="13%">Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php
            //Koneksi database
            include '../../config/database.php';
            //perintah sql untuk menampilkan daftar barang
            $sql="select * from atlit order by id_atlit desc";
            $hasil=mysqli_query($kon,$sql);
            $no=0;
            //Menampilkan data dengan perulangan while
            while ($data = mysqli_fetch_array($hasil)):
            $no++;
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['id_atlit']; ?></td>
            <td><?php echo $data['nama_atlit']; ?></td>
            <td><?php echo $data['jenis_kelamin']; ?></td>
            <td><?php echo $data['no_hp']; ?></td>
            <td><?php echo $data['cabang_olahraga']; ?></td>
            <td><?php echo $data['ttl']; ?></td>
            <td><?php echo $data['nik']; ?></td>
            <td><?php echo $data['kartu_keluarga']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['prestasi']; ?></td>
            <td>
            <button class="tombol_edit btn btn-warning btn-circle" id_atlit="<?php echo $data['id_atlit']; ?>"data-toggle="tooltip" title="Edit Kategori" data-placement="top"><i class="fa fa-edit"></i></button>
            <button class="tombol_hapus btn btn-danger btn-circle" nama_atlit="<?php echo $data['nama_atlit']; ?>" id_atlit="<?php echo $data['id_atlit']; ?>" data-toggle="tooltip" title="Hapus Atlit" data-placement="top" ><i class="fa fa-trash"></i></button>
        </tr>
        <!-- bagian akhir (penutup) while -->
        <?php endwhile; ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#tabel_anggota').DataTable( {
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
    var id_atlit = $(this).attr("id_atlit");
    $.ajax({
        url: 'pages/anggota-atlit/edit.php',
        method: 'post',
        data: {id_atlit:id_atlit},
        success:function(data){
            $('#tampil_data').html(data);  
                document.getElementById("judul").innerHTML='Edit atlit';
        }
    });
    // Membuka modal
    $('#modal').modal('show');
});


$('.tombol_hapus').on('click',function(){
    var nama_atlit = $(this).attr("nama_atlit");
    var agree=confirm("Apakah Anda yakin ingin menghapus "+nama_atlit+" ?");
    if (!agree){
        return false;
    } else {
        var id_atlit = $(this).attr("id_atlit");
        $.ajax({
            url: 'pages/anggota-atlit/ajax/hapus.php',
            method: 'post',
            data: {id_atlit:id_atlit},
            success:function(data){
                tabel_anggota();
            }
        });
    }
});

</script>