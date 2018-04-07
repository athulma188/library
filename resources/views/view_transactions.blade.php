@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">
              <div class="card-heading" align=center><h3>Transactions</h3></div>
              <div class="card-body">
                @if (count($trans) > 0)
                <h4>Balance : {{$bal}}</h4>
                <div class="table-bordered">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Transaction ID</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Type</th>

                        </tr>
                    </thead>
                    <tbody>
                         @foreach($trans as $tran)
                          <tr>
                              <td> {{$tran->transaction_id}} </td>
                              <td> {{date('d/m/Y',strtotime($tran->date))}} </td>
                              <td> {{$tran->amount}} </td>
                              <td> {{$tran->credit_or_debit}} </td>

                          </tr>
                         @endforeach
                   </tbody>
                  </table>
                </div>
                @else
                    <h4>No Transactions</h4>
                @endif
              </div>
        </div>
    </div>
  </div>
</div>
@endsection
