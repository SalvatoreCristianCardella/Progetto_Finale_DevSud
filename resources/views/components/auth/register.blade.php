<form action="{{ route('register') }}" method="post">
  @csrf
  <div class="mb-3">
      <label for="name" class="form-label">Nome</label>
      <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name"> 
      @error('name')
      <div class="alert text-danger">{{ $message }}</div>
      @enderror
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input name="email"   type="email" class="form-control  @error('email') is-invalid @enderror" id="email"> 
    @error('email')
    <div class="alert text-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password">
    @error('password')
    <div class="alert text-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
      <label for="password_confirmation" class="form-label">Conferma Password</label>
      <input name="password_confirmation"  type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation">
      @error('password_confirmation')
      <div class="alert text-danger">{{ $message }}</div>
      @enderror
  </div>
  <a href="{{route('product.create')}}"><button type="submit"class="btn btn-primary">Registrati</button></a>
  
</form>