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

            <h2 class="page-title">Manage Users</h2>

            <table>
                <thead>
                    <th>SN</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th colspan="2">Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Awa</td>
                        <td>Admin</td>
                        <td><a href="#" class="edit">edit</a></td>
                        <td><a href="#" class="delete">delete</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Melvine</td>
                        <td>Author</td>
                        <td><a href="#" class="edit">edit</a></td>
                        <td><a href="#" class="delete">delete</a></td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>
    <!-- // Admin Content -->

</div>
<!-- // Page Wrapper -->



@endsection