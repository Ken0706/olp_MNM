<!-- BEGIN: main -->
<form
    class="form-horizontal" action="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;{NV_OP_VARIABLE}={OP}" method="post">
    <!-- BEGIN: error -->
    <div class="alert alert-warning" role="alert">
        <strong>{ERROR}</strong>
    </div>
    <!-- END: error -->
    <div class="form-group">
        <label class="control-label col-sm-3" for="email">{LANG.moneyname}</label>
        <div class="col-sm-10">
        <div class="center"><label>Điền thông tin ngoại ngữ</label></div>
            <label>Word</label>
            <input type="text" class="form-control" name="wordname" id="wordname" value=""></>
            <label>Meaning</label>
            <input type="text" class="form-control" name="wordmeaning" id="wordmeaning" value=""></>
            <label>Type</label>
            <select class="form-control" name="type" id="type" >
                    <option value="0">VI-EN</option>
                    <option value="1">EN-VI</option>
            </select>
        </div>
    </div>
    <div class="text-center"><input class="btn btn-primary" name="submit" type="submit" value="{LANG.add}"/></div>
</form>
<!-- END: main -->
