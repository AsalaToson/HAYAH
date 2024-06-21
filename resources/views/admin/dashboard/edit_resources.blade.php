@extends('admin.parent')

@section('content')

    <div class="short" >
        <h3 class="dash">  Edit Patient</h3>
        <div class="top"> <i class="fa fa-home" ></i> <p  class="rout"> / Patients / Edit Resources </p></div>
    </div>

        <div class="inner_content">
            <h3>Edit Resources</h3><br>
            <hr>
            <form id="add-patient-form" action="{{route('resources.update',$resources->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="first-name">Article Name</label><br/>
                    <input type="text" id="Article" name="name" value="{{$resources->name}}" required placeholder="Article Name">
                </div>
                <div class="form-group">
                    <label for="description"> video</label><br/>
                    <input type="file" id="desc" name="video" value="{{$resources->video}}" required placeholder="choose video ">
                </div>
                <div class="form-group">
                    <label for="first-name"> Article description</label><br/>
                    <input type="text" id="Article" name="article_description" value="{{$resources->article_description}}" required placeholder=" Article Description">
                </div>
                <div class="form-group">
                    <label for="description"> video description</label><br/>
                    <input type="text" id="desc" name="video_description" value="{{$resources->video_description}}" required placeholder=" video Description">
                </div>
                <div class="form-group">
                    <label for="image">image</label><br/>
                    <input type="file" id="art" name="image" value="{{$resources->image}}" required placeholder=" choose image" >
                </div>
                <div class="form-group">
                    <label for="image">tips_for_husband</label><br/>
                    <input type="text" id="image" name="tips_for_husband" value="{{$resources->tips_for_husband}}" required placeholder="tips_for_husband" >
                </div>

                <div class="form-group">
                    <label for="description"> image description</label><br/>
                    <input type="text" id="desc" name="image_description" value="{{$resources->image_description}}" required placeholder=" video Description">
                </div>


                <div class="form-group">
                    <input type="checkbox" id="checkbox1" name="checkbox1" value="value1" >
                    <label for="checkbox1" style="font-size: large;">Please confrim</label>
                </div><br>


                <button type="submit">Edit Resource</button>
            </form>



        </div>

@endsection

