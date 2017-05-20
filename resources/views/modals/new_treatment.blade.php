<!-- start: NEW TREATMENT MODAL -->
<div class="modal fade" id="addTreatmentTypeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus"></i> Add Treatment Plan</h4>
            </div>
            <form method="post" id="addTreatmentType" action="{{ url('/')}}/store">
                <input type="hidden" name="_method" value="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Treatment Plan Title</label>
                        <input type="text" class="form-control" placeholder="Treatment Plan" name="title">
                    </div>
                    <div class="form-group">
                        <label>Treatment Price</label>
                        <input type="number" class="form-control" placeholder="Price" name="price">
                    </div>
                    <div class="form-group">
                        <label>Speciality</label>
                        <input type="text" class="form-control" placeholder="Speciality" name="speciality">
                    </div>
                    <div class="form-group">
                        <label>Covered By Dental Plan</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success btn-sm">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end: NEW TREATMENT MODAL -->
