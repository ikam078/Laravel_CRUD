@extends('admin.parent')

@section('content')
    
<div class="container d-flex justify-content-end">
    <a href="{{ route('admin.create') }}" class="btn btn-primary">create Admin</a>
</div>

{{-- table user --}}
<div class="container text-center">
    <h5 class="fw-bold">USER</h5>
    <table class="table">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Action  </th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</div>

@endsection