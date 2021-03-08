<x-guest-layout>
    <div class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
          <div class="card-header text-center">
            <a href="{{url ('/login')}}" class="h1"><b>Login</b></a>
          </div>
          <div class="card-body">
            <x-jet-validation-errors class="mb-4" />
            @if (session('status'))
            <p class="login-box-msg">{{ session('status') }}</p>
            @endif
            <form action="{{ route('login') }}" method="post">
                @csrf
              <div class="input-group mb-3">
                <input type="email" class="form-control" for="email" placeholder="Email" id="email" name="email" :value="old('email')" required autofocus />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" for="password" placeholder="Password" type="password" id="password" name="password" required autocomplete="current-password" />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" id="remember_me" name="remember">
                    <label for="remember_me">
                        {{ __('Remember me') }}
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
                <!-- /.col -->
              </div>
            </form>

            <p class="mb-1">
              <a href="{{ route('password.request') }}">I forgot my password</a>
            </p>
            <p class="mb-0">
              <a href="/register" class="text-center">Register a new membership</a>
            </p>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.login-box -->


    </div>
</x-guest-layout>
