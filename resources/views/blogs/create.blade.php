<!-- resources/views/blogs/create.blade.php -->
<h1>Create a New Blog</h1>
<form action="{{ route('blogs.store') }}" method="POST">
    @csrf
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title"><br>
    <label for="content">Content:</label><br>
    <textarea id="content" name="content"></textarea><br>
    <button type="submit">Create Blog</button>
</form>
