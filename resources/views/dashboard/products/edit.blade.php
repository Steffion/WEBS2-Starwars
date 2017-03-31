<h2>Edit product</h2>

<hr>

<div class="panel-body">

    @include('layouts.partials.errors')

    <form action="/dashboard/products/edit/{{ $product->id }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-2 col-form-label">Price</label>
            <div class="col-10">
                <input class="form-control" type="text" value="{{ $product->price }}" id="price" name="price">
            </div>
        </div>
        <div class="form-group row">
            <label for="category" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-10">
                <select id="category" name="category" class="custom-select">
                    @foreach($categories as $category)
                        <option value="{{ $category->name }}" {{ ($product->category == $category->name ? 'selected' : '') }}>{{ ucfirst($category->name) }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="category" class="col-sm-2 col-form-label">Thumbnail</label>
            <div class="col-sm-10">
                <label class="custom-file">
                    <input type="file" id="thumbnail" name="thumbnail" class="custom-file-input" accept="image/*">
                    <span class="custom-file-control"></span>
                </label>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Current Thumbnail</label>
            <div class="col-sm-10">
                <img class="img-responsive float-left" id="RO" src="data:image/*;base64,{{ $product->thumbnail }}"/>
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description"
                      rows="10">{{ $product->description }}</textarea>
        </div>
        <div class="form-group row float-left">
            <a href="/dashboard/products/delete/{{ $product->id }}" class="btn btn-danger m-2">
                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete product
            </a>
        </div>
        <div class="form-group row float-right">
            <button onclick="window.history.back()" class="btn m-2">
                <i class="fa fa-ban" aria-hidden="true"></i> Cancel
            </button>
            <button type="submit" class="btn btn-success m-2">
                <i class="fa fa-floppy-o" aria-hidden="true"></i> Save product
            </button>
        </div>
    </form>
</div>