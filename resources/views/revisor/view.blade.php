<x-layout>


    <form method="POST" action="{{route('revisor.become')}}" enctype="multipart/form-data">
      @csrf
      
        <div class="mt-5">
            <h2>{{__('ui.rev1')}}</h2>

            <label for="description"><h5 class="mt-3 m-5">{{__('ui.rev2')}}</h5></label>
            
          </div>

          <textarea name="description" class="mx-5" id="description" cols="80" rows="8" placeholder="{{__('ui.rev3')}}">
              
          </textarea>
          <div class="m-5">
            <label for="curriculum"><h5>{{__('ui.rev4')}}</h5></label>
            <input type="file" name="curriculum" id="curriculum">
          </div>
        <button type="submit" class="btn btn-primary mx-5">{{__('ui.rev5')}}</button>
      </form>


</x-layout>

