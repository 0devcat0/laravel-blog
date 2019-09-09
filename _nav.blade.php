
<div class="content">

    <div class="links">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a href="/blog-test/public/">Home</a>
            </li>
            <li class="nav-item">
                <a href="/blog-test/public/about">About</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('blog.index') }}">Blog</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Admin</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('posts.index') }}">Manage posts</a>
                    <a class="dropdown-item" href="{{ route('posts.create') }}">Create new post</a>
                    <a class="dropdown-item" href="{{ route('categories.index') }}">Categories</a>
                </div>
            </li>
        </ul>
    </div>
