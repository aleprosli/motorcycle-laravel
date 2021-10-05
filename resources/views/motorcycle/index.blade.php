@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          @if( session()->has('alert-message'))
            <div class="alert {{ session()->get('alert-type') }}">
                {{ session()->get('alert-message') }}
            </div>
          @endif
            <div class="card">
                <div class="card-header">{{ __('Index') }}</div>

                <div class="card-body">
                    <a href={{ route('motorcycle:create') }}  type="button text-right" class="btn btn-dark">Add Motorcycle</a>
                  </div>
                  
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Type</th>
                            <th scope="col">Colour</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($motocycles as $key=>$motocycle)
                          <tr>
                            <th scope="row">{{ $key + 1}}</th>
                            <td>{{ $motocycle->type}}</td>
                            <td>{{ $motocycle->colour}}</td>
                            <td><a href={{ route('motorcycle:edit', $motocycle) }}  type="button text-right" class="btn btn-dark">Edit </a>
                              <a href={{ route('motorcycle:destroy', $motocycle) }}  type="button text-right" class="btn btn-danger">Delete </a>
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
</div>

@endsection