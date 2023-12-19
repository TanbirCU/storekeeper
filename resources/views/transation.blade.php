@extends('dashboard')

@section('body')
<section class="py-5">
    <div class="container">
        <div class="col-md-12 row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <h3>Today's Sales: ৳{{ $todaySales }}</h3>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <h3>Yesterday's Sales: ৳{{ $yesterdaySales }}</h3>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <h3>This Month's Sales: ৳{{ $thisMonthSales }}</h3>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <h3>Last Month's Sales: ৳{{ $lastMonthSales }}</h3>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
        {{-- <div>
            <div>
                <h3>Today's Sales: ৳{{ $todaySales }}</h3>
            </div>
            <div>
                <h3>Yesterday's Sales: ৳{{ $yesterdaySales }}</h3>
            </div>
            <div>
                <h3>This Month's Sales: ৳{{ $thisMonthSales }}</h3>
            </div>
            <div>
                <h3>Last Month's Sales: ৳{{ $lastMonthSales }}</h3>
            </div>
        </div> --}}
    </div>
</section>

@endsection
