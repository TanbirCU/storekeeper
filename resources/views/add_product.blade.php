
@extends('dashboard')

@section('body')


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8  mx-auto">
                <div class="card shadow">
                    <div class="card-header text-center">Add Student</div>
                    <div class="card-body">
                        <h4 class="text-success text-center">{{ Session::get('message') }}</h4>
                        <form action="{{ route('storeProduct') }}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Product Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Price</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="price">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Quantity</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="quantity">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success"  value="Add Product">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection
