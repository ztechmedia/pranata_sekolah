<ul class="breadcrumb">
	<li>Nilai</li>
	<li class="link-to" data-to="<?=base_url("admin/values/class-values/$year")?>"></li>
	<li class="active">Kelas</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left link-to" data-to="<?=base_url("admin/values/class-values/$year")?>"></span></h2>
</div>

<div class="page-content-wrap">

	<div class="row">
		<div class="col-md-3">
			<a class="tile tile-default">
				<div style="margin-top: 20px;">Kelas <?=$class->classname?></div>
                <div class="informer informer-primary">Tahun: <strong><?=$year?></strong></div>
			</a>
            <div class="panel panel-default">
                <p style="padding: 10px; text-align:center; font-weight: bold;">Daftar Siswa</p>
				<div class="panel-body list-group custom-scroll-sm">
                    <?php $no = 1; foreach ($students as $student) { ?>
                        <span class="list-group-item link-to-unsave" 
                            data-target=".value-area"
                            data-to="<?=base_url("admin/values/class-values/$student->class_id/$year/$student->student_id/list-values")?>" 
                            style="font-weight:bold; font-size:14px; cursor:pointer;">
                             <?=$no++. '. ' . $student->name?>
                        </span>
                    <?php } ?>
				</div>
			</div>
		</div>

		<div class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Daftar Nilai</h3>
				</div>
				<div class="panel-body custom-scroll">
                    <div class="value-area"></div>
				</div>
			</div>
		</div>
    </div>

</div>

<style>
    .custom-scroll-sm {
        height: 284px;
        overflow: auto;
        overflowY: scroll;
    }

    .custom-scroll {
        height: 400px;
        overflow: auto;
        overflowY: scroll;
    }
</style>

<script>
    let BASE_URL = '<?=base_url()?>';

    let classId = '<?=$class->id?>';
    let year = '<?=$year?>';

</script>