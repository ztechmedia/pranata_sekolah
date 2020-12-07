<div class="row" style="margin-bottom: 10px">
	<div class="page-content-wrap">
		<div class="panel panel-default">
			<table class="table">
				<thead>
					<tr>
						<th>Detail Siswa</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Nama</td>
						<td><?=$student->name?></td>
					</tr>
					<tr>
						<td>NIS</td>
						<td><?=$student->nis?></td>
					</tr>
					<tr>
						<td>Nilai Kelas</td>
						<td><?=$student->classname?></td>
					</tr>
					<tr>
						<td>Tahun Pelajaran</td>
						<td>
							<select class="form-control" name="year" id="year">
								<?php 
                            for ($i=2008;$i<=2099;$i++) {
                                $selected = $i == $year ? "selected" : null;
                                echo "<option $selected value='$i'>$i</option>";
                            }
                        ?>
							</select>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="row">
	<div class="page-content-wrap">
		<div class="panel panel-default">
			<div class="panel-heading ui-draggable-handle">
				<h3 class="panel-title">Daftar Mata Pelajaran</h3>
			</div>
		</div>
	</div>
</div>

<script>
    
</script>