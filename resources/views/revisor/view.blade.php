<x-layout>

    <form method="POST" action="{{route('revisor.become')}}" enctype="multipart/form-data">
      @csrf
        <div class="mb-3">
            <label for="description">Scrivi la tua lettera di presentazione</label>
          <textarea name="description" id="description" cols="30" rows="10" placeholder="Descriviti">
            
          </textarea>
          <label for="curriculum">Carica il tuo curriculum vitae</label>
          <input type="file" name="curriculum" id="curriculum">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>


</x-layout>