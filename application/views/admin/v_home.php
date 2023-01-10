<?php 
$this->load->view('admin/head');
?>

<!--tambahkan custom css disini-->

<?php
$this->load->view('admin/topbar');
$this->load->view('admin/sidebar');
?>

<!-- Content Header (Page header) -->


<!-- Main content -->
<section class="content">

    <div class="callout callout-danger">
        <h4>Selamat Datang, <?php echo $this->session->userdata('nama');?> </h4>
        
    </div>

    <div class="box box-success box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Petunjuk Penggunaan</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <dl>
                <dt></dt>
                <dd>
                    <ol>
                    Semua materi di Website ujian online disediakan sebagaimana adanya. Ujian online tidak memberikan jaminan, baik tersurat maupun tersirat, oleh karena itu meniadakan semua jaminan lainnya. Selain itu,  tidak membuat pernyataan apa pun mengenai keakuratan atau keandalan penggunaan materi di Situs Webnya atau terkait dengan materi tersebut atau situs apa pun yang ditautkan ke Situs Web ini.
                    </ol>
                </dd>
            </dl>
            
    </div>

</section><!-- /.content -->
  
<?php 
$this->load->view('admin/js');
?>

<!--tambahkan custom js disini-->

<script type="text/javascript">

	$(function(){
		$('#data-tables').dataTable();
	});

	$('.alert-message').alert().delay(3000).slideUp('slow');

</script>


<?php
$this->load->view('admin/foot');
?>

