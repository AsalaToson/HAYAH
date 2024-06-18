@extends('admin.parent')

@section('content')

    <h1>Add Department</h1>
    <div class="inner_content">
      <h3>Add Department</h3><br>
      <hr>

      <form id="add-patient-form" action="{{route('sections.store')}}" method="post">
          @csrf
        <div class="form-group">
          <label for="first-name"> Department Name</label><br/>
          <input type="text" id="first-name" name="name" required placeholder=" Department Name">
        </div>

          <div class="form-group">
              <label for="first-name"> Department Description</label><br/>
              <input type="text" id="first-name" name="description" required placeholder=" Department Description">
          </div>


        <div class="form-group">
          <input type="checkbox" id="checkbox1" name="checkbox1" value="value1" >
          <label for="checkbox1" style="font-size: large;">Please confrim</label>
        </div><br>


        <button type="submit">Add department</button>
      </form>






  </div>

@endsection













