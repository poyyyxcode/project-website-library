@include('main.head')
<div class="container">
    <div class="card p-5 col-md-4 mx-auto mt-5">
        <form method="POST" action="/register">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" placeholder="Name" required @required(true)>
                <label for="name">Name</label>
                @if ($errors->has('name'))
                    <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                @endif
            </div>

            <div class="form-floating mb-3">
                <input type="text" name="username" value="{{ old('username') }}" class="form-control" id="username" placeholder="Username" required @required(true)>
                <label for="username">Username</label>
                @if ($errors->has('username'))
                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                @endif
            </div>

            <div class="form-floating mb-3">
                <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="email" placeholder="name@example.com" required @required(true)>
                <label for="email">Email address</label>
                @if ($errors->has('email'))
                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required @required(true)>
                <label for="password">Password</label>
                @if ($errors->has('password'))
                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="form-floating mb-3">
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm Password" required @required(true)>
                <label for="password_confirmation">Password</label>
                @if ($errors->has('password_confirmation'))
                    <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
          </form>
    </div>
</div>
@include('main.footer')