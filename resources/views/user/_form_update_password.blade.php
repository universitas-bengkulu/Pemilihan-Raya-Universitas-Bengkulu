<div class="modal fade" id="updatePassword">
    <form method="POST" action="{{ route('user.updatePassword') }}" class="form">
        {{ csrf_field() }} {{ method_field('PATCH') }}
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-check-circle"></i>&nbsp;Ubah Password</h5>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">New Password</label>
                    <input type="hidden" name="id" id="id_password">
                    <input type="password" class="form-control password" name="password" id="password">
                </div>
                <div class="form-group">
                    <label for="examplenputPassword1">Confirm Password </label>
                    <input type="password" class="form-control password_confirmation" name="password_confirmation" id="password_confirmation">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm btn-flat" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp;Close</button>
                <button type="submit" id="btn_submit" class="btn btn-primary btn-sm btn-flat btn_save"><i class="fa fa-check-circle"></i>&nbsp;Save</button>
            </div>
        </div>
    </form>
</div>
