<div class="panel panel-default">
	<div class="panel-heading ui-draggable-handle">
		<h3 class="panel-title">Daftar Mata Pelajaran</h3>
	</div>
	<div class="panel-body">
		<table class="table table-striped">
            <thead>
                <tr>
                    <th>Semester</th>
                    <th>Mata Pelajaran</th>
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
                        <tr>
                            <td><?=$list?></td>
                        </tr>  
                    <?php } ?>
                <?php } ?>
            </tbody>
        </table>
	</div>
</div>