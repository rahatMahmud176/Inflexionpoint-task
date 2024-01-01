@extends('backend.master')

@section('title')
    Product Add  
@endsection

@section('content') 
  <div class="row"> 
        <div class="card text-left col-md-12"> 
          <div class="card-body pt-3">
            <div class="mb-3"> 
            
            <h4 class="card-title d-inline "> Product Add Form</h4> 
            <a href="{{ route('admin.products.index') }}" class="btn btn-sm btn-danger float-end">
              <i class="bi bi-arrow-left-square-fill"></i>
              Back
            </a>
          </div>
            <form action="{{ isset($product) ? route('admin.products.update',$product) :
                                               route('admin.products.store') }}" method="POST">

                @csrf
                @isset($product)
                    @method('PUT')
                @endisset 

               <div class="form-group">
                 <label for="">Product Name :</label>
                 <input type="text" name="name" 
                 id="" class="form-control @error('name') is-invalid @enderror"
                  value=" {{ isset($product)? $product->name :  old('name') }}" aria-describedby="helpId">
                  @error('name') <small class="text-danger"> {{ $message }}</small> @enderror
                </div>

                <div class="form-group mt-3">
                  <label for="">Category select</label>
                  <select class="form-control select2" name="categories[]" multiple id="">
                    @foreach($categories as $category) 
                          <option 
                             @isset($product)
                                @foreach ($product->categories as $cat)
                                {{ $category->id == $cat->id ? 'selected':'' }} 
                               @endforeach
                             @endisset
                          value="{{ $category->id }}">{{ $category->name }}</option>  
                    @endforeach 
                  </select>
                  @error('categories') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="row">
                  
                <div class="form-group col-md-6 mt-3">
                  <label for="">Quantity :</label>
                  <input type="number" name="quantity" id=""
                   class="form-control @error('quantity') is-invalid @enderror" 
                   value="{{ isset($product)? $product->quantity : old('quantity') }}"
                   aria-describedby="helpId">
                   @error('quantity') <small class="text-danger">{{ $message }}</small> @enderror
              </div>
              <div class="form-group col-md-6 mt-3">
                  <label for="">Price :</label>
                  <input type="number" name="price" id="" 
                  class="form-control @error('price') is-invalid @enderror" 
                  value="{{ isset($product)? $product->price : old('price') }}"
                  aria-describedby="helpId">
                  @error('price') <small class="text-danger">{{ $message }}</small> @enderror
              </div>
                </div>

                <button class="btn btn-primary mt-5">Save</button>

            </form>
             
          </div>
        </div>
  </div>
@endsection

@push('script')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script >
  $(document).ready(function() {
    $('.select2').select2();
});
</script>
@endpush