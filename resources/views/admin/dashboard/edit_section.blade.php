@extends('admin.parent')

@section('content')

        <h1>Edit Department</h1>
        <div class="inner_content">
            <h3>Edit Department</h3><br>
            <hr>

            <form id="add-patient-form" action="{{route('sections.update',$section->id)}}" method="post">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="first-name"> Department Name</label><br/>
                    <input type="text" id="first-name" name="name" value="{{$section->name}}" required placeholder=" Doctor Name">
                </div>

                <div class="form-group">
                    <label for="address" ></label><br/>
                    <input type="hidden" id="pId" name="id" value="{{$section->id}}" required placeholder="Patient ID">
                </div>

                <div class="form-group">
                    <label for="first-name"> Department description</label><br/>
                    <input type="text" id="first-name" name="description" value="{{$section->description}}" required placeholder=" Doctor Name">
                </div>


                <div class="form-group">
                    <input type="checkbox" id="checkbox1" name="checkbox1" value="value1" >
                    <label for="checkbox1" style="font-size: large;">Please confrim</label>
                </div><br>


                <button type="submit">Edit Department</button>
            </form>

        </div>

@endsection













