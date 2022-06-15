@extends('crud.app')

@section('content')
<div class="container mt-4 text-end">
        <a href="{{route('recipe.create')}}" class=" btn btn-primary">Add Data</a>
    </div>

    <div class="container mt-4">
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Calories</th>
      <th scope="col">Ingredient</th>
      <th scope="col">Description</th>
      <th scope="col">Step</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
  @forelse($recipes as $recipe)
    <tr>
      <td>
        <img src="{{$recipe->image}}" alt="this is a picture of the recipe{{$recipe->name}}" class="img-fluid">
      </td>
      <td>{{$recipe->name}}</td>
      <td>{{$recipe->calories}}</td>
      <td>{{$recipe->ingredient}}</td>
      <td>{{$recipe->description}}</td>
      <td>{{$recipe->step}}</td>

      <td class="text-center">
        <a href="#" class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
        <a href="#" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
        <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
      </td>
    </tr>
    @empty
    <tr>
        <td class="text-center" colspan="6">
            Data is Still Empty
        </td>

    </tr>


    @endforelse



@endsection