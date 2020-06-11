<>
    <h2>Lista de productos</h2>
    @foreach ($productosLista as $productos )
        {{ $productos->id }} - {{$productos->product}} {{$productos->price}} {{$productos->description}} <br/>
    @endforeach
</div>
