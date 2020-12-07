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
						<td>Kelas <?=$student->classname?></td>
					</tr>
					<tr>
						<td>Tahun Pelajaran</td>
						<td>
							<select onchange="getSubclass()" class="form-control" name="year" id="year">
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
			<form id="save-values" data-url="<?=base_url("admin/values/$student->id/add")?>">
				<div class="subclassList"></div>
				<div class="btn-container">
					<button type="submit" id="save" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>

<style>
	.btn-container {
		padding: 20px;
	}
</style>

<script>
	const BASE_URL = '<?=base_url()?>';
	let classId = '<?=$classId?>';

    function getSubclass() {
		const year = $("#year").val();
		const url = `${BASE_URL}admin/values/${classId}/${year}/subclass`;
		loadContent(url, ".subclassList");
	}

	$("#save-values").on("submit", function(e) {
		e.preventDefault();

		$("#save").html("Loading...");
		const el = $(this);
		const url = el.data("url");
		const data = new FormData(this);
		
		reqFormData(url, "POST", data, (err, response) => {
			if(response) {
				swal("Sukses", response.message, "success");
				getSubclass();
				$("#save").html("Simpan");
			} else {
				console.log("Error: ", err);
			}
		});
	});

	getSubclass();
</script>