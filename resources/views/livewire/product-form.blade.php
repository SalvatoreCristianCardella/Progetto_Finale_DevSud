<div>
    <form wire:submit.prevent="store()">
    <div class="mb-3">
        <label for="form" class="form-label">Titolo</label>
        <input class="form-control" wire:model="title"type="title" id="title">
        @error('title') <span class="text-danger fst-italic">{{ $message }}</span> @enderror
      </div>
      <div class="mb-3">
        <label for="form" class="form-label">Descrizione</label>
        <textarea  class="form-control" wire:model="description" cols="30" rows="10" type="description" id="description"></textarea>
        @error('description') <span class="text-danger fst-italic">{{ $message }}</span> @enderror
      </div>
      {{-- IMMAGINE --}}
      {{-- <div class="mb-3">
        <label for="img" class="form-label">img</label>
        <input class="form-control" type="file" id="img">
        @error('title') <span class="text-danger fst-italic">{{ $message }}</span> @enderror
      </div> --}}
        <div class="mb-3">
          <label for="category" class="form-label">Categorie</label>
          <select wire:model.defer="category" class="form-select">
            @dump($categories)
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
        <label for="form" class="form-label">Prezzo</label>
        <input class="form-control" wire:model="price" type="price" id="price">
        @error('price') <span class="text-danger fst-italic">{{ $message }}</span> @enderror
      </div>
      <button type="submit" class="btn btn-success">Crea annuncio</button>
    </form>
</div>

