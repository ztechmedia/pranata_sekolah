<ul class="breadcrumb">
	<li>Relasi</li>
	<li class="active">Kelas & Mapel</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-book"></span> Kelas & Mapel</h2>
</div>

<div class="page-content-wrap">

	<div class="row">
        <?php foreach ($classes as $class) { ?>
            <div class="col-md-3">
                <a class="tile tile-default link-to" data-to="<?=base_url("admin/subclass/$class->id/edit")?>">
                    <?=$class->classname?>
                    <p>Total Mata Pelajaran: 9</p>
                    <div class="informer informer-primary">Kelas</div>
                </a>
            </div>
        <?php } ?>
	</div>

</div>

<style>
	.btnContainer {
		margin-bottom: 10px;
	}
</style>

<script>

</script>