@extends('layouts.app')

@section('title', 'Profile')

@section('contents')
    <h1 class="mb-0">Profile</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ auth()->user()->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" placeholder="Email" value="{{ auth()->user()->email }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ auth()->user()->phone }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Address</label>
            <input type="text" name="address" class="form-control" placeholder="Address" value="{{ auth()->user()->address }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ auth()->user()->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ auth()->user()->updated_at }}" readonly>
        </div>
    </div>
@endsection



{{-- @extends('layouts.app')

@section('title', 'Show Product')

@section('contents')
    <h1 class="mb-0">Profile</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $product->title }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Price</label>
            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">product_code</label>
            <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{ $product->product_code }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $product->description }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection --}}

{{-- @extends('layouts.app')
  
@section('title', 'Profile')
  
@section('contents')
    <h1 class="mb-0">Profile</h1>
    <hr />
 
    <form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="" >
    <div class="row">
        <div class="col-md-12 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row" id="res"></div>
                <div class="row mt-2">
  
                    <div class="col-md-6">
                        <label class="labels">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="first name" value="{{ auth()->user()->name }}">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Email</label>
                        <input type="text" name="email" disabled class="form-control" value="{{ auth()->user()->email }}" placeholder="Email">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">Phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="Phone Number" value="{{ auth()->user()->phone }}">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Address</label>
                        <input type="text" name="address" class="form-control" value="{{ auth()->user()->address }}" placeholder="Address">
                    </div>
                </div>
                 
                <div class="mt-5 text-center"><button id="btn" class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
            </div>
        </div>
         
    </div>   
            
        </form>
@endsection --}}