@extends('admin.parent')

@section('content')
    <div class="card">
        <h1 class="m-3">Category index</h1>

        <hr>

        <div class="container d-flex justify-content-end">
            <a href="{{ route('vehicle.create') }}" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="white">
                    <path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path>
                </svg></a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <th>
                <tr class="text-center text-bold">
                    <td>No</td>
                    <td>Name</td>
                    <td>Action</td>
                </tr>
            </th>
            <tbody>
                @foreach ($vehicle as $row)
                    <tr class="text-center align-items-center">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->name }}</td>
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('vehicle.show', $row->id) }}" class="mx-2 btn btn-info"><svg fill="white"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M14 12c-1.095 0-2-.905-2-2 0-.354.103-.683.268-.973C12.178 9.02 12.092 9 12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-.092-.02-.178-.027-.268-.29.165-.619.268-.973.268z">
                                    </path>
                                    <path
                                        d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z">
                                    </path>
                                </svg></a>
                            <a href="{{ route('vehicle.edit', $row->id) }}" class="mx-2 btn btn-warning">update</a>
                            <form action="{{ route('vehicle.destroy', $row->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="mx-2 btn btn-danger">
                                    <svg fill="white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                        </path>
                                        <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                                    </svg></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
