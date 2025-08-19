@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product Dashboard') }}</div>
                <div class="card-body">
                    <h1>Welcome to the Product Dashboard</h1>
                    <p>Here you can manage your products.</p>
                </div>
                <form action="{{ route('product.store') }}" method="POST" class="p-4 d-flex flex-column gap-4">
                    @csrf
                    <div class="form-group">
                        <label for="product_name">Product Name</label>
                        <input type="text" class="form-control" id="product_name" name="product_name" required>
                    </div>
                    <div class="form-group">
                        <label for="product_price">Product Price</label>
                        <input type="number" class="form-control" id="product_price" name="product_price" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label for="product_description">Product Description</label>
                        <textarea class="form-control" id="product_description" name="product_description"></textarea>
                    </div>
                   <div class="form-group">
                        <label for="product_category">Product Category</label>
                        <select class="form-control" id="product_category" name="product_category" required>
                            <option value="">-- Select Category --</option>
                            <option value="electronics">Electronics</option>
                            <option value="clothing">Clothing</option>
                            <option value="furniture">Furniture</option>
                            <option value="toys">Toys</option>
                            <option value="books">Books</option>
                            <option value="beauty">Beauty & Personal Care</option>
                            <option value="sports">Sports</option>
                            <option value="groceries">Groceries</option>
                            <option value="automotive">Automotive</option>
                            <option value="jewelry">Jewelry</option>
                            <option value="home_appliances">Home Appliances</option>
                            <option value="footwear">Footwear</option>
                            <option value="stationery">Stationery</option>
                            <option value="health">Health & Wellness</option>
                            <option value="garden">Garden & Outdoors</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
