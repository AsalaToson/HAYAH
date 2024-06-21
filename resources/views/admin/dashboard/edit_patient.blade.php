@extends('admin.parent')

@section('content')

    <div class="short" >
        <h3 class="dash">  Edit Patient</h3>
        <div class="top"> <i class="fa fa-home" ></i> <p  class="rout"> / Patients / Edit Patient </p></div>
    </div>
        <div class="inner_content">
            <h3>Edit Patient</h3><br>
            <hr>

            <form id="add-patient-form" action="{{route('patients.update',$patients->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="first-name">Patient Name</label><br/>
                    <input type="text" id="first-name" name="name" value="{{$patients->name}}" required placeholder="Patient name">
                </div>

                <div class="form-group">
                    <label for="email">blood_type</label><br/>
                    <input type="text" id="email" name="blood_type" value="{{$patients->blood_type}}" required placeholder="blood_type">
                </div>

                <div class="form-group">
                    <label for="email">surgical_history</label><br/>
                    <input type="text" id="email" name="surgical_history" value="{{$patients->surgical_history}}" required placeholder="surgical_history">
                </div>

                <div class="form-group">
                    <label for="email">allergies</label><br/>
                    <input type="text" id="email" name="allergies" value="{{$patients->allergies}}" required placeholder="allergies">
                </div>

                <div class="form-group">
                    <label for="email">chronic_diseases</label><br/>
                    <input type="text" id="email" name="chronic_diseases" value="{{$patients->chronic_diseases}}" required placeholder="chronic_diseases">
                </div>

                <div class="form-group">
                    <label for="address">Age</label><br/>
                    <input type="text" id="address" name="address" value="{{$patients->address}}" required placeholder="Age">
                </div>
                <div class="form-group">
                    <label for="phone">Phone </label><br/>
                    <input type="tel" id="phone" name="phone" value="{{$patients->phone}}" required placeholder="phone number">
                </div>
                <div class="form-group">
                    <label for="email">Email</label><br/>
                    <input type="email" id="email" name="email" value="{{$patients->email}}" required placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label><br/>
                    <select id="gender" name="gender" value="{{$patients->gender}}" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>

                    </select>
                </div>
                <div class="form-group">
                     <label for="password">password</label><br/>
                     <input type="text" id="Address" name="password" value="{{$patients->password}}" required placeholder="password">
                </div>

                <div class="form-group">
                    <label for="details">details</label><br/>
                    <input type="text" id="details" name="details" value="{{$patients->details}}" required placeholder="details">
                </div>

                <div class="form-group">
                     <label for="age">age</label><br/>
                    <input type="text" id="age" name="age" value="{{$patients->age}}" required placeholder="age">
                </div>



                <div class="form-group">
                    <label for="image">image</label><br/>
                    <input type="file" id="image" name="image" required placeholder="choose image" >
                </div>
                    <br>
                <div class="form-group">
                    <input type="checkbox" id="checkbox1" name="checkbox1" value="value1" >
                    <label for="checkbox1" style="font-size: large;">Please confrim</label>
                </div><br>


                <button type="submit">Edit Patient</button>
            </form>

        </div>

@endsection






