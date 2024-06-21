@extends('admin.parent')

@section('content')

    <div class="short" >
        <h3 class="dash">  Patients</h3>
        <div class="top"> <i class="fa fa-home" ></i> <p  class="rout"> / Patients / All Resources </p></div>
    </div>
        <div class="inner_content">
            <h3> Resources list </h3><br>
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
                            <th>Article name</th>
                            <th>Article Description</th>
                            <th>image</th>
                            <th>image Description</th>
                            <th> video</th>
                            <th>video Description</th>
                            <th>Tips for husband</th>
                            <th>operations</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($resources as $Resources)
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>{{$Resources->name}}</td>
                            <td>{{$Resources->article_description}}</td>
                            <td>{{$Resources->image}}</td>
                            <td>{{$Resources->image_description}}</td>
                            <td>{{$Resources->video_description}}</td>
                            <td>{{$Resources->video}}</td>
                            <td>{{$Resources->tips_for_husband}}</td>

                            <td><div class="container3" style="display: flex;">
                                    <!-- Delete Button with Delete Icon -->
                                    <button type="button" class="btn btn-danger delete-button"  id="dbutton"   >
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </button>


                                    <!-- Edit Button with Edit Icon -->
                                    <a href="{{route('resources.edit',$Resources->id)}}"><button type="button" class="btn btn-primary"  id="dbutton" >
                                            <i class="fas fa-edit"></i> Edit
                                        </button></a>
                                </div></td>

                        </tr>



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
<div id="myModal" class="modal2">
    <div class="modal-content2">
        <form action="{{ route('resources.destroy',$Resources->id)}}" method="post" >
            @method('DELETE')
            @csrf
            <div class="modal-body">
                <!--       <input type="text" name="filename" value="">    -->
                <input type="text" name="id" value="{{ $Resources->id }}" >
            </div>
            <p>Are you sure?</p>
            <button id="confirmDelete" class="btn btn-danger">Yes</button>

        </form>
        <button id="cancelDelete" class="btn btn-secondary">Cancel</button>
    </div>
</div>

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

