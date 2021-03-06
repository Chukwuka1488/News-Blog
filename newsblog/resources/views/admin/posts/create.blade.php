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

            <form action="create.html" method="post">
                <div>
                    <label>Title</label>
                    <input type="text" name="title" class="text-input">
                </div>
                <div>
                    <label>Body</label>
                    <textarea name="body" id="body"></textarea>
                </div>
                <div>
                    <label>Image</label>
                    <input type="file" name="image" class="text-input">
                </div>
                <div>
                    <label>Topic</label>
                    <select name="topic" class="text-input">
                        <option value="Poetry">Poetry</option>
                        <option value="Life Lessons">Life Lessons</option>
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-big">Add Post</button>
                </div>
            </form>

        </div>

    </div>
    <!-- // Admin Content -->

</div>
<!-- // Page Wrapper -->




@endsection