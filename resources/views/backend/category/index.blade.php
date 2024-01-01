@extends('backend.master')

@section('title')
    Categories 
@endsection

@section('content')
 
  <div class="row">
    <div class="card border-primary">
      <img class="card-img-top" src="holder.js/100px180/" alt="">
      <div class="card-body">
        <h4 class="card-title">Categories</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th class="text-center">Category </th>
                    <th class="text-center">Products </th> 
                    <th class="text-end">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $key=> $cat)
                    <tr>
                        <td scope="row">#{{ $cat->id }}</td>
                        <td class="text-center">{{ $cat->name }}</td>
                        <td class="text-center"> <span class="btn btn-sm rounded-circle btn-secondary">{{ $cat->products->count() }}</span> </td> 
                        <td class="text-end">
                            <button class="btn btn-sm btn-primary">
                                <i class="bi bi-pencil-square"></i>
                                Edit
                            </button>
                                | 
                            <button class="btn btn-sm btn-danger">
                                <i class="bi bi-trash3-fill"></i>
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
                
                
            </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection