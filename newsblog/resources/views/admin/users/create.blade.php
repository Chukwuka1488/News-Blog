@extends('admin.layout.master')
@section('content')


<!-- Admin Page Wrapper -->
<div class="admin-wrapper">
    <!-- Left Sidebar -->
    <div class="left-sidebar">
        <ul>
            <li><a href="../posts/index.html">Manage Posts</a></li>
            <li><a href="index.html">Manage Users</a></li>
            <li><a href="../topics/index.html">Manage Topics</a></li>
        </ul>
    </div>
    <!-- // Left Sidebar -->

    <!-- Admin Content -->
    <div class="admin-content">
        <div class="button-group">
            <a href="create.html" class="btn btn-big">Add User</a>
            <a href="index.html" class="btn btn-big">Manage Users</a>
        </div>

        <div class="content">
            <h2 class="page-title">Add User</h2>

            <form action="create.html" method="post">
                <div>
                    <label>Username</label>
                    <input type="text" name="username" class="text-input" />
                </div>
                <div>
                    <label>Email</label>
                    <input type="email" name="email" class="text-input" />
                </div>
                <div>
                    <label>Password</label>
                    <input type="password" name="password" class="text-input" />
                </div>
                <div>
                    <label>Password Confirmation</label>
                    <input type="password" name="passwordConf" class="text-input" />
                </div>
                <div>
                    <label>Role</label>
                    <select name="role" class="text-input">
                        <option value="Author">Author</option>
                        <option value="Admin">Admin</option>
                    </select>
                </div>

                <div>
                    <button type="submit" class="btn btn-big">Add User</button>
                </div>
            </form>
        </div>
    </div>
    <!-- // Admin Content -->
</div>
<!-- // Page Wrapper -->
@endsection