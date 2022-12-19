@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Product Form</h3></div>
                    <div class="card-body">
                        <form action="{{ route('update-product') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $product->id }}" name="product_id">
                            <div class="row mb-3">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputFirstName" value="{{ $product->product_name }}" name="product_name" type="text" placeholder="Enter Product Name" />
                                    <label for="inputFirstName">Product Name</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" value="{{ $product->category_name }}" name="category_name" type="text" placeholder="Enter Category Name" />
                                        <label for="inputFirstName">Category Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputLastName" name="brand_name" value="{{ $product->brand_name }}" type="text" placeholder="Enter Brand Name" />
                                        <label for="inputLastName">Brand Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" name="price" type="text" value="{{ $product->price }}" placeholder="Price" />
                                <label for="inputEmail">Price</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control"  name="description" id="" cols="30" rows="10">{{ $product->description }}</textarea>
                                <label for="inputEmail">Description</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" name="image" type="file" placeholder="Image" />
                                <img src="{{ asset($product->image) }}" style="height: 50px; width: 50px" alt="">
                            </div>

                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input type="submit" value="submit" class="form-control btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
