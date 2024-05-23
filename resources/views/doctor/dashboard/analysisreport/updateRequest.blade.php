@extends('doctor.dashboard.parent')

@section('content')
<h1>Edit Analysis Report</h1>
<div class="inner_content">
    <h3>Edit Report</h3><br>
    <hr>
    <form id="add-patient-form">
        <div class="form-group">
            <label for="first-name"> Report description</label><br/>
            <input type="text" id="Article" name="Article" required placeholder=" Analysis Report Description">
        </div>
        <div class="form-group">
            <label for="image">Analysis Report</label><br/>
            <input type="file" id="art" name="art" required placeholder=" choose File" >
        </div><br>




        <div class="form-group">
            <input type="checkbox" id="checkbox1" name="checkbox1" value="value1" >
            <label for="checkbox1" style="font-size: large;">Please confrim</label>
        </div><br>


        <button type="submit">Edit Report</button>
    </form>


</div>
@endsection
