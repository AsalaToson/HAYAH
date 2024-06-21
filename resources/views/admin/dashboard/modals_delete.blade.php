{{--<!-- resources/views/modals/delete.blade.php -->--}}
{{--<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">--}}
{{--    <div class="modal-dialog" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>--}}
{{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                    <span aria-hidden="true"></span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <form id="deleteForm" method="POST" action="">--}}
{{--                @csrf--}}
{{--                @method('GET')--}}
{{--                <div class="modal-body">--}}
{{--                    Are you sure you want to delete this item?--}}
{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>--}}
{{--                    <button type="submit" class="btn btn-danger">Delete</button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}



<!-- Modal -->
<div class="modal fade" id="delete{{ $Section->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Section</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <form action="{{ route('items.destroy2', $Section->id) }}" method="post">
                @method('DELETE')
{{--                {{ method_field('post') }}--}}
                {{ csrf_field() }}
                <div class="modal-body">
                    <input type="hidden" name="id" value="{{ $Section->id }}">
                    <h5>Are you sure you want to delete this section</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
