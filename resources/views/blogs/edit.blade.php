<!-- resources/views/blogs/edit.blade.php -->
<h1>Edit Blog</h1>
<form action="{{ route('blogs.update', $blog->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title" value="{{ $blog->title }}"><br>
    <label for="content">Content:</label><br>
    <textarea id="content" name="content">{{ $blog->content }}</textarea><br>
    <button type="submit">Update Blog</button>
</form>
