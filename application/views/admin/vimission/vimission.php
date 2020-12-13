<ul class="breadcrumb">
    <li>Manajemen Website</li>
    <li class="active">Visi & Misi</li>
</ul>

<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">Form Visi & Misi Sekolah</h3>
                </div>
                <form id="validate" role="form" class="form-horizontal action-submit-update"
                    data-action="<?=base_url("admin/vimission/update")?>" >
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Visi</label>
                            <div class="col-md-6">
                                <textarea name="vision" id="vision" class="validate[required] form-control"><?=$vimission->vision?></textarea>
                                <span class="help-block form-error" id="vision-error"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Misi</label>
                            <div class="col-md-6">
                                <textarea name="mission" id="mission" class="validate[required] form-control"><?=$vimission->mission?></textarea>
                                <span class="help-block form-error" id="mission-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="btn-group pull-right">
                            <button class="btn btn-primary save" type="submit">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<script>
    formValidation(".action-submit-update");
</script>