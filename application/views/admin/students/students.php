<ul class="breadcrumb">
    <li>Master</li>
    <li class="active">Murid</li>
</ul>

<div class="page-title">
    <h2><span class="fa fa-users"></span> Murid</h2>
</div>

<div class="page-content-wrap" style="height: 100vh">

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">Daftar Murid</h3>
                </div>

                <div class="panel-body">
                    <div class="btnContainer">
                        <button class="btn btn-default btn-rounded link-to" data-to="<?=base_url("admin/students/create")?>">
                            <i class="fa fa-user"></i> Tambah Murid
                        </button>
                    </div>
                    <table class="table table-bordered" id="data">
                        <thead>
                            <th width="7%">No</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>TTL</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Kelas</th>
                            <th>Tindakan</th>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<style>
    .btnContainer {
        margin-bottom: 10px;
    }
</style>

<script>
    $(document).ready(() => {
        $('#data').DataTable({
            "processing": false,
            "serverSide": true,
            "order": [
                [2, 'desc']
            ],
            "ajax": {
                "url": "<?=base_url("admin/students-table")?>",
                "type": "POST"
            },
            columns: [
                {
                    data: "no",
                },
                {
                    data: "nis",
                },
                {
                    data: "name",
                },
                {
                    data: "ttl",
                },
                {
                    data: "gender",
                },
                {
                    data: "address",
                },
                {
                    data: "classes",
                },
                {
                    data: 'actions'
                }
            ]
        });
    });
</script>