<nav>
    <ul>
        @foreach($categories as $category)
            <li><a href="/category/{{($category->url)}}" class="link">{{$category->name}}</a></li>
        @endforeach
    </ul>
</nav>
