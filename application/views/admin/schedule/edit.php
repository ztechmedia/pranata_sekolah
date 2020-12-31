<ul class="breadcrumb">
    <li><a class="link-to" data-to="<?=base_url("admin/schedule/$year")?>">Jadwal Pelajaran</a></li>
    <li class="active">Edit Jadwal</li>
</ul>

<div class="page-title">
    <h2><span class="fa fa-arrow-circle-o-left link-to" data-to="<?=base_url("admin/schedule/$year")?>"></span></h2>
</div>

<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">Form Jadwal Kelas <?=$class->classname. ", Tahun " .$year?></h3>
                </div>
                
                <form id="validate" role="form" class="form-horizontal action-submit-create"
                    data-action="<?=base_url("admin/schedule/add")?>">
                    <div class="panel-body" <?= $this->auth->role == "student" ? "style='padding:0px'" : ''; ?>>
                        <?php if($this->auth->role == "admin") { ?>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Semester</label>
                            <div class="col-md-6">
                                <select class="validate[required] form-control nested-select"
                                    data-target="#subclass_id" 
                                    data-empty="- Pilih Mata Pelajaran -"
                                    data-url="<?=base_url()?>admin/schedule/<?=$class->id?>/[id]/<?=$year?>/sm-subclass">
                                    <option value="">- Pilih Semester -</option>
                                    <?php foreach ($semesters as $semester) {
                                        echo "<option value=" . $semester->id . " >$semester->semester_name</option>";
                                    }?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Mata Pelajaran</label>
                            <div class="col-md-6">
                                <select class="validate[required] form-control" name="subclass_id" id="subclass_id">
                                   <option value="">- Pilih Mata Pelajaran -</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Hari</label>
                            <div class="col-md-6">
                                <select class="validate[required] form-control" name="day" id="day">
                                   <?php
                                    $days = [
                                        "1" => "Senin",
                                        "2" => "Selasa",
                                        "3" => "Rabu",
                                        "4" => "Kamis",
                                        "5" => "Jumat",
                                        "6" => "Sabtu",
                                    ];

                                    foreach ($days as $key => $value) {
                                        echo "<option value='$key'>$value</option>";
                                    }
                                   ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Waktu Mulai</label>
                            <div class="col-md-6">
                                <select class="validate[required] form-control" name="start_time" id="end_time">
                                   <?php 
                                        for($i=7;$i<=16;$i++) {
                                            $hour = $i;
                                            if($i < 10) {
                                                $hour = "0".$i;
                                            }
                                            $time1 = $hour.":00";
                                            $time2 = $hour.":30";
                                            echo "<option value='$time1'>$time1</option>";
                                            echo "<option value='$time2'>$time2</option>";
                                        }
                                   ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Waktu Selesai</label>
                            <div class="col-md-6">
                                <select class="validate[required] form-control" name="end_time" id="end_time">
                                   <?php 
                                        for($i=7;$i<=16;$i++) {
                                            $hour = $i;
                                            if($i < 10) {
                                                $hour = "0".$i;
                                            }
                                            $time1 = $hour.":00";
                                            $time2 = $hour.":30";
                                            echo "<option value='$time1'>$time1</option>";
                                            echo "<option value='$time2'>$time2</option>";
                                        }
                                   ?>
                                </select>
                            </div>
                        </div>
                        <?php } ?>

                        <div class="schedule-list"></div>

                    </div>
                    <?php if($this->auth->role == "admin") { ?>
                    <div class="panel-footer">
                        <div class="btn-group pull-right">
                            <button class="btn btn-primary save" type="submit">Simpan</button>
                        </div>
                    </div>
                    <?php } ?>
                </form>

            </div>
        </div>

    </div>

</div>

<script>
    const BASE_URL = "<?=base_url()?>";
    formSelect();
    const url = "<?=base_url("admin/schedule/$class->id/$year/list")?>";        
    loadContent(url, ".schedule-list");
    formValidation(".action-submit-create", url, ".schedule-list");

    function deleteSchedule(id, name) {
        swal(
            {
                title: "Hapus",
                text: `Anda yakin ingin menghapus mata pelajaran ${name}`,
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ya, Hapus!",
                closeOnConfirm: false,
            },
            function () {
                const url = `${BASE_URL}admin/schedule/${id}/delete`;
                reqJson(url, "GET", {}, (err, response) => {
                    if (response) {
                        loadContent("<?=base_url("admin/schedule/$class->id/$year/list")?>", '.schedule-list');
                        swal("Sukses", response.message, "success");
                    } else {
                        console.log("Error: ", err);
                    }
                });
            }
        );
    }
</script>

<style>
    #year {
        color: #000;
    }
</style>