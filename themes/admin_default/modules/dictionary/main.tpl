<!-- BEGIN: main -->
<form action="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;{NV_OP_VARIABLE}={OP}" method="post">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                     <th class="text-center">Delete</th>
                    <th class="text-center">{LANG.wordname}</th>
                    <th class="text-center">{LANG.wordmeaning}</th>
                    <th class="text-center">{LANG.type}</th>
                    <th span="2">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <!-- BEGIN: loop -->
                <tr class="">
                     <td class="text-left">
                        <input type="checkbox" id={ROW.wordname} name="{ROW.wordname} value="">
                     </td>
                    <td class="text-left">
                        {ROW.wordname}
                    </td>
                    <td class="text-left">
                        {ROW.wordmeaning}
                    </td>
                    <td class="text-left">
                        {TYPE}
                    </td>
                    <td class="text-center">
                        <em class="fa fa-trash-o fa-lg">&nbsp;</em>
                        <a href="{ROW.delete_url}">{LANG.delete}</a>
                    </td>
                    <td class="text-center">
                        <em class="fa fa-pencil-o fa-lg ">&nbsp;</em>
                        <a href="{ROW.edit_url}">{LANG.edit}</a>
                    </td>
                </tr>
                <!-- END: loop -->
            </tbody>
        </table>
    </div>
</form>
<!-- END: main -->
