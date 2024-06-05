@extends('layouts.default')
@section('main')
    <div class="container">
        <div class="text-center">
            <h1>Supplier Register</h1>
        </div>
        <form method="POST" action="{{route('suppliers.store')}}">
            @csrf
            {{--Basic Datas--}}
            <div>
                <div class="row p-2">
                    <div>
                        <h4>Basic Datas</h4>
                    </div>
                    <div class="col-6">
                        <input name="name" id="name" type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="col-6">
                        <input name="register_code" id="register_code" type="text" class="form-control" placeholder="Register code">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-6">
                        <input name="email" id="name" type="email" class="form-control" placeholder="E-mail">
                    </div>
                    <div class="col-6">
                        <input name="phone" id="phone" type="text" class="form-control" placeholder="Phone">
                    </div>
                </div>
            </div>
            {{--Address--}}
            <div>
                <div class="row p-2">
                    <div>
                        <h4>Address</h4>
                    </div>
                    <div class="col-6">
                        <input name="country" id="country" type="text" class="form-control" placeholder="Country">
                    </div>
                    <div class="col-6">
                        <input name="zip_code" id="zip_code" type="text" class="form-control" placeholder="Zip Code">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-6">
                        <input name="state" id="state" type="text" class="form-control" placeholder="State">
                    </div>
                    <div class="col-6">
                        <input name="city" id="city" type="text" class="form-control" placeholder="City">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-5">
                        <input name="neighborhood" id="neighborhood" type="text" class="form-control" placeholder="Neighborhood">
                    </div>
                    <div class="col-5">
                        <input name="street" id="street" type="text" class="form-control" placeholder="Street">
                    </div>
                    <div class="col-2">
                        <input name="number" id="number" type="text" class="form-control" placeholder="Number">
                    </div>
                </div>
            </div>
            <br>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
