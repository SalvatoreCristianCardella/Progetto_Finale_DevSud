 <div class="header">

        <!--Content before waves-->
        <div class="inner-header flex flex-column">
          <form action="{{ route('login') }}" method="post">
            @csrf
    
              <h3 class="mb-5 fs-1 login-custom-title">Login</h3>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input name="email" type="email" class="form-control  @error('email') is-invalid @enderror" id="email"> 
              @error('email')
              <div class="alert text-danger error-login">{{ $message }}</div>
              @enderror
            </div>
    
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password">
              @error('password')
              <div class="alert text-danger error-login">{{ $message }}</div>
              @enderror
            </div>
    
            <button type="submit" class="btn btn-primary" id="btn-login">Login</button>
          </form>
    
        </div>
        
        <!--Waves Container-->
        <div>
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
        <!--Waves end-->
        
        </div>