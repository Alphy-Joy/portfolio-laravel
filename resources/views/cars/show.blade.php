@extends('layouts.app')

@section('content')
<div class="m-auto w-4/5 py-24">
    <div class="text-center">
        <h1 class="text-5xl uppercase bold">
            {{ $car->name }}
        </h1>
    </div>



<div class="w-5/6 py-10">
    <div class="m-auto">
        
        <span class="uppercase text-blue-500 font-bold text-xs italic">
            Founded : {{ $car->founded }}
        </span>
        <p class="text-lg text-gray-700 py-6">
          {{ $car->description }}
        </p>
        <table>
            <tr>
                <th>Models</th>
                <th>Engines</th>
            </tr>
            @forelse ($car->carModels as $model )
            <tr>
                <td>
                    {{ $model->model_name }}
                </td>
                <td>
                    @foreach ($car->engines as $engine)
                    @if ($model->id == $engine->model_id)
                        {{ $engine->engine_name }}
                        
                    @endif
                        
                    @endforeach
                </td>
            </tr>
                
            @empty
                <p>No models are found</p>
            @endforelse
        </table>

        @forelse ($car->products as $product)
            {{ $product->name }}
        @empty
            <p>No products found</p>
        @endforelse
        <hr class="mt-4 mb-8">
    </div>

</div>
</div>
@endsection