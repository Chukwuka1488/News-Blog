@extends('admin.layout.master')
@section('content')

<!-- Admin Page Wrapper -->
<div class="admin-wrapper">

    <!-- Left Sidebar -->
    <div class="left-sidebar">
        <ul>
            <li><a href="../posts/index.html">Manage Posts</a></li>
            <li><a href="../users/index.html">Manage Users</a></li>
            <li><a href="index.html">Manage Topics</a></li>
        </ul>
    </div>
    <!-- // Left Sidebar -->


    <!-- Admin Content -->
    <div class="admin-content">
        <div class="button-group">
            <a href="create.html" class="btn btn-big">Add Topic</a>
            <a href="index.html" class="btn btn-big">Manage Topics</a>
        </div>


        <div class="content">

            <h2 class="page-title">Add Topic</h2>

            <form action="create.html" method="post">
                <div>
                    <label>Name</label>
                    <input type="text" name="name" class="text-input">
                </div>
                <div>
                    <label>Description</label>
                    <textarea name="description" id="body"></textarea>
                </div>

                <div>
                    <button type="submit" class="btn btn-big">Add Topic</button>
                </div>
            </form>

        </div>

    </div>
    <!-- // Admin Content -->

</div>
<!-- // Page Wrapper -->



@endsection