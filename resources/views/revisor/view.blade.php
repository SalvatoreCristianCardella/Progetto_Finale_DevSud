<x-layout>

    <form method="POST" action="{{route('revisor.become')}}" enctype="multipart/form-data">
      @csrf
        <div class="mt-5">
            <h2>Diventa revisore</h2>

            <label for="description"><h5 class="mt-3 m-5">Scrivi la tua lettera di presentazione</h5></label>
            
          </div>

          <textarea name="description" class="mx-5" id="description" cols="80" rows="8" placeholder="Descriviti">
          </textarea>
          @error('description')
                        <div class="alert text-danger">{{ $message }}</div>
           @enderror
          <div class="m-5">
            <label for="curriculum"><h5>Carica il tuo curriculum vitae</h5></label>
            <input type="file" name="curriculum" id="curriculum">
          </div>
          @error('curriculum')
            <div class="alert text-danger">{{ $message }}</div>
          @enderror
        <button type="submit" class="btn btn-primary mx-5">Invia richiesta</button>
      </form>


</x-layout>

