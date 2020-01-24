@extends('layouts.admin')


@section('content')
<div class="container">
    <h1>Edit Address</h1>

    <form action="{{route('address.update', $address->id)}}" method="POST" >
        @csrf
        @method('put')




        <div class="form-group">
            <label for="">State</label>
            <input type="text" name="state" id="" class="form-control" value="{{$address->state}}">
        </div>

        <div class="form-group">
            <label for="">City</label>
            <input type="text" name="city" id="" class="form-control"value="{{$address->city}}">
        </div>

        <div class="form-group">
          <label for="">Full_address</label>
          <textarea class="form-control" name="full_address" id="" rows="3">{{$address->full_address}}</textarea>
        </div>

        <div class="form-group">
          <label for="">Mobile</label>
          <input type="number" name="mobile" id="" value="{{$address->mobile}}" class="form-control">

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>



    </form>

</div>


@endsection
