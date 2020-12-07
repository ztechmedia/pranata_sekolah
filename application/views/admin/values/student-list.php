<?php if(count($students) > 0) { foreach ($students as $student) { ?>
    <div class="panel panel-default" onclick="setStudent('<?=$student->id?>')">
        <div class="panel-body list-group custom-scroll-sm">
            <a class="list-group-item">
                <span class="fa fa-circle"></span>
                <strong> <?=$student->name?> </strong>
                <table class="table" style="margin-top: 10px">
                    <tr>
                        <td>NIS</td>
                        <td>:</td>
                        <td><?=$student->nis?></td>
                    </tr>
                    <tır>
                        <td>Kelas</td>
                        <td>:</td>
                        <td><?=$student->classname?></td>
                    </tır>
                    <tr>
                        <td>Ttl</td>
                        <td>:</td>
                        <td><?=$student->birth_place.", ".revDate($student->birth_date)?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?=$student->gender?></td>
                    </tr>
                </table>
            </a>
        </div>
    </div>
<?php } } else { ?>
    <strong>Siswa tidak ditemukan !!</strong>
<?php } ?>