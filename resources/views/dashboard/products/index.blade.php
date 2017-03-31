<a href="/dashboard/products/create" class="btn btn-success float-right my-2">
    <i class="fa fa-plus" aria-hidden="true"></i> Create new product
</a>

<table class="table table-hover">
    <thead>
    <tr>
        <th>Article #</th>
        <th>Productname</th>
        <th>Price</th>
        <th>Category</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <th scope="row">{{ $product->id }}</th>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }} USD</td>
            <td>{{ $product->category }}</td>
            <td><a href="/dashboard/products/edit/{{ $product->id }}"><i class="fa fa-pencil"
                                                                         aria-hidden="true"></i></a></td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $products->links() }}