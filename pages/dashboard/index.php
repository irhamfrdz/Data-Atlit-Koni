<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    Dashboard
    <small>Version 2.0</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">Dashboard</li>
    </ol>
</section>

<?php
	$sql = $kon->query("SELECT count(id_barang) as putra from barang ");
	while ($data= $sql->fetch_assoc()) {
	
		$putra=$data['putra'];
	}
?>


<?php
	$sql = $kon->query("SELECT count(id_atlit) as putri from atlit");
	while ($data= $sql->fetch_assoc()) {
	
		$putri=$data['putri'];
	}
?>

<section class="content">
<div class="row">
<div class="info-box">
<div class="col-md-4 col-sm-6 col-xs-12">
<span class="info-box-icon bg-aqua"><i class="fa fa-archive"></i></span>
<div class="info-box-content">
            <span class="info-box-text">Total Anggota Atlit</span>
            <span class="info-box-number"><?php echo $putra?>Atlit</span>
            <span class="info-box-text">Admin Yang Sudah Terdaftar</span>
            <span class="info-box-number"><?php echo $putri?>Admin</span>
 </div>
 </div>
 </div>


    <!-- /.col -->
    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-tasks"></i></span>

        <?php
	        $sql = $kon->query("SELECT count(id) as laki from inventaris_barang");
	        while ($data= $sql->fetch_assoc()) {
	
		    $laki=$data['laki'];
	        }
        ?>

        <?php
	        $sql = $kon->query("SELECT count(id_kendaraan) as perempuan from inventaris_kendaraan");
	        while ($data= $sql->fetch_assoc()) {
	
		    $perempuan=$data['perempuan'];
	        }
        ?>

        <div class="info-box-content">
            <span class="info-box-text">Total Inventaris Barang KONI</span>
            <span class="info-box-number"><?php echo $laki; ?> Kali</span>
            <span class="info-box-text">Total Inventaris Kendaraan KONI</span>
            <span class="info-box-number"><?php echo $perempuan; ?> Kali</span>
        </div>
        <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    
    <!-- /.row -->

    <div class="row">
    <div class="col-md-12">
        <div class="box">
        <div class="box-header with-border">
         
            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>

            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
            <div class="col-md-12">
                <p class="text-center">
                <strong>Atlit yang mengikuti Lomba 2024</strong>
                </p>

                <div id="tampil_grafik_bar">
                  
                </div>
                <!-- /.chart-responsive -->
            </div>
           
            <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- ./box-body -->
        <div class="box-footer">
  
        </div>
        <!-- /.box-footer -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
    <div class="col-md-6">
        <div class="box">
        <div class="box-header with-border">
            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>

            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
            <div class="col-md-12">
                <p class="text-center">
                <strong>Cabang Olahraga</strong>
                </p>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="tabel_barang" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th width="40%">aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                                //Koneksi database
                                include 'config/database.php';

                                // perintah sql
                                $sql="select * from kategori order by id_kategori desc";
                                $hasil=mysqli_query($kon,$sql);
                                $no=0;
                                //Menampilkan data dengan perulangan while
                                while ($data = mysqli_fetch_array($hasil)):
                                $no++;

                                $sql2="select * from barang where kategori_barang=$data[id_kategori]";
                                $hasil2=mysqli_query($kon,$sql2);

                                if (isset($data['barang_keluar'])&& isset($data['barang_masuk'])){
                                    $persentase=$data['barang_keluar']/$data['barang_masuk']*100;
                                }else {
                                    $persentase=0;
                                }

                          

                                
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data['nama_kategori']; ?></td>
                                <td>
                                <button type="button" class="btn btn-warning btn-circle" data-toggle="modal" data-target="#myModal<?= $no ?>"><i class="fa fa-info"></i></button>


                                <div class="modal fade" id="myModal<?= $no ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Data Pengunjung</h4>
                                      </div>
                                      <div class="modal-body">
                                        <div class="table-responsive">
    <table class="table table-bordered table-striped" id="tabel_barang" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Atlit</th>
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
        </tr>
        </thead>
        <tbody>
        <?php
            $no2=0;
            //Menampilkan data dengan perulangan while
            while ($data2 = mysqli_fetch_array($hasil2)):
            $no++;
        ?>
        <tr>
            <td><?php echo $no2; ?></td>
            <td><?php echo $data2['kode_barang']; ?></td>
            <td><?php echo $data2['nama_barang']; ?></td>
            <td><?php echo $data2['jenis_kelamin']; ?></td>
            <td><?php echo $data2['no_hp']; ?></td>
            <td><?php echo $data2['nomor_kelas_pertandingan']; ?></td>
            <td><?php echo $data2['asal_daerah']; ?></td>
            <td><?php echo $data2['tinggi_badan']; ?></td>
            <td><?php echo $data2['berat_badan']; ?></td>
            <td><?php echo $data2['gol_darah']; ?></td>
            <td><?php echo $data2['pekerjaan']; ?></td>
            <td><?php echo $data2['pendidikan']; ?></td>
            <td><?php echo $data2['email']; ?></td>
            <td><?php echo $data2['tahun']; ?></td>
        </tr>
        <!-- bagian akhir (penutup) while -->
        <?php endwhile; ?>
        </tbody>
    </table>
</div>

                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div>
                                    
                                </div>
                                </td>
                            </tr>
                            <!-- bagian akhir (penutup) while -->
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
           
            <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- ./box-body -->
        <div class="box-footer">
  
        </div>
        <!-- /.box-footer -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
    <div class="col-md-6">
        <div class="box">
        <div class="box-header with-border">
         
            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>

            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
            <div class="col-md-12">
                <p class="text-center">
                <strong>Persentase Atlit yang Mengikuti Lomba</strong>
                </p>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="tabel_barang" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th width="40%">Persentase</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                                //Koneksi database
                                include 'config/database.php';

                                // perintah sql
                                $sql="select * from barang b left join kategori k on k.id_kategori=b.kategori_barang order by b.id_barang desc";
                                $hasil=mysqli_query($kon,$sql);
                                $no=0;
                                //Menampilkan data dengan perulangan while
                                while ($data = mysqli_fetch_array($hasil)):
                                $no++;

                                if (isset($data['barang_keluar'])&& isset($data['barang_masuk'])){
                                    $persentase=$data['barang_keluar']/$data['barang_masuk']*100;
                                }else {
                                    $persentase=0;
                                }

                          

                                
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data['kode_barang']; ?></td>
                                <td><?php echo $data['nama_barang']; ?></td>
                                <td><?php echo $data['nama_kategori']; ?></td>
                            </tr>
                            <!-- bagian akhir (penutup) while -->
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
                <script>
                    $(function () {
                        $('#tabel_barang').DataTable({
                        'paging'      : true,
                        'lengthChange': false,
                        'searching'   : false,
                        'ordering'    : false,
                        'info'        : false,
                        'autoWidth'   : false
                        })
                    })
                </script>
                <!-- /.chart-responsive -->
            </div>
           
            <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- ./box-body -->
        <div class="box-footer">
  
        </div>
        <!-- /.box-footer -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
    </div>


</section>
<!-- /.content -->
<script>

    $(document).ready(function(){
        grafik_bar();
        grafik_stok();
    });


    function grafik_bar() {
        $.ajax({
            url: 'pages/dashboard/grafik-bar.php',
            method: 'POST',
            success:function(data){
                $('#tampil_grafik_bar').html(data);
            }
        }); 
    }


    function grafik_stok() {
        $.ajax({
            url: 'pages/dashboard/grafik-stok.php',
            method: 'POST',
            success:function(data){
                $('#tampil_grafik_stok').html(data);
            }
        }); 
    }
</script>

