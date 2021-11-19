    @foreach(hash_algos() as $hash)
        <h4>{{$name->palabra}} encriptat amb {{$hash}}:</h4>
        <p>{{hash($hash, $name)}}</p>
    @endforeach

    <h4>Deu paraules mes buscades</h4>
    @foreach($deuPrimers as $palabra)
        <p>{{$palabra->palabra}}</p>
    @endforeach

    <h4>Deu paraules aleatories</h4>
    @foreach($deuRandom as $palabra)
    <p>{{$palabra->palabra}}</p>
    @endforeach
