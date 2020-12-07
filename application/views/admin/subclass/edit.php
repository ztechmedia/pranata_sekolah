<ul class="breadcrumb">
	<li>Relasi</li>
	<li class="link-to" data-to="<?=base_url("admin/subclass")?>">Kelas & Mapel</li>
	<li class="active">Kelas <?=$class->classname?></li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left link-to" data-to="<?=base_url("admin/subclass/$year")?>"></span> Kelas <?=$class->classname?></h2>
</div>

<div class="page-content-wrap">

	<div class="row">
		<div class="col-md-3">
			<a class="tile tile-default">
				<div id="semester"></div>
				<p>Semester Aktif</p>
                <div class="informer informer-primary">Tahun: <strong><?=$year?></strong></div>
			</a>
			<div class="panel panel-default">
				<div class="panel-body list-group custom-scroll-sm">
                    <?php foreach ($semesters as $sm) { ?>
                        <a onclick="setSemester('<?=$sm->semester_name?>', '.sm-<?=$sm->id?>', '<?=$sm->id?>')" class="list-group-item sm-<?=$sm->id?>">
                            <span class="fa fa-circle"></span> <?=$sm->semester_name?>
                        </a>
                    <?php } ?>
				</div>
			</div>
		</div>

		<div class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-heading ui-draggable-handle">
					<h3 class="panel-title">Daftar Mata Pelajaran</h3>
				</div>
				<div class="panel-body list-group list-group-contacts custom-scroll">
                    <?php foreach ($subjects as $subject) { ?>
                        <a onclick="setSubject('<?=$subject->id?>')" class="list-group-item subject-<?=$subject->id?>" style="
                                display: flex;
                                flex-direction: row;
                                justify-content: flex-start;
                                align-items: center">
                            <div class="list-group-status status-online subject-status-<?=$subject->id?>"></div>
                            <i style="font-size: 45px" class="fa fa-book" /></i>
                            <span class="contacts-title"><?=$subject->subject_name?></span>
                        </a>
                    <?php } ?>
				</div>
			</div>
		</div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="sublist"></div>
        </div>
    </div>

</div>

<style>
    .sm-active {
        color: #175b35 !important;
        font-weight: bold;
    }

    .custom-scroll-sm {
        height: 330px;
        overflow: auto;
        overflowY: scroll;
    }

    .custom-scroll {
        height: 400px;
        overflow: auto;
        overflowY: scroll;
    }

    .disableSub {
        color: #ccc !important;
        pointer-events: none;
        cursor: default;
        text-decoration: none;
    }
</style>

<script>
    let BASE_URL = '<?=base_url()?>';

    let classId = '<?=$class->id?>';
    let year = '<?=$year?>';
    let smId = null;
    let semesterName = null;

	function setSemester(semesterName, smClass, smId) {
        $(".disableSub").removeClass("disableSub");
        $(".status-offline").addClass("status-online");
        $(".status-offline").removeClass("status-offline");
        $(".sm-active").removeClass("sm-active");
		$("#semester").html(semesterName);
        this.semesterName = semesterName;
        this.smId = smId;
        $(smClass).addClass("sm-active");

        //@ check subjects for class & semester
        const url = `${BASE_URL}admin/subclass/${classId}/${smId}/${year}/check`;
        const urlSublist = `${BASE_URL}admin/subclass/${classId}/${year}/sublist`;
        reqJson(url, "POST", {}, (err, response) => {
            if(response) {
                if(response.subjects) {
                    response.subjects.map(subject => {
                        $(`.subject-${subject.subject_id}`).addClass("disableSub");
                        $(`.subject-status-${subject.subject_id}`).removeClass("status-online");
                        $(`.subject-status-${subject.subject_id}`).addClass("status-offline");
                    });
                }
                loadContent(urlSublist, '.sublist');
            } else {
                console.log("Error: ", err);
            }
        });
    }


    function setSubject(subId) {
        const data = {
            classId: classId,
            smId: this.smId,
            subId: subId,
            year: year
        }

        const url = `${BASE_URL}admin/subclass/add`;
        const urlSublist = `${BASE_URL}admin/subclass/${classId}/${year}/sublist`;

        reqJson(url, "POST", data, (err, response) => {
            if(response) {
                setSemester(this.semesterName, `.sm-${this.smId}`, this.smId);
                loadContent(urlSublist, '.sublist');
                swal("Sukses", response.message, "success");
            } else {
                console.log("Error: ", err);
            }
        });
    }

    function deleteSubject(subId, subjectName, semesterName, smId) {
        swal(
            {
                title: "Hapus",
                text: `Anda yakin ingin menghapus mata pelajaran ${subjectName}`,
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ya, Hapus!",
                closeOnConfirm: false,
            },
            function () {
                const url = `${BASE_URL}admin/subclass/${subId}/delete`;
                const urlSublist = `${BASE_URL}admin/subclass/${classId}/${year}/sublist`;
                reqJson(url, "GET", {}, (err, response) => {
                    if (response) {
                        setSemester(semesterName, `.sm-${smId}`, smId);
                        loadContent(urlSublist, '.sublist');
                        swal("Sukses", response.message, "success");
                    } else {
                        console.log("Error: ", err);
                    }
                });
            }
        );
    }

	setSemester('<?=$semesterName?>', '<?=$smClass?>','<?=$smId?>');
</script>