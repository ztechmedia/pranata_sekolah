<ul class="breadcrumb">
	<li class="active">Nilai Saya</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-users"></span> Nilai</h2>
</div>

<div class="page-content-wrap">

	<div class="row">
		<div class="col-md-12">

            <div class="student-area">

                <div class="panel panel-default">
                    <div class="panel-body profile bg-info">

                        <div class="profile-image">
                            <img src="<?=base_url("assets/joli/img/twh.png") ?>" alt="User">
                        </div>
                        <div class="profile-data">
                            <div class="profile-data-name"><?=$student->name?></div>
                            <p>Kelas: <?=$student->classname?></p>
                        </div>

                    </div>
                    <div class="panel-body list-group">
                        <a class="list-group-item"><span class="fa fa-circle"></span> Nis :
                            <span class="pull-right"><?=$student->nis?></span>
                        </a>

                        <a class="list-group-item"><span class="fa fa-circle"></span> Tempat, Tangal Lahir :
                            <span class="pull-right"><?=$student->birth_place.", ".revDate($student->birth_date)?></span>
                        </a>

                        <a class="list-group-item"><span class="fa fa-circle"></span> Jenis Kelamin :
                            <span class="pull-right"><?=$student->gender?></span>
                        </a>

                        <a class="list-group-item"><span class="fa fa-circle"></span> Alamat :
                            <span class="pull-right"><?=$student->address?></span>
                        </a>

                        <a class="list-group-item"><span class="fa fa-circle"></span> No. HP :
                            <span class="pull-right"><?=$student->phone?></span>
                        </a>

                    </div>
                </div>
                <div class="row">s
                    <?php foreach ($classes as $class) { ?>
                        <div class="col-md-3">
                            <a class="tile tile-default link-to-unsave"
                                data-to="<?=base_url("admin/values/$student->id/$class->id/setvalues")?>" data-target=".student-area">
                                <?=$class->classname?>
                                <div class="informer informer-primary">Kelas</div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        
        </div>

	</div>
</div>