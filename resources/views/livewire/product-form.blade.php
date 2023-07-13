
<div class="d-flex flex-column justify-content-center align-items-center">
  <h2 class="mt-5">Inserisci il tuo annuncio</h2>
    <div class="header box-form">
      
    <!--Content before waves-->
    <div class="inner-header flex flex-column">
      <!--Waves Container-->
    <div>
    
      
      <form wire:submit.prevent="store()">
        <div class="mb-3">
            <label for="form" class="form-label fs-5">Titolo</label>
            <input class="form-control" wire:model="title"type="title" id="title">
            @error('title') <span class="text-danger fst-italic">{{ $message }}</span> @enderror
          </div>
          <div class="mb-3">
            <label for="form" class="form-label fs-5">Descrizione</label>
            <textarea  class="form-control" wire:model="description" cols="30" rows="9" type="description" id="description"></textarea>
            @error('description') <span class="text-danger fst-italic">{{ $message }}</span> @enderror
          </div>
          {{-- IMMAGINE --}}
          {{-- <div class="mb-3">
            <label for="img" class="form-label fs-5">img</label>
            <input class="form-control" type="file" id="img">
            @error('title') <span class="text-danger fst-italic">{{ $message }}</span> @enderror
          </div> --}}
            <div class="mb-3">
              <label for="category" class="form-label fs-5">Categorie</label>
              <select wire:model.defer="category" class="form-select">
              
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                        {{-- @if ( in_array($category->id, $categoryAll) )
                            selected
                        @endif --}}
                        >{{ $category->name }}</option>
                @endforeach
            </select>
              @error('category_id') <span class="text-danger fst-italic">{{$message}}</span> @enderror
            </div>
          <div class="mb-3">
            <label for="form" class="form-label fs-5">Prezzo</label>
            <input class="form-control" wire:model="price" type="price" id="price">
            @error('price') <span class="text-danger fst-italic">{{ $message }}</span> @enderror
          </div>
          <button type="submit" class="btn btn-success">Crea annuncio</button>
        </form>
      </div>
      <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
      viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
      <defs>
      <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
      </defs>
      <g class="parallax">
        <use xlink:href="#gentle-wave" x="48" y="0" fill="#3c6e71" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="#d9d9d9" />
        <use xlink:href="#gentle-wave" x="48" y="7" fill="#284b63" />
        <use xlink:href="#gentle-wave" x="48" y="3" fill="#ffffff" />
      </g>
      </svg>
      </div>
      <!--Waves end-->  
    </div>
    
    
    
 
  
</div>






