<ul class="breadcrumb">
    <li>Master</li>
    <li><a class="link-to" data-to="<?=base_url("admin/students")?>">Murid</a></li>
    <li class="active">Tambah Data</li>
</ul>

<div class="page-title">
    <h2><span class="fa fa-arrow-circle-o-left link-to" data-to="<?=base_url("admin/students")?>"></span> Tambah Murid</h2>
</div>

<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">Form Murid</h3>
                </div>
                <form id="validate" role="form" class="form-horizontal action-submit-create"
                    data-action="<?=base_url("admin/students/add")?>">
                    <div class="panel-body">
                        <?php $data['student'] = null; $this->load->view('admin/students/form', $data)?>
                    </div>
                    <div class="panel-footer">
                        <div class="btn-group pull-right">
                            <button class="btn btn-primary save" type="submit">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<script>
    formSelect();
    formValidation(".action-submit-create");
</script>