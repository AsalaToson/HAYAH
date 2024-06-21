@extends('admin.parent')

@section('content')

        <h1>All Departments</h1>
        <div class="inner_content">
            <h3> Departments list </h3><br>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-groups">
                            <label for="show-entries">Show Entries</label>
                            <select class="form-control" id="show-entries">
                                <option value="1" >10</option>
                                <option value="2">20</option>
                                <option value="3">30</option>
                                <option value="4">40</option>
                                <option value="5">50</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-groups">
                            <label for="search" id="Slabel">Search </label>
                            <input type="text" class="form-control" id="search" placeholder="search ">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container2">

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th></th>
                            <th>department ID</th>
                            <th>Department Name</th>
                            <th>Department Description</th>
                            <th>Operations</th>

                        </tr>
                        </thead>
                        <tbody>
                            @foreach($section as $Section)

                        <tr>
                            <td><input type="checkbox"></td>
                            <td>{{$Section->id}}</td>
                            <td>{{$Section->name}}</td>
                            <td>{{$Section->description}}</td>

                        <td>
                            <div class="container3" style="display: flex;">
                                <!-- Delete Button with Delete Icon -->
{{--                                <button type="button" class="btn btn-danger delete-button"  id="dbutton" >--}}
{{--                                    <i class="fas fa-trash-alt"></i> Delete--}}

{{--                                </button>--}}

{{--                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal"--}}
{{--                                        data-id="{{ $Section->id }}" data-url="{{ route('items.destroy2', $Section->id) }}">--}}
{{--                                    Delete--}}
{{--                                </button>--}}

{{--                                <button type="button" class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"  data-toggle="modal"--}}
{{--                                   href="#delete{{$Section->id}}"><i class="las la-trash"></i>>--}}
{{--                                    Delete--}}
{{--                                </button>--}}

                                <button type="button" class="btn btn-danger delete-button"  <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"  data-toggle="modal" href="#delete{{$Section->id}}"> </a>
                                <i class="fas fa-trash-alt"></i> Delete
                                </button>

{{--                                <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"  data-toggle="modal" href="#delete{{$Section->id}}"><i class="las la-trash"></i></a>--}}

                                <!-- Edit Button with Edit Icon -->
                                <a href="{{route('sections.edit',$Section->id)}}"><button type="button" class="btn btn-primary"  id="dbutton" >
                                        <i class="fas fa-edit"></i> Edit
                                    </button></a>

                            </div>
                        </td>
                        </tr>

                        <!-- Modal for delete -->
{{--                        <div id="myModal" class="modal2">--}}
{{--                            <div class="modal-content2">--}}
{{--                                <form action="{{ route('Section')}}" method="post">--}}
{{--                                    @csrf--}}
{{--                                    <div class="modal-body">--}}
{{--                                        <input type="text" name="filename" value="{{$Section->name}}">--}}
{{--                                        <input type="text" name="id" value="{{$Section->id}}">--}}
{{--                                        <input type="text" name="filename2" value="{{$Section->description}}">--}}
{{--                                    </div>--}}
{{--                                    <p>Are you sure?</p>--}}
{{--                                    <button id="confirmDelete" class="btn btn-danger">Yes</button>--}}
{{--                                </form>--}}
{{--                                <button id="cancelDelete" class="btn btn-secondary">Cancel</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        @include('admin.dashboard.modals_delete')

                            @endforeach
                        </tbody>
                    </table>

{{--                    @include('admin.dashboard.modals_delete')--}}

                    @section('scripts')
                        <script>
                            $('#deleteModal').on('show.bs.modal', function (event) {
                                var button = $(event.relatedTarget)
                                var id = button.data('id')
                                var url = button.data('url')

                                var modal = $(this)
                                modal.find('.modal-body').text('Are you sure you want to delete this item with ID ' + id + '?')
                                modal.find('#deleteForm').attr('action', url)
                            })
                        </script>
                    @endsection


                </div>
            </div>
            <div class="pag">

                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#" class="active">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>

            </div>

{{--            <div class="container3">--}}
{{--                <!-- Delete Button with Delete Icon -->--}}
{{--                <button type="button" class="btn btn-danger" id="dbutton">--}}
{{--                    <i class="fas fa-trash-alt"></i> Delete--}}
{{--                </button>--}}

{{--                <!-- Edit Button with Edit Icon -->--}}
{{--                <button type="button" class="btn btn-primary" id="dbutton">--}}
{{--                    <i class="fas fa-edit"></i> Edit--}}
{{--                </button>--}}
{{--            </div>--}}






        </div>

@endsection













