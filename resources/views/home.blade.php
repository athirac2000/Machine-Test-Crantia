@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">

                        <div style="text-align: center;"><h3>PRODUCT DETAILS</h3> </div>

                        <div><a href="{{url('add')}}" class="btn btn-primary" style="float: right;margin-bottom: 10px;">Add</a> </div>

                        <table class="table table-responsive table-striped table-hover table-primary">
                            <thead>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>

                            </thead>
                            <tbody>
                                @foreach($show as $item)
                                <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->description}}</td>
                                <td><img src="{{$item->image}}" width="100px" height="100px"/></td>
                                <td>
                                    <div style="display: flex;flex-direction: row;">
                                    <a href="{{url('edit/'.$item->id)}}" class="btn btn-warning">Edit</a>&nbsp;&nbsp;
                                    <form action="{{url('delete'.'/'.$item->id)}}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    </div>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
          
        </div>
    </div>
</div>
@endsection
