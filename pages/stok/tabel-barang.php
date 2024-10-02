<div class="table-responsive">
    <table class="table table-bordered table-striped" id="tabel_inventaris" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>No</th>
            <th>Id Barang</th>
            <th>Lokasi Barang</th>
            <th>Nama Barang</th>
            <th>Merk/Spesifikasi</th>
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
            $sql="select * from inventaris_barang order by id desc";
            $hasil=mysqli_query($kon,$sql);
            $no=0;
            //Menampilkan data dengan perulangan while
            while ($data = mysqli_fetch_array($hasil)):
            $no++;
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['lokasi']; ?></td>
            <td><?php echo $data['nama_barang']; ?></td>
            <td><?php echo $data['merk_spesifikasi']; ?></td>
            <td><?php echo $data['banyaknya']; ?></td>
            <td><?php echo $data['pengadaan']; ?></td>
            <td><?php echo $data['keterangan']; ?></td>
            <td align="center">
				<img src="pages/stok/foto/<?php echo $data['foto']; ?>" width="70px" />
			</td>

            <td>
                <button class="tombol_edit btn btn-warning btn-circle" id="<?php echo $data['id']; ?>" data-toggle="tooltip" title="Edit barang" data-placement="top"><i class="fa fa-edit"></i></button>
                <button class="tombol_hapus btn btn-danger btn-circle" nama_barang="<?php echo $data['nama_barang']; ?>" id="<?php echo $data['id']; ?>"><i class="fa fa-trash"></i></button>
            </td>
        </tr>
        <!-- bagian akhir (penutup) while -->
        <?php endwhile; ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#tabel_inventaris').DataTable( {
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
    var id = $(this).attr("id");
    $.ajax({
        url: 'pages/stok/edit.php',
        method: 'post',
        data: {id:id},
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
        var id = $(this).attr("id");
        $.ajax({
            url: 'pages/stok/ajax/hapus.php',
            method: 'post',
            data: {id:id},
            success:function(data){
                tabel_inventaris();
            }
        });
    }
});

</script>