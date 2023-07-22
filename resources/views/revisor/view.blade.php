<x-layout>


    <form class="d-flex justify-content-center" method="POST" action="{{route('revisor.become')}}" enctype="multipart/form-data">
      @csrf
      
        <div class="mt-5 border border-3 rounded-5 p-5">
            <h2 class="text-center mb-3">{{__('ui.rev1')}}<i class="fa-solid fa-handshake fa-lg mx-4"></i></h2>
            <p class="text-center text-white fs-6 mb-5">{{__('ui.rev6')}}</p>

            <h5 class="text-center mb-3">{{__('ui.rev2')}}</h5>

            <div class="form-floating mb-5">
              <textarea class="form-control" name="description" placeholder="Leave a comment here" id="description" style="height: 100px"></textarea>
              <label for="description">{{__('ui.rev3')}}</label>
            </div>
            
            @error('description')
            <div class="alert text-danger">{{ $message }}</div>
             @enderror
            <div class="d-flex flex-column align-items-center">
              <label for="curriculum"><h5>{{__('ui.rev4')}}</h5></label>
              <input type="file" name="curriculum" id="curriculum">
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn retro mt-5 ">{{__('ui.rev5')}}</button>
            </div>
            @error('curriculum')
              <div class="alert text-danger">{{ $message }}</div>
            @enderror
          </div>

       
      </form>
      
</x-layout>

