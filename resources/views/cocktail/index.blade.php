<a href="{{ route('cocktails.create')}}">Crea un nuovo cocktail</a>

@foreach ($cocktails as $cocktail)
    <h2>{{$cocktail->name}}</h2>
@endforeach