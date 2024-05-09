<!-- Modal -->
<div class="modal fade" id="laboratorie_conversion{{$appointment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Transfer to Lab</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('laboratory.store')}}" method="POST">
                @csrf
                <div class="modal-body">


                    <input type="hidden" name="doctor_id" value="{{$appointment->doctor->id}}">
                    <input type="hidden" name="mother_id" value="{{$appointment->mother->id}}">

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Required Tests</label>
                        <textarea class="form-control" name="description" rows="6"></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
