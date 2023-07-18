<div class="container">
  <div class="row">
    <div class="col-12-col-md-6">
      <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="header box-form">
          <div class="inner-header flex flex-column">
            <h2 class="mt-5">{{__('ui.form1')}}</h2>
            <div>
              <form wire:submit.prevent="store()">
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
                  <label for="img" class="form-label fs-5">{{__('ui.form5')}}</label>
                  <input class="form-control shadow @error('temporary_images.*')is-invalid @enderror" wire:model="temporary_images" multiple type="file" placeholder="{{__('ui.img')}}" id="img">
                  @error('temporary_images.*')
                    <p class="text-danger mt-2">{{$message}}</p>  
                  @enderror
                  @if (!empty($images))
                  <div class="row">
                    <div class="col-12">
                      <p>Photo Preview</p>
                      <div class="row border border-4 border-info rounded shadow py-4 ">
                        @foreach ($images as $key=>$image)
                        <div class="col my-3">
                          <div class="img-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}})"></div>
                          <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">{{__('ui.form6')}}</button>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                    
                  @endif
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
          </div> 
        </div>
      </div>
  </div>
</div>
