@extends('welcome')
@section('route')

<x-slot name="title">
 
Tickets

</x-slot>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
       <div class="card">
          <div class="card-header">
              <h4>
                tickets
                <a href="{{ url('tickets/create') }}" class="btn btn-primary float-end">Add Category</a>
              </h4>
          </div>
          <div class="card-body">

              <!-- {{ $tickets }} -->


              <table class="table table-bordered table-striped">
                 <thead>

                   <tr>
                      <th>ID</th>
                      <th>Email</th>
                      <th>Title</th>
                      <th>Details</th>
                  </tr>     

                 </thead>

                 <tbody>

                   @foreach ($tickets as $item )
                        <tr>
                            <td>{{  $item ->id }}</td>
                            <td>{{  $item ->email }}</td>
                            <td>{{  $item ->title}}</td>
                            <td>{{  $item ->details }}</td>

                           

                            <td>
                              <a href=" {{ url('tickets/'.$item->id.'/edit') }} " class="btn btn-success">Edit</a>
                              <a href="{{ url('tickets/'.$item->id.'/delete') }} " class="btn btn-danger">Delete</a>
                            </td>
                            
                            
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