
<x-layout>
     <div class="container"> 
        <div class="row"> 
            <div class="col-12"> 
                <h1> {{Auth::user()->name}}</h1>
                 <table class="table table-striped"> 
                    <thead> 
                        <tr> 
                            <th scope="col">#</th> 
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">price</th> 
                            <th scope="col">category</th> 
                        </tr> 
                    </thead> 
                    <tbody> 
                        @foreach (Auth::user()->products as $product) 
                        <tr> 
                            <th scope="row">{{ $product->id }}</th> 
                            <td>{{ $product->title }}</td> 
                            <td>{{Str::limit($product->description , 25)}}</td> 
                            <td>{{ $product->price }}</td> 
                            <td>{{ $product->category->name }}</td> 
                        </tr> 
                        @endforeach 
                    </tbody> 
                </table> 
            </div> 
        </div> 
    </div> 
</x-layout>