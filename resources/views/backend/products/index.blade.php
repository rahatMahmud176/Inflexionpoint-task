@extends('backend.master')

@section('title')
    Products
@endsection

@section('content')
    <div class="row">
        <div class="card border-primary">
            <div class="card-body pt-3">
                <h4 class="card-title d-inline">All Products</h4>
                <a href="{{ route('admin.products.create') }}" class="btn btn-sm btn-secondary float-end"><i class="bi bi-plus-circle-dotted"></i> Add
                    new</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product </th>
                            <th>Price</th>
                            <th class="text-center">Quntity</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $key => $product)
                            <tr>
                                <td scope="row">#{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td class="text-center">{{ $product->quantity }}</td>
                                <td class="text-end">
                                    <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-primary">
                                        <i class="bi bi-pencil-square"></i>
                                        Edit
                                    </a>
                                    |
                                    <button class="btn btn-sm btn-danger" onclick="deleteProduct({{ $product->id }})">
                                        <i class="bi bi-trash3-fill"></i>
                                        Delete
                                    </button> |
                                    <a href="{{ route('admin.products.purchase') }}" class="btn btn-sm btn-warning">Purchase</a>

                                    <form id="product-delete-form-{{ $product->id }}"
                                        action="{{ route('admin.products.destroy', $product->id) }}" method="POST"> 
                                        @csrf
                                        @method('DELETE') 
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('script')
<script>
    function deleteProduct(id) {
     Swal.fire({
         title: "Are you sure?",
         text: "You won't be able to revert this!",
         icon: "warning",
         showCancelButton: true,
         confirmButtonColor: "#3085d6",
         cancelButtonColor: "#d33",
         confirmButtonText: "Yes, delete it!"
         }).then((result) => {
         if (result.isConfirmed) {
            
              $('#product-delete-form-'+id).submit();
         }
         });
    }
 </script>
@endpush
