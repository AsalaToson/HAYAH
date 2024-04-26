<!-- Modal -->
<form action="{{route('laboratories.store')}}" method="post" >
    @csrf
<div class="modal fade" id="transferModal" tabindex="-1" aria-labelledby="transferModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="transferModalLabel">Transfer to Lab</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">
                <textarea class="form-control" name="description" id="transferText" rows="4" placeholder="Enter transfer details..."></textarea>
                <input type="hidden" name="doctor_id" value="{{Auth::guard('doctor')->user()->id}}">
                <input type="hidden" name="doctor_id" value="{{$appointment->mother->id}}">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="transferButton">Transfer to Lab</button>
            </div>
        </div>
    </div>
</div>
</form>
