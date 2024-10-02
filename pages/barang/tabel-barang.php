<div class="table-responsive">
    <table class="table table-bordered table-striped" id="tabel_barang" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Atlit</th>
            <th>Cabang Olahraga</th>
            <th>Jenis Kelamin</th>
            <th>No Handphone</th>
            <th>Nomor/Kelas Pertandingan</th>
            <th>Asal Daerah Binaan</th>
            <th>Tinggi Badan</th>
            <th>Berat Badan</th>
            <th>Gol Darah</th>
            <th>Pekerjaan</th>
            <th>Pendidikan Terakhir</th>
            <th>Alamat email</th>
            <th>Tahun Kejuaraan</th>
            <th width="13%">Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php
            //Koneksi database
            include '../../config/database.php';
            //perintah sql untuk menampilkan daftar barang
            $sql="select * from barang b left join kategori k on k.id_kategori=b.kategori_barang order by b.id_barang desc";
            $hasil=mysqli_query($kon,$sql);
            $no=0;
            //Menampilkan data dengan perulangan while
            while ($data = mysqli_fetch_array($hasil)):
            $no++;
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['kode_barang']; ?></td>
            <td><?php echo $data['nama_barang']; ?></td>
            <td><?php echo $data['nama_kategori']; ?></td>
            <td><?php echo $data['jenis_kelamin']; ?></td>
            <td><?php echo $data['no_hp']; ?></td>
            <td><?php echo $data['nomor_kelas_pertandingan']; ?></td>
            <td><?php echo $data['asal_daerah']; ?></td>
            <td><?php echo $data['tinggi_badan']; ?></td>
            <td><?php echo $data['berat_badan']; ?></td>
            <td><?php echo $data['gol_darah']; ?></td>
            <td><?php echo $data['pekerjaan']; ?></td>
            <td><?php echo $data['pendidikan']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['tahun']; ?></td>

            <td>
                <button class="tombol_edit btn btn-warning btn-circle" id_barang="<?php echo $data['id_barang']; ?>" kode_barang="<?php echo $data['kode_barang']; ?>" data-toggle="tooltip" title="Edit barang" data-placement="top"><i class="fa fa-edit"></i></button>
                <button class="tombol_hapus btn btn-danger btn-circle" nama_barang="<?php echo $data['nama_barang']; ?>" id_barang="<?php echo $data['id_barang']; ?>" kode_barang="<?php echo $data['kode_barang'];?>" ><i class="fa fa-trash"></i></button>
            </td>
        </tr>
        <!-- bagian akhir (penutup) while -->
        <?php endwhile; ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#tabel_barang').DataTable( {
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
    var id_barang = $(this).attr("id_barang");
    $.ajax({
        url: 'pages/barang/edit.php',
        method: 'post',
        data: {id_barang:id_barang},
        success:function(data){
            $('#tampil_data').html(data);  
                document.getElementById("judul").innerHTML='Edit barang';
        }
    });
    // Membuka modal
    $('#modal').modal('show');
});


$('.tombol_hapus').on('click',function(){
    var nama_barang = $(this).attr("nama_barang");
    var agree=confirm("Apakah Anda yakin ingin menghapus "+nama_barang+" ?");
    if (!agree){
        return false;
    } else {
        var id_barang = $(this).attr("id_barang");
        $.ajax({
            url: 'pages/barang/ajax/hapus.php',
            method: 'post',
            data: {id_barang:id_barang},
            success:function(data){
                tabel_barang();
            }
        });
    }
});

</script>