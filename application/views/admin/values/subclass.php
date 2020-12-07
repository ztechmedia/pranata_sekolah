<table class="table table-striped">
    <thead>
        <tr>
            <th>Semester</th>
            <th>Mata Pelajaran</th>
            <th width="12%">Nilai Tugas</th>
            <th width="12%">Nilai UTS</th>
            <th width="12%">Nilai UAS</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($sublist as $key => $sub) { ?>
            <tr>
                <td rowspan="<?=count($sub) + 1?>">
                    <p style="
                        font-weight: bold;
                        font-size: 14px;
                    "><?=$key?></p>
                </td>
            </tr>
            <?php foreach($sub as $list) { ?>
                <input style="display: none" name="subclass_id[]" value="<?=$list['id']?>">
                <tr>
                    <td>
                        <?=$list['subject_name']?>
                    </td>
                    <td>
                        <input value="<?=$list['task']?>" type="number" class="form-control" name="task[<?=$list['id']?>][]">
                    </td>
                    <td>
                        <input value="<?=$list['midtest']?>" type="number" class="form-control" name="midtest[<?=$list['id']?>][]">
                    </td>
                    <td>
                        <input value="<?=$list['endtest']?>" type="number" class="form-control" name="endtest[<?=$list['id']?>][]">
                    </td>
                </tr>
            <?php } ?>
        <?php } ?>
    </tbody>
</table>