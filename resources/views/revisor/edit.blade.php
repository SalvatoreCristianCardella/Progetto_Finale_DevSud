<x-layout>
    <div class="container">
        <div class="row">
            <div class="col 12 col-md-6">
                
                <h2>lista annunci accettati</h2>
                
                <table class="table table-striped"> 
                    <thead> 
                        <tr> 
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">price</th> 
                            <th scope="col">category</th> 
                            <th scope="col">reject</th> 
                        </tr> 
                    </thead> 
                    <tbody> 
                        @forelse ($products_accepted as $product) 
                        <tr> 
                            <td>{{ $product->title }}</td> 
                            <td>{{ $product->description }}</td> 
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
            <div class="col 12 col-md-6">
                
                <h2>lista annunci rifiutati</h2>
                
                <table class="table table-striped"> 
                    <thead> 
                        <tr> 
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">price</th> 
                            <th scope="col">category</th> 
                            <th scope="col">accept</th> 
                        </tr> 
                    </thead> 
                    <tbody> 
                        @forelse ($products_rejected as $product) 
                        <tr> 
                            
                            <td>{{ $product->title }}</td> 
                            <td>{{ $product->description }}</td> 
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