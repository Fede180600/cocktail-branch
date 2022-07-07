<form action="{{ route('cocktails.store') }}" method="POST">
    @csrf
    
    <label for="name">Inserisci nome</label>
    <input type="text" name="name" id="name">
    <br>
    <label for="glass_type">Inserisci tipo di bicchiere</label>
    <input type="text" name="glass_type" id="glass_type">
    <br>
    <label for="ingredients">Inserisci ingredienti</label>
    <textarea name="ingredients" id="ingredients"></textarea>
    <br>
    <label for="type_of_preparation">Inserisci tipo di preparazione</label>
    <input type="text" name="type_of_preparation" id="type_of_preparation">
    <br>
    <label for="price">Inserisci Prezzo</label>
    <input type="text" name="price" id="price">
    <br>
    <button type="submit">Invia!</button>
</form>