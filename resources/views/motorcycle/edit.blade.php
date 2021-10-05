@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Motorcycle') }}</div>
                <form method="POST" action="{{ route('motorcycle:update', $motocycle) }}">
                    @csrf
                    <div class="card-body">
                    <div class="mb-3">
                        <label for="type" class="form-label">Type </label>
                        <input type="name" class="form-control" id="type" name="type" value="{{ old('type')}}" >
                    </div>

                    <div class="mb-3">
                        <label for="colour" class="form-label">Colour </label>
                        <input type="name" class="form-control" id="colour" name="colour" value="{{ old('colour') }}" >
                    </div>

                    <button type="submit" class="btn btn-dark">Submit</a>
                <form>
                </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection