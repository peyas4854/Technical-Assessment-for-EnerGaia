@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center">
                  
                  <h2> User page </h2>
                </div>
            </div>
         <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">  Name </th>
                  <th scope="col">Product Name</th>
                 
                </tr>
              </thead>
              <tbody>

                <?php $no= 1;?>
               @foreach ($value as $values)

               @if ($values->productname == null )
                 <td colspan="3" class="text-center">No data Found</td>
                @else
               <tr>
                <th scope="row">{{ $no++ }}</th>
                
                <td>{{ $values->username }}</td>
                <td>{{ $values->productname }}</td>
               
                </tr>
               @endif
                
                
    
               @endforeach
              </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
