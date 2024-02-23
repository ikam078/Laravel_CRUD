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

            <button type="submit" class="mt-3 btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="white">
                    <path d="M11 15h2V9h3l-4-5-4 5h3z"></path>
                    <path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"></path>
                </svg></button>
        </form>

    </div>
@endsection
