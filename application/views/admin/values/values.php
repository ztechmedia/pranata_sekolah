<ul class="breadcrumb">
    <li class="active">Input Nilai</li>
</ul>

<div class="content-frame">
    <div class="content-frame-top">
        <div class="page-title">
            <h2><span class="fa fa-book"></span>
                Input Nilai
            </h2>
        </div>
    </div>

    <div class="content-frame-right" style="height: 100vh; overflow: auto; overflowY: scroll;">
        <div class="input-group">
            <span class="input-group-addon">
                <i class="fa fa-search"></i>
            </span>
            <input onchange="searchStudent($(this).val())" type="text" class="form-control" placeholder="Cari siswa..."/>
        </div>

        <div class="student-list">
            <div class="panel panel-default">
				<div class="panel-body list-group custom-scroll-sm">
                    <a class="list-group-item">
                        <span class="fa fa-circle"></span> 
                        <strong> Siswa </strong>
                        <table class="table" style="margin-top: 10px">
                            <tr>
                                <td>NIS</td>
                                <td>:</td>
                                <td>...</td>
                            </tr>
                            <tr>
                                <td>Kelas</td>
                                <td>:</td>
                                <td>...</td>
                            </tr>
                            <tr>
                                <td>Ttl</td>
                                <td>:</td>
                                <td>...</td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td>...</td>
                            </tr>
                        </table>
                    </a>
				</div>
			</div>
        </div>
    </div>

    <div class="content-frame-body content-frame-body-left">
        <div class="row">
            <div class="col-md-12">
               <div class="student-area"></div>
            </div>
        </div>
    </div>
</div>

<style>
    .student-list {
        margin-top: 10px;
    }
</style>

<script>
    const BASE_URL = '<?=base_url()?>';

    let currentStudent = localStorage.getItem("student-classlist-url");
    if(currentStudent && currentStudent.length > 0) {
        setTimeout(() => {
            loadContent(currentStudent, ".student-area");
        }, 500)
    }

    function searchStudent(student) {
        const url = `${BASE_URL}admin/values/student-search`;
        const data = {
            student: student
        }

        reqJson(url, "POST", data, (err, response) => {
            if(response) {
                $(".student-list").html(response.responseText);
            } else {
                console.log("Error: ", err);
            }
        });
    }

    function setStudent(studentId) {
        const url = `${BASE_URL}admin/values/${studentId}/classlist`;
        loadContent(url, ".student-area");
        localStorage.setItem("student-classlist-url", url);
    }
</script>