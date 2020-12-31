<ul class="breadcrumb">
	<li class="active">Jadwal Pelajaran</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-book"></span> Jadwal Pelajaran</h2>
</div>

<div class="page-content-wrap">
    <div class="row" style="margin-bottom: 10px">
        <div class="form-group">
            <div class="col-md-3">
                <label>Tahun:</label>
                <select class="form-control" name="year" id="year">
                    <?php 
                        for ($i=2008;$i<=2099;$i++) {
                            $selected = $i == $year ? "selected" : null;
                            echo "<option $selected value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </div>
        </div>
    </div>

	<div class="row">
        <?php foreach ($classes as $class) { ?>
            <div class="col-md-3">
                <a class="tile tile-default link-to" 
                    data-to="<?=base_url("admin/schedule/$class->id/$year/edit")?>">
                    <?=$class->classname?>
                    <div class="informer informer-primary">Kelas</div>
                </a>
            </div>
        <?php } ?>
	</div>

</div>

<script>
    const BASE_URL = "<?=base_url()?>";
    
    $("#year").on("change", function() {
        let year = $(this).val();
        loadContent(`${BASE_URL}admin/schedule/${year}`, ".content");
    });
</script>