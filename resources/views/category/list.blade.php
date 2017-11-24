ma liste de categories...
@foreach($categories as $category)
    <p>This is Category : {{ $category->label }}</p>
@endforeach