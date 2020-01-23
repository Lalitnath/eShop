@extends('layouts.admin')


@section('content')
<div class="container">
    <h1>Create Address</h1>


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



    <form action="{{route('address.store')}}" method="POST" >
        @csrf

        <div class="form-group">
            <label for="">State</label>
            <input type="text" name="state" id="" class="form-control">
        </div>

        <div class="form-group">
            <label for="">City</label>
            <input type="text" name="city" id="" class="form-control">
        </div>

        <div class="form-group">
          <label for="">Full_address</label>
          <textarea class="form-control" name="full_address" id="" rows="3"></textarea>
        </div>

        <div class="form-group">
          <label for="">Mobile</label>
          <input type="number" name="mobile" id="" class="form-control">

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

</div>


@endsection
