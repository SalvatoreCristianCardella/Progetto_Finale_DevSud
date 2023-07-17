<x-layout>
    <div class="container">
        <div class="row d-flex justify-content-around">
            <div class="col 12 col-md-4">
                
                <h2>Lista annunci accettati</h2>
                
                <table class="table table-striped " style="overflow-x:auto"> 
                    <thead> 
                        <tr> 
                            <th scope="col">Titolo</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Prezzo</th> 
                            <th scope="col">Categoria</th> 
                            <th scope="col">Rifiuta</th> 
                        </tr> 
                    </thead> 
                    <tbody> 
                        @forelse ($products_accepted as $product) 
                        <tr> 
                            <td>{{ $product->title }}</td> 
                            <td>{{Str::limit($product->description , 25)}}</td>
                            <td>{{ $product->price }}</td> 
                            <td>{{ $product->category->name }}</td>
                            <td>
                                <form action="{{route('revisor.reject',['product'=>$product])}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-success shadow">Rifiuta</button>
                                </form>
                                
                            </td>
                            
                        </tr> 
                        @empty
                        
                        @endforelse
                    </tbody> 
                </table> 
                
            </div>
            <div class="col 12 col-md-4">
                
                <h2>Lista annunci rifiutati</h2>
                
                <table class="table table-striped" style="overflow-x:auto"> 
                    <thead> 
                        <tr> 
                            <th scope="col">Titolo</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Prezzo</th> 
                            <th scope="col">Categoria</th> 
                            <th scope="col">Accetta</th> 
                        </tr> 
                    </thead> 
                    <tbody> 
                        @forelse ($products_rejected as $product) 
                        <tr> 
                            
                            <td>{{ $product->title }}</td> 
                            <td>{{Str::limit($product->description , 25)}}</td> 
                            <td>{{ $product->price }}</td> 
                            <td>{{ $product->category->name }}</td>
                            <td>
                                <form action="{{route('revisor.accept',['product'=>$product])}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-success shadow">Accetta</button>
                                </form>
                                
                            </td>
                            
                        </tr> 
                        @empty
                        
                        @endforelse
                    </tbody> 
                </table> 
                
            </div>
        </div>
    </div>
    
    
</x-layout>