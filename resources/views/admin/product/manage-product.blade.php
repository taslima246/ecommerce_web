@extends('admin.master')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                .
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>sl no</th>
                        <th>Name</th>
                        <th>Category Name</th>
                        <th>Brand Name</th>
                        <th>price</th>
                        <th>Image</th>
                        <th>description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                  <tbody>
                  @php $i=1 @endphp
                  @foreach($products as $product)
                      <tr>
                          <td>{{ $i++ }}</td>
                          <td>{{ $product->product_name }}</td>
                          <td>{{ $product->category_name }}</td>
                          <td>{{ $product->brand_name }}</td>
                          <td>{{ $product->price }}</td>
                          <td>
                              <img src="{{ asset($product->image) }}" style="height: 50px;width: 50px" alt="">
                          </td>
                          <td>{{ $product->description }}</td>
                          <td>{{ $product->status==1?'published':'Unpublished' }}</td>
                          <td>
                              @if($product->status==1)
                                  <a href="{{ route('status',['id'=>$product->id]) }}" class="btn btn-warning">unpublished</a>
                              @else
                                  <a href="{{ route('status',['id'=>$product->id]) }}" class="btn btn-primary">published</a>
                              @endif
                                  <a href="{{ route('edit',['id'=>$product->id]) }}" class="btn btn-primary">Edit</a>
                                  <a>
                                      <form action="{{ route('delete') }}" method="post">
                                          @csrf
                                          <input type="hidden" value="{{ $product->id }}" name="product_id">
                                          <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('are you confirm delete this !!')">
                                      </form>
                                  </a>

                          </td>
                      </tr>
                  @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

