
<x-layout>
     <div class="container"> 
        <div class="row"> 
            <div class="col-12 mt-5" style="overflow-x:auto"> 
                <h2><span class="text-capitalize">{{Auth::user()->name}}</span>{{__('ui.showprofile1')}}</h2>
                 <table class="table table-striped mt-5"> 
                    <thead> 
                        <tr> 
                            <th scope="col">N°</th> 
                            <th scope="col">{{__('ui.showprofile2')}}</th>
                            <th scope="col">{{__('ui.showprofile3')}}</th>
                            <th scope="col">{{__('ui.showprofile4')}}</th> 
                            <th scope="col">{{__('ui.showprofile5')}}</th> 
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