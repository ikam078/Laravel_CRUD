@extends('admin.parent')
@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Complete data</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('vehicle.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputName">Vehicle Type</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Type..." name="name">
                    </div>
                    <div class="form-group">
                        <label for="inputColor">Vehicle Color</label>
                        <input type="text" class="form-control" id="inputColor" placeholder="Color..." name="color">
                    </div>
                    <div class="form-group">
                        <label for="inputColor">Amount of Tires</label>
                        <input type="number" class="form-control" id="inputColor" placeholder="4" name="tire_wheel">
                    </div>
                    <div class="form-group">
                        <label for="inputMachine">Machine Model</label>
                        <input type="text" class="form-control" id="inputMachine" placeholder="Machine..."
                            name="machine">
                    </div>
                    <div class="form-group">
                        <label for="inputPrice">Determine Price</label>
                        <input type="text" class="form-control" id="inputPrice" placeholder="$..." name="price">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary float-left"><svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24"
                            fill="white">
                            <path d="M11 15h2V9h3l-4-5-4 5h3z"></path>
                            <path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"></path>
                        </svg></button>
                </div>
            </form>
        </div>
    </div>
@endsection
