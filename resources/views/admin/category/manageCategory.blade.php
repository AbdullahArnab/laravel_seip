@extends('admin.master')
@section('content')
<hr/>
<h3 class="text-center text-success">{{ Session::get('message') }}</h3>
<table class="table table-hover table-bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Category Name</th>
        <th>Category Description</th>
        <th>Publication Status</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
    
    <tr>
        
        <td>{{ $category->id}}</td>
        <td>{{ $category->categoryName }}</td>
        <td>{{ $category->categoryDescription }}</td>
        <td>{{ $category->publicationStatus == 1? 'Published':'Unpublished'}}</td>
        <td>
            <a href="{{url('/category/edit/'.$category->id)}}" class="btn btn-success">
                <span class="glyphicon glyphicon-edit"></span>
            </a>
            <a href="{{url('/category/delete/'.$category->id)}}" class="btn btn-danger" onclick="return confirm('Are You Sure To Delete?')">
                <span class="glyphicon glyphicon-trash"></span>
            </a>
        </td>
        
    </tr>
    
    @endforeach
    </tbody>
    
</table>




@endsection