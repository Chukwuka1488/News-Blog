@extends('admin.layout.master')
@section('content')

<!-- Admin Page Wrapper -->
<div class="admin-wrapper">

    <!-- Left Sidebar -->
    <div class="left-sidebar">
        <ul>
            <li><a href="index.html">Manage Posts</a></li>
            <li><a href="../users/index.html">Manage Users</a></li>
            <li><a href="../topics/index.html">Manage Topics</a></li>
        </ul>
    </div>
    <!-- // Left Sidebar -->


    <!-- Admin Content -->
    <div class="admin-content">
        <div class="button-group">
            <a href="create.html" class="btn btn-big">Add Post</a>
            <a href="index.html" class="btn btn-big">Manage Posts</a>
        </div>


        <div class="content">

            <h2 class="page-title">Manage Posts</h2>

            <table>
                <thead>
                    <th>SN</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th colspan="3">Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>This is the first post</td>
                        <td>Awa</td>
                        <td><a href="#" class="edit">edit</a></td>
                        <td><a href="#" class="delete">delete</a></td>
                        <td><a href="#" class="publish">publish</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>This is the second post</td>
                        <td>Melvine</td>
                        <td><a href="#" class="edit">edit</a></td>
                        <td><a href="#" class="delete">delete</a></td>
                        <td><a href="#" class="publish">publish</a></td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>
    <!-- // Admin Content -->

</div>
<!-- // Page Wrapper -->



@endsection