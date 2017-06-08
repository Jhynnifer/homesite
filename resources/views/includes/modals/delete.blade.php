<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="deleteModalLabel">Confirm Delete</h4>
            </div>

            <div class="modal-body">Are you sure you want to delete this?</div>

            <div class="modal-footer">

                <form name="delete" method="post" action="">

                    <!--hidden-->
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="DELETE">

                    <!--buttons-->
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Cancel</button>
                    <button type="submit" class="btn btn-success" value="Confirm"><i class="fa fa-check-circle"></i> Confirm</button>

                </form>

            </div>

        </div>
    </div>
</div>
