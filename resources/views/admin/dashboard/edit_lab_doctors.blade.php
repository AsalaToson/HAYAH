@extends('admin.parent')

@section('content')

        <h1>Edit Lab Doctors</h1>
        <div class="inner_content">
            <h3>Edit Lab Doctors</h3><br>
            <hr>

            <form id="add-patient-form" action="{{route('lab_doctors.update',$lab_doctors->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="first-name">Receptionist Name</label><br/>
                    <input type="text" id="first-name" name="name" value="{{$lab_doctors->name}}" required placeholder="Receptionist name">
                </div>


                <div class="form-group">
                    <label for="phone">Phone </label><br/>
                    <input type="tel" id="phone" name="phone" value="{{$lab_doctors->phone}}"   required placeholder="phone number">
                </div>
                <div class="form-group">
                    <label for="email">Email</label><br/>
                    <input type="email" id="email" name="email" value="{{$lab_doctors->email}}" required placeholder="Email">
                </div>

                <div class="form-group">
                    <label for="Experience">Experience</label><br/>
                    <input type="text" id="Experience" name="experience" value="{{$lab_doctors->experience}}" required placeholder="Experience">
                </div>

                <div class="form-group">
                    <label for="password">Password</label><br/>
                    <input type="text" id="password" name="password" value="{{$lab_doctors->password}}" required placeholder="password">
                </div>

                <div class="form-group">
                    <label for="age">Age</label><br/>
                    <input type="text" id="age" name="age" value="{{$lab_doctors->age}}" required placeholder="age">
                </div>

                <div class="form-group">
                    <label for="age">gender</label><br/>
                    <input type="text" id="age" name="gender" value="{{$lab_doctors->gender}}" required placeholder="gender">
                </div>

                <div class="form-group">
                    <label for="age">address</label><br/>
                    <input type="text" id="age" name="address" value="{{$lab_doctors->address}}" required placeholder="address">
                </div>

                <div class="form-group">
                    <label for="age">image</label><br/>
                    <input type="file" id="image" name="image" value="{{$lab_doctors->image}}" required placeholder="image">
                </div>

                <br>
                <div class="form-group">
                    <input type="checkbox" id="checkbox1" name="checkbox1" value="value1" >
                    <label for="checkbox1" style="font-size: large;">Please confrim</label>
                </div><br>


                <button type="submit">Edit lab_doctor</button>
            </form>


        </div>

@endsection





