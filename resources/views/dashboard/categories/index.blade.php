<a href="/dashboard/categories/create" class="btn btn-success float-right my-2">
    <i class="fa fa-plus" aria-hidden="true"></i> Create new category
</a>

<div class="list-group row">
    @foreach($categories as $category)
        @continue($category->parent != null)

        @if ($category->children->count())
            <a href="/dashboard/categories/edit/{{ $category->name }}" class="list-group-item">
                {{ ucfirst($category->name) }}

            </a>
            @foreach ($category->children as $child)
                <a href="/dashboard/categories/edit/{{ $child->name }}" class="list-group-item">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>&nbsp;&nbsp;{{ ucfirst($child->name) }}
                </a>
            @endforeach
        @else
            <a href="/dashboard/categories/edit/{{ $category->name }}" class="list-group-item">
                {{ ucfirst($category->name) }}
            </a>
        @endif
    @endforeach
</div>