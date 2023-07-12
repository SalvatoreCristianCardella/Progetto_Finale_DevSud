
<form action="{{ route('login') }}" method="post">
        @csrf


        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input name="email" type="email" class="form-control  @error('email') is-invalid @enderror" id="email"> 
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

        <button type="submit" class="btn btn-primary">Login</button>
      </form>