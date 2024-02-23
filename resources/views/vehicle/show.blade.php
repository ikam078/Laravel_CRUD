@extends('admin.parent')

@section('content')
    <div class="card p-4">

        <label for="">Name</label>
        <input type="text" value="{{ $vehicle->name }}" class="form-control" disabled>

        <label for="">ID</label>
        <input type="text" value="{{ $vehicle->id }}" class="form-control" disabled>

        <label for="">tire</label>
        <input type="text" value="{{ $vehicle->tire_wheel }}" class="form-control" disabled>

        <label for="">machine</label>
        <input type="text" value="{{ $vehicle->machine }}" class="form-control" disabled>

        <label for="">price</label>
        <input type="text" value="{{ $vehicle->price }}" class="form-control" disabled>

    </div>
@endsection
