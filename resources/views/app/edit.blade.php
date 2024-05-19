@extends('welcome')
@section('route')

<x-slot name="title">
 
Edit Tickets

</x-slot>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">

     @if (session('status'))
         <div class="alert alert-success">{{session('status')}}</div>
     @endif


       <div class="card">
          <div class="card-header">
              <h4>
                Edit Tickets
                <a href="{{ url('tickets') }}" class="btn btn-primary float-end">Back</a>
              </h4>
          </div>
          <div class="card-body">
            
                <form action="{{ url('tickets/'.$tickets->id.'/edit') }}" method="POST">

                 @csrf
                 @method("PUT")
 
                   <div class="mb-3">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $tickets->email }}">

                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                   </div>
                   <div class="mb-3">
                            <label for="">Title</label>
                            <input class="form-control" name="title" value="{{ $tickets->title }}"/>
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                   </div>
                   <div class="mb-3">
                            <label for="">Details</label>
                            <input class="form-control" name="details" value="{{ $tickets->details }}"/>
                            @error('details')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                   </div>
                   <div class="mb-3">
                        
                            <button type="submit" class="btn btn-success">Update</button>
                   </div>

                </form>

          </div>
       </div>
    </div>
  </div>
</div>


@endsection