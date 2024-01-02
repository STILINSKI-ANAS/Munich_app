@extends('layouts.admin')

@section('content')
    <div class="rbt-dashboard-content bg-color-white rbt-shadow-box mb--60">
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h4 class="rbt-title-style-3">Admin Users</h4>
                        <p class="mb-0">Here you can manage the admin users.</p>
                        <br>
                    </div>
                </div>
            </div>
            <div class="row gy-5">
                <div class="col-lg-12">
                    <!-- Users Table -->
                    <div class="rbt-dashboard-table table-responsive">
                        <table class="rbt-table table table-borderless">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role_as == 1 ? 'Admin' : 'User' }}</td>
                                    <td>
                                        <form method="post" action="{{ url('admin/Users/SetAdmin/'.$user->id) }}">
                                            @csrf
                                            <button type="submit"
                                                    title="{{ $user->role_as == 1 ? 'Revoke Admin' : 'Make Admin' }}"
                                                    class="btn btn-md {{ $user->role_as == 1 ? 'btn-danger' : 'btn-success' }}">
                                                <i class="fas {{ $user->role_as == 1 ? 'fa-user-slash' : 'fa-user-shield' }}" style="margin-right: 5px;"></i>
                                                <span>{{ $user->role_as == 1 ? 'Revoke Admin' : 'Make Admin' }}</span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
