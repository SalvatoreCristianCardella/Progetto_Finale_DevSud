<x-layout>

    <form method="POST" action="{{route('revisor.become')}}">
        <div class="mb-3">
            <label for="descriptio">Scrivi la tua lettera di presentazione</label>
          <textarea name="description" id="description" cols="30" rows="10" placeholder="Descriviti">
            
          </textarea>
          <label for="curriculum">Carica il tuo curriculum vitae</label>
          <input type="file" id="curriculum">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>


</x-layout>