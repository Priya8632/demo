@include('header');
<div class="container" class="p-3 m-3">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ url('/logindata') }}" method="post" class="p-3 bg-light">
        @csrf
        <h1 class="text-center">login form</h1>
        <div class="row justify-content-center">
            <div class="col-md-6 p-3">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control">
                @error('email')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 p-3">
                <label for="">password</label>
                <input type="password" name="password" class="form-control">
                @error('password')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 p-3">
                <button class="btn btn-success" name="submit" type="submit">Login</button>
            </div>
        </div>
    </form>
</div>
