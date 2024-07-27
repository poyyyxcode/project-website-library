@include('main.head')
<div class="container">
    <div class="card p-5 col-md-4 mx-auto mt-5">
        @if (session('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('failed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <form method="POST" action="/login">
            @csrf
            <div class="form-group form-floating mb-3">
                <input type="text" class="form-control" name="username" value="{{ old('username') }}" id="username" placeholder="Username or Email" required @required(true) autofocus>
                <label for="username">Email or Username</label>
            </div>
            
            <div class="form-group form-floating mb-3">
                <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                <label for="floatingPassword">Password</label>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
    </div>
</div>
@include('main.footer')