@extends('template.main-admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Contact Us</h1>
            <p>Welcome to our Contact Page!</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h2>Contact Information</h2>
            <p><strong>Address:</strong> Jl. Kalongan 4 No 19, Surabaya, Jawa Timur</p>
            <p><strong>Email:</strong> Shizukariku@gmail.com</p>
            <p><strong>Phone:</strong> +62 12345678</p>
        </div>
        <div class="col-md-6">
            <h2>Contact Form</h2>
            <form>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Enter your message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
