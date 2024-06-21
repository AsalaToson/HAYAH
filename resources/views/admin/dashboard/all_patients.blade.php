@extends('admin.parent')

@section('content')
    <div class="short" >
        <h3 class="dash">  Patients</h3>
        <div class="top"> <i class="fa fa-home" ></i> <p  class="rout"> / Patients / All Patients </p></div>
    </div>
        <div class="inner_content">
            <h3> Patient list </h3><br>
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
                            <input type="text" class="form-control" id="search" placeholder="search...">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container2">

                <div class="table-responsive">
                    <table class="table table-bordered" >
                        <thead>
                        <tr>
                            <th></th>
                            <th>Patient Image</th>
                            <th>patient Name</th>
                            <th>email</th>
                            <th>blood_type</th>
                            <th>surgical_history</th>
                            <th>allergies</th>
                            <th>chronic_diseases</th>
                            <th>Phone</th>
{{--                            <th>password</th>--}}
                            <th>age</th>
                            <th>details</th>
                            <th>gender</th>
                            <th>address</th>
                            <th>operations</th>
                        </tr>
                        </thead>
                        <tbody>
                           @foreach($patients as $Patients)
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>

                                @if($Patients->image)
                                    <img src="{{asset('Dashboard/image/mothers/'.$Patients->image->filename)}}"
                                         height="50px" width="50px" alt="">

                                @else
                                    <img src="{{asset('Dashboard/image/mothers/mohamed.jpg')}}" height="50px"
                                         width="50px" alt="">
                                @endif
                            </td>

                            <td>{{$Patients->name}}</td>
                            <td>{{$Patients->email}}</td>
                            <td>{{$Patients->blood_type}}</td>
                            <td>{{$Patients->surgical_history}}</td>
                            <td>{{$Patients->allergies}}</td>
                            <td>{{$Patients->chronic_diseases}}</td>
                            <td>{{$Patients->phone}}</td>
{{--                            <td>{{$Patients->password}}</td>--}}
                            <td>{{$Patients->age}}</td>
                            <td>{{$Patients->details}}</td>
                            <td>{{$Patients->gender}}</td>
                            <td>{{$Patients->address}}</td>

                            <td><div class="container3" style="display: flex;">
                                    <!-- Delete Button with Delete Icon -->
{{--                                    <button type="button" class="btn btn-danger delete-button"  id="dbutton" >--}}
{{--                                        <i class="fas fa-trash-alt"></i> Delete--}}
{{--                                    </button>--}}

                                    <button type="button" class="btn btn-danger delete-button"  <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"  data-toggle="modal" href="#delete{{$Patients->id}}"> </a>
                                    <i class="fas fa-trash-alt"></i> Delete
                                    </button>

                                    <!-- Edit Button with Edit Icon -->
                                    <a href="{{route('patients.edit',$Patients->id)}}"> <button type="button" class="btn btn-primary"  id="dbutton" >
                                            <i class="fas fa-edit"></i> Edit
                                        </button></a>
                                </div></td>

                        </tr>


                        <!-- Modal -->
                        <div class="modal fade" id="delete{{ $Patients->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Section</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true"></span>
                                        </button>
                                    </div>
                                    <form action="{{ route('patients.destroy',$Patients->id) }}" method="post">
                                        @method('DELETE')
                                        {{--                {{ method_field('post') }}--}}
                                        {{ csrf_field() }}
                                        <div class="modal-body">
                                            <input type="hidden" name="id" value="{{ $Patients->id }}">
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

                           @endforeach
                        </tbody>
                    </table>
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



        </div>



<!-- Modal for delete -->
{{--<div id="myModal" class="modal2">--}}
{{--    <div class="modal-content2">--}}
{{--        <form action="{{ route('patients.destroy',$Patients->id)}}" method="post">--}}
{{--            @method('DELETE')--}}
{{--            @csrf--}}
{{--            <div class="modal-body">--}}
{{--                <!--       <input type="text" name="filename" value="">    -->--}}
{{--                <input type="text" name="id" value="{{ $Patients->id }}">--}}
{{--            </div>--}}
{{--            <p>Are you sure?</p>--}}
{{--            <button id="confirmDelete" class="btn btn-danger">Yes</button>--}}

{{--        </form>--}}
{{--        <button id="cancelDelete" class="btn btn-secondary">Cancel</button>--}}
{{--    </div>--}}
{{--</div>--}}

<!--modal for search-->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5" id="exampleModalLabel" style="color: black; background-color: none;">Search Here</h2>
                <button type="button" class="btn-close" aria-label="Close" id="closeModalButton"><i class="fa fa-times" aria-hidden="true"></i>
                </button>

            </div>
            <div class="modal-body">

                <form>
                    <div class="form-group">
                        <label for="searchInput">Search:</label>
                        <input type="text" class="form-control" id="searchInput" placeholder="Search..." style="width: 400px;">
                    </div>
                    <button type="submit" class="btn btn-primary" style="padding: 1px; width: 100px; height: 40px;font-size: large;">Search</button>
                    <button type="submit" class="btn btn-primary" style="padding: 1px; width: 100px; height: 40px;font-size: large;">Cancel</button>

                </form>
            </div>
        </div>
    </div>
</div>




@endsection
