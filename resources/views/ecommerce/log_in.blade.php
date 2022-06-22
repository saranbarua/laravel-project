@extends('layouts.master')
@section('content')
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-9"> <br> <br>
                <h1 class="text-center ">Create Your Account</h1>
                <form method="post" action="">
                    <div class="mb-3 row">
                        <label for="inputTilte" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputTitle" name="username" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputTilte" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputTitle" name="password" value="">
                        </div>
                    </div> <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary text-center">Submit</button>
                    </div> <br>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection