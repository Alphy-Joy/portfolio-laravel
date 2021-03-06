@extends('layouts.app')

@section('content')
<div class="m-auto w-4/5 py-24">
    <div class="text-center">
        <h1 class="text-5xl uppercase bold">
            Cars
        </h1>
    </div>
<div class="pt-10">
    <a class="border-b-2 pb-2 border-dotted italic text-gray-500" href="cars/create">Add New Car &rarr;</a>
</div>
@foreach ($cars as $car)

<div class="w-5/6 py-10">
    <div class="m-auto">
        <div class="float-right">
            <a class="border-b-2 pb-2 border-dotted text-green-500 italic" href="cars/{{ $car->id }}/edit">Edit</a>
        </div>
        <form action="/cars/{{ $car->id }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="border-b-2 pb-2 border-dotted text-red-500 italic">Delete {{ $car->name }}</button>
        </form>
        <span class="uppercase text-blue-500 font-bold text-xs italic">
            Founded : {{ $car->founded }}
        </span>
        <h2 class="text-gray-700 text-5xl">
            <a href="cars/{{ $car->id }}">
                {{ $car->name }}
            </a>
           
        </h2>
        <p class="text-lg text-gray-700 py-6">
          {{ $car->description }}
        </p>
        <hr class="mt-4 mb-8">
    </div>
</div>
@endforeach


</div>
@endsection