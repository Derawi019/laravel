@extends('layouts.dashboard')

@section('title','Add Category')

@section('content')
<form action="{{ route('dashboard.categories.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">
            Category Name
        </label>
        <input type="text" class="form-control" name="name" id="name">

    </div>
    <div class="mb-3">
        <label for="slug" class="form-label"> slug</label>
        <input type="text" class="form-control" name="slug" id="slug">

    </div>
    <div class="mb-3">
        <label for="name" class="form-label">
            Category Parent
        </label>
        <select name="parentId" id="parentId" class="form-control">
            <option value="">No Parent</option>

        </select>


    </div>
    <div class="mb-3">
        <label for="image" class="form-label">
            Image
        </label>
        <input type="file" class="form-control" name="image" id="image">

    </div>
    <div class="mt-3">
        <button type="submit" class=" btn btn-primary"> Save</button>
    </div>
</form>
@endsection
