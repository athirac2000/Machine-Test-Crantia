@extends('layouts.app')

@section('content')
<div class="container">
    <div style="margin-bottom: 10px;"> <h2>Edit product</h2></div>

    <form action="{{url('update/'.$edit->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-10">
                <label>Name: </label>
                <input type="text" name="name" class="form-control" value="{{$edit->name}}"/>

            </div>
        </div><br>
        <div class="row">
            <div class="col-10">
                <label>Description: </label>
               <textarea name="description" class="form-control" >{{$edit->description}}</textarea>

            </div>
        </div><br>
        <div class="row">
            <div class="col-10">
                <label>Image: </label>
               <input type="file" name="image" class="form-control"/><br>
               <img src="{{$edit->image}}" width="100px" height="100px"/>


            </div>
        </div><br>
        <input type="submit" class="btn btn-success" value="Update"/>
    </form>
</div>
@endsection