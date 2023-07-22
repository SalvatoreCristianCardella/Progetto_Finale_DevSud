<div class="backgroundLinear min-vh-100">
  
  <!--Content before waves-->
  <div class="inner-header-form">
    <div class="row w-100">
      <h2 class="margin-title">{{__('ui.form1')}}</h2>
      
      <div class="col-12 col-md-6 d-flex justify-content-center pe-0">
        <form class="d-flex" wire:submit.prevent="store()">
          <div>
            <div class="mb-3">
              <label for="form" class="form-label fs-5">{{__('ui.form2')}}</label>
              <input class="form-control" wire:model="title"type="title" id="title">
              @error('title') <span class="text-danger fst-italic">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="form" class="form-label fs-5">{{__('ui.form4')}}</label>
              <textarea  class="form-control" wire:model="description" cols="30" rows="9" type="description" id="description"></textarea>
              @error('description') <span class="text-danger fst-italic">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="category" class="form-label fs-5">{{__('ui.form7')}}</label>
              <select wire:model.defer="category" class="form-select">              
                @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                  
                  >{{ $category->name }}</option>
                  @endforeach
                </select>
                @error('category_id') <span class="text-danger fst-italic">{{$message}}</span> @enderror
              </div>
              <div class="mb-3">
                <label for="form" class="form-label fs-5">{{__('ui.form8')}}</label>
                <input class="form-control" wire:model="price" type="price" id="price">
                @error('price') <span class="text-danger fst-italic">{{ $message }}</span> @enderror
              </div>
              <button type="submit" class="retro">{{__('ui.form9')}}</button>
            </div>
          </div>
          
          {{-- form immagini con anteprima --}}
         
          <div class="col-12 col-md-5 d-flex justify-content-center pe-0">
            <div>
              <div class="mb-3">
                <label for="img" class="form-label fs-5">{{__('ui.form5')}}</label>
                <input class="form-control shadow @error('temporary_images.*')is-invalid @enderror" wire:model="temporary_images" multiple type="file" placeholder="{{__('ui.img')}}" id="img">
                @error('temporary_images.*')
                <p class="text-danger mt-2">{{$message}}</p>  
                @enderror
                @if (!empty($images))
                <div class="row">
                  <p class="text-white mt-3">{{__('ui.photoP')}}</p>
                  <div class="col-12 d-flex flex-wrap justify-content-center">               
                    
                    @foreach ($images as $key=>$image)
                    
                    <div class="d-flex flex-column">
                      <div class="img-preview rounded mx-2" style="background-image: url({{$image->temporaryUrl()}});">   
                        <button type="button" class="button-delete-form" wire:click="removeImage({{$key}})">
                          <svg viewBox="0 0 448 512" class="svgIcon"><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path></svg>
                          
                        </button>
                      </div>
                      
                      
                      
                    </div>
                    
                    
                    
                    @endforeach
                  </div>
                </div>
            @endif

              </div>
            </div>
          </div>
        </div> 
      </form> 
    </div>
  </div>
  <!--Header ends-->
    



