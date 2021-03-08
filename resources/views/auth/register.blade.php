<x-guest-layout>
<div class="hold-transition register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
          <div class="card-header text-center">
            <a href="/register" class="h1"><b>Register</b></a>
          </div>
          <div class="card-body">
            <x-jet-validation-errors class="mb-4" />
            <form action="{{ route('register') }}" method="POST">
                @csrf
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Full name" id="name" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email" id="email" name="email" :value="old('email')" required />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password" id="password" name="password" required autocomplete="new-password" />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Retype password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" />
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <input type="checkbox" id="terms" name="terms">
                    <label for="terms">
                        <a href="{{route('terms.show')}}">Terms /</a>
                        <a href="{{route('terms.show')}}"> Privacy Policy</a>
                    </label>
                    @endif
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
      
            <a href="/login" class="text-center">I already have a membership</a>
          </div>
          <!-- /.form-box -->
        </div><!-- /.card -->
      </div>
</div>
</x-guest-layout>
