
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    Data Anggota Atlit
    <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Data Anggota Atlit</li>
    </ol>
</section>

<!-- Main content -->   
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- barang -->
            <div class="box box-success">
            <div class="box-header with-border">
                <button type="button" class="btn btn-primary" id="tambah">Tambah</button>
                <a href="pages/anggota-atlit/cetak.php" class="btn btn-info" target="_blank">Cetak</a>
            </div>
            <!-- /.box-header -->
                <div class="box-body">
                    <div id="tampil_tabel"></div>
                </div>
                <div class="box-footer">
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row -->
</section>
<!-- jQuery 3 -->




<!-- Modal -->
<div class="modal fade" id="modal">
    <div class="modal-dialog">
        <div class="modal-content">

        <div class="modal-header">
            <h4 class="modal-title" id="judul"></h4>
        </div>

        <div class="modal-body">
            <div id="tampil_data">
                 <!-- Data akan di load menggunakan AJAX -->                   
            </div>  
        </div>
  
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

        </div>
    </div>
</div>


<script>
    // Tambah barang
    $('#tambah').on('click',function(){
        $.ajax({
            url: 'pages/anggota-atlit/tambah.php',
            method: 'post',
            success:function(data){
                $('#tampil_data').html(data);  
                document.getElementById("judul").innerHTML='Tambah Atlit';
            }
        });
        // Membuka modal
        $('#modal').modal('show');
    });
</script>

<script>

  $(document).ready( function () {
    tabel_anggota();
  });


  function tabel_anggota(){

    $.ajax({
        type: "POST",
        dataType: "html",
        async : false,
        url: 'pages/anggota-atlit/tabel-barang.php',
        success: function(data) {
            $("#tampil_tabel").html(data);
        }
    });
  }

</script>