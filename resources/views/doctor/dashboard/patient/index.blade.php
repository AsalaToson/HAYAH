@extends('doctor.dashboard.parent')

@section('content')
    <h1>All patients</h1>
    <div class="inner_content">
        <h3>patients list </h3><br>
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
                        <input type="text" class="form-control" id="search" placeholder="search ...">
                    </div>
                </div>
            </div>
        </div>

        <div class="container2">

            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>


                        <th>Patient Name</th>
{{--                        <th></th>--}}
{{--                        <th>Problem</th>--}}
                        <th>operations</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if (isset($patients))
                        @foreach ($patients as $patient)
                    <tr>

                        <td>{{$patient->name}}</td>
{{--                        <td>{{$patient->details}}</td>--}}
{{--                        <td>10 </td>--}}

{{--                        <td>Viral Fever</td>--}}
                        <td><div class="container3" style="display: flex;">



                                <a href="../Medical_Reports/medical_report_details.html"> <button type="button" class="btn btn-primary"  id="dbutton" >

                                        <i class="fa far fa-eye" aria-hidden="true"></i> Report
                                    </button></a>
                            </div></td>
                    </tr>
                        @endforeach
                    @endif
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
@endsection
