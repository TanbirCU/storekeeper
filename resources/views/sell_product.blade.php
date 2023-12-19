@extends('dashboard')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-header">Sell Products</div>
                        <div class="card-body">
                            <h4 class="text-success text-center">{{ Session::get('message') }}</h4>
                            <form method="post" action="{{ route('sell') }}">
                                @csrf
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Sell Quantity</th>
                                        <th>Sale</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>
                                                <select name="product_id">
                                                    @foreach($products as $product)

                                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                    @endforeach
                                                </select>
                                            </td>


                                            <td>
                                                <input type="number" name="sell_quantity" placeholder="quantity" min="1" required>
                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-outline-primary">Sale</button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
