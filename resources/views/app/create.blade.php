@extends('welcome')
@section('route')

<x-slot name="title">
 
Add Tickets

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
                Add tickets
                <a href="{{ url('tickets') }}" class="btn btn-primary float-end">Back</a>
              </h4>
          </div>
          <div class="card-body">
            
                <form action="{{ url('tickets/create') }}" method="POST">

                 @csrf
 
                   <div class="mb-3">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}">

                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                   </div>
                   <div class="mb-3">
                            <label for="">Title</label>
                            <input class="form-control" name="title" value="{{ old('title') }}"/>
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                   </div>
                   <div class="mb-3">
                            <label for="">Details</label>
                            <textarea class="form-control" rows="3" name="details">{{ old('details')}}</textarea>
                            @error('details')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                   </div>
                   <div class="mb-3">
                        
                            <button type="submit" class="btn btn-success">Save</button>
                   </div>

                </form>

          </div>
       </div>
    </div>
  </div>
</div>


@endsection