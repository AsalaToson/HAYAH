@extends('admin.parent')

@section('content')

        <h1>Add Patient</h1>
        <div class="inner_content">
            <h3>Add Patient</h3><br>
            <hr>

            <form id="add-patient-form" action="{{route('patients.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="first-name">Patient Name</label><br/>
                    <input type="text" id="first-name" name="name" required placeholder="Patient name">
                </div>

                <div class="form-group">
                    <label for="details">blood_type</label><br/>
                    <input type="text" id="details" name="blood_type" required placeholder="blood_type">
                </div>

                <div class="form-group">
                    <label for="details">surgical_history</label><br/>
                    <input type="text" id="details" name="surgical_history" required placeholder="surgical_history">
                </div>

                <div class="form-group">
                    <label for="details">allergies</label><br/>
                    <input type="text" id="details" name="allergies" required placeholder="allergies">
                </div>

                <div class="form-group">
                    <label for="details">chronic_diseases</label><br/>
                    <input type="text" id="details" name="chronic_diseases" required placeholder="chronic_diseases">
                </div>


                <div class="form-group">
                    <label for="phone">Phone </label><br/>
                    <input type="tel" id="phone" name="phone"  required placeholder="phone number">
                </div>
                <div class="form-group">
                    <label for="email">Email</label><br/>
                    <input type="email" id="email" name="email" required placeholder="Email">
                </div>
{{--                <div class="form-group">--}}
{{--                    <label for="gender">Gender</label><br/>--}}
{{--                    <select id="gender" name="gender" required>--}}
{{--                        <option value="male">Male</option>--}}
{{--                        <option value="female">Female</option>--}}
{{--                        <option value="other">Other</option>--}}

{{--                    </select>--}}
{{--                </div>--}}

                <div class="form-group">
                    <label for="Address">Address</label><br/>
                    <input type="text" id="Address" name="address" required placeholder="Address">
                </div>

                <div class="form-group">
                    <label for="password">password</label><br/>
                    <input type="text" id="Address" name="password" required placeholder="password">
                </div>

                <div class="form-group">
                    <label for="age">age</label><br/>
                    <input type="text" id="age" name="age" required placeholder="age">
                </div>

                <div class="form-group">
                    <label for="details">details</label><br/>
                    <input type="text" id="details" name="details" required placeholder="details">
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


                <button type="submit">Add patient</button>
            </form>

        </div>

@endsection

