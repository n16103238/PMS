@extends('Dashboard.admin_dashboard')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-auto">

      <div class="card">
        <div class="card-header text-center">
          <h3>Medicine list </h3>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <thead class="bg-dark text-light text-center">
              <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Purchasing Price</th>
                <th>Selling Price</th>
                <th>Quantity</th>
                <th>Generic Name</th>
                <th>Company</th>
                <th>Effects</th>
                <th>Expiry Date</th>
              </tr>
            </thead>
            <tbody class="text-center">

              @foreach($medicines as $medicine)
              <tr>
                <td>{{$medicine->name}}</td>
                <td>{{$medicine->categories->name}}</td>
                <td>{{$medicine->purchase_price}}</td>
                <td>{{$medicine->selling_price}}</td>
                <td>{{$medicine->quantity}}</td>
                <td>{{$medicine->generic_name}}</td>
                <td>{{$medicine->company}}</td>
                <td>{{$medicine->effects}}</td>
                <td>{{$medicine->expiry_date}}</td>
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
