@extends('layouts.app')

@section('content')
<div class="container">
    <div style="margin-bottom: 10px;"> <h2>Add products</h2></div>

    <form action="{{url('store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-10">
                <label>Name: </label>
                <input type="text" name="name" class="form-control"/>

            </div>
        </div><br>
        <div class="row">
            <div class="col-10">
                <label>Description: </label>
               <textarea name="description" class="form-control"></textarea>

            </div>
        </div><br>
        <div class="row">
            <div class="col-10">
                <label>Image: </label>
               <input type="file" name="image" class="form-control"/>


            </div>
        </div><br>
        <input type="submit" class="btn btn-success"/>
    </form>
</div>
@endsection