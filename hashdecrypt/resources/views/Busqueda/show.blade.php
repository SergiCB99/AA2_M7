    


@extends('plantilla.plantilla')
@section('title')
<title>Busqueda</title>
@endsection
@section('content')



<!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col" style="width: 90%;">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  PARAULA
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  ENCRIPTAT AMB
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  RESULTAT
                </th>
                
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
    @foreach(hash_algos() as $hash)

    <tr>
                
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">{{$name->palabra}} </div>
                 
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  {{$hash}}
                  </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{hash($hash, $name)}}
                </td>
                
              </tr>
        
        
    @endforeach
    </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>




    

  <h2 class="text-3xl font-bold " style="text-align: center;margin-top:20px;">Deu més buscades</h2>
  <div class="flex items-center  text-coolGray-800" >
  
  <br>
  @foreach($deuPrimers as $palabra)
  <form action="{{route('busqueda.show')}}" method="GET" class="centrar">
    <input type="hidden" name="palabra"  value="{{$palabra->palabra}}" >
    <button type="submit" class="px-5 py-1 border-b-2 border-red-600 text-red-600">
    {{$palabra->palabra}}
            </button>
    </form>
	

  @endforeach
</div>
<h2 class="text-3xl font-bold  " style="text-align: center;margin-top:20px;">Deu paraules aleatories</h2>
  <div class="flex items-center  text-coolGray-800" style="max-width: 100%;">
  
  @foreach($deuRandom as $palabra)
  <form action="{{route('busqueda.show')}}" method="GET" class="centrar">
    <input type="hidden" name="palabra"  value="{{$palabra->palabra}}" >
    <button type="submit" class="px-5 py-1 border-b-2 border-red-600 text-red-600">
    {{$palabra->palabra}}
            </button>
    </form>
	

  @endforeach
</div>

  <div class="rounded-md shadow" style="margin-top: 20px;margin-left:30px;">
              <a href="{{route('busqueda.index')}}" class="px-8 py-3 font-semibold rounded bg-coolGray-800 text-coolGray-100 centrar">
                TORNAR
              </a>
              
            </div>
            
@endsection