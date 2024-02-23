@extends('admin.parent')

@section('content')
    <div class="card p-4">

        <form action="{{ route('vehicle.update', $vehicle->id) }}" method="POST">
            @csrf
            @method('PUT')

            {{-- method post = create --}}
            {{-- method delete = delete --}}
            {{-- method put = update --}}
            {{-- method patch = update --}}

            <label for="">Name update</label>
            <input type="text" value="{{ $vehicle->name }}" class="form-control" name="name">
            
            <button type="submit" class="mt-3 btn btn-warning">update</button>
        </form>

    </div>
@endsection