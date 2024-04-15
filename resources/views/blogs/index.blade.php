<!-- resources/views/blogs/index.blade.php -->
<h1>List of Blogs</h1>
<ul>
    @foreach ($blogs as $blog)
        <li>{{ $blog->title }}</li>
    @endforeach
</ul>
