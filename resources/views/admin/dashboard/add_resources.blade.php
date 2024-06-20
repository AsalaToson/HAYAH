@extends('admin.parent')

@section('content')


        <h1>Add Resources</h1>
        <div class="inner_content">
            <h3>Add Resources</h3><br>
            <hr>

            <form id="add-patient-form" action="{{route('resources.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="first-name">Article Name</label><br/>
                    <input type="text" id="Article" name="name" required placeholder="Article Name">
                </div>
                <div class="form-group">
                    <label for="description"> video</label><br/>
                    <input type="file" id="desc" name="video" required placeholder="choose video ">
                </div>
                <div class="form-group">
                    <label for="first-name"> Article description</label><br/>
                    <input type="text" id="Article" name="article_description" required placeholder=" Article Description">
                </div>
                <div class="form-group">
                    <label for="description"> video description</label><br/>
                    <input type="text" id="desc" name="video_description" required placeholder=" video Description">
                </div>
                <div class="form-group">
                    <label for="image">image</label><br/>
                    <input type="file" id="art" name="image" required placeholder=" choose image" >
                </div>
                <div class="form-group">
                    <label for="image">tips_for_husband</label><br/>
                    <input type="text" id="image" name="tips_for_husband" required placeholder="tips_for_husband" >
                </div>

                <div class="form-group">
                    <label for="description"> image description</label><br/>
                    <input type="text" id="desc" name="image_description" required placeholder=" video Description">
                </div>



                <br>


                <div class="form-group">
                    <input type="checkbox" id="checkbox1" name="checkbox1" value="value1" >
                    <label for="checkbox1" style="font-size: large;">Please confrim</label>
                </div><br>


                <button type="submit">Add Resource</button>
            </form>


        </div>

@endsection




