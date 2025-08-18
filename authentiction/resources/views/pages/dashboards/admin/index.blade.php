{{-- resources/views/admin/dashboard.blade.php --}}
@extends('layouts.common.app')

@section('title', 'Admin Dashboard')

@section('page-css')
    <style>
        /* Custom styles for dashboard cards */
        .dashboard-card {
            padding: 20px;
            border-radius: 10px;
            color: #fff;
            margin-bottom: 20px;
        }
        .bg-primary { background-color: #007bff !important; }
        .bg-success { background-color: #28a745 !important; }
        .bg-warning { background-color: #ffc107 !important; color: #212529 !important; }
        .bg-danger { background-color: #dc3545 !important; }
    </style>
@endsection

@section('content')
<div class="container p-t-100">
    <h1 class="text-center p-b-40">Admin Dashboard</h1>
    <h2>Welcome, {{ Auth::user()->name }}!</h2>

    <div class="row mt-4">
        <div class="col-md-3">
            <div class="dashboard-card bg-primary text-center">
                <h5>Users</h5>
                <h3>150</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dashboard-card bg-success text-center">
                <h5>Orders</h5>
                <h3>320</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dashboard-card bg-warning text-center">
                <h5>Products</h5>
                <h3>75</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dashboard-card bg-danger text-center">
                <h5>Revenue</h5>
                <h3>$12,400</h3>
            </div>
        </div>
    </div>

    <h3 class="mt-5">Recent Orders</h3>
    <div class="table-responsive">
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#101</td>
                    <td>John Doe</td>
                    <td>$150</td>
                    <td><span class="badge bg-success">Completed</span></td>
                    <td>2025-08-17</td>
                </tr>
                <tr>
                    <td>#102</td>
                    <td>Jane Smith</td>
                    <td>$250</td>
                    <td><span class="badge bg-warning">Pending</span></td>
                    <td>2025-08-16</td>
                </tr>
                <tr>
                    <td>#103</td>
                    <td>Michael Brown</td>
                    <td>$300</td>
                    <td><span class="badge bg-danger">Cancelled</span></td>
                    <td>2025-08-15</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
