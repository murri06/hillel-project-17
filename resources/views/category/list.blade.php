<x-layout>
    <h2>Showing items from 4 to 7</h2>
    <table class="table table-striped">
        <tr>
            <th>Name</th>
            <th>Description</th>
        </tr>
        @foreach ($filtered as $category)
            <tr>
                <td><a href="/category/c/{{$category->id}}">{{$category->name}}</a></td>
                <td>{{$category->description}}</td>
            </tr>
        @endforeach
    </table>
    <h2>Showing full list of items</h2>
    <table class="table table-striped">
        <tr>
            <th>Name</th>
            <th>Description</th>
        </tr>
        @foreach ($categories as $category)
            <tr>
                <td><a href="/category/update/{{$category->id}}">{{$category->name}}</a></td>
                <td>{{$category->description}}</td>
            </tr>
        @endforeach
    </table>
    <div>
        <a href="/category/create" class="btn btn-primary">Create</a>
        <a href="/category/update" class="btn btn-secondary">Update</a>
        <a href="/category/delete" class="btn btn-danger">Delete</a>
    </div>
</x-layout>
