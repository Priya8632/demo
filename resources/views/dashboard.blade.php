@include('header')

<div class="container w-50 mt-3">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif


    <div class="card">
        <div class="card-body">
            <p>{{ session('email') }}</p>
            <a href="{{ url('logout') }}" class="btn btn-danger" type="submit">Logout</a>
        </div>
    </div>
</div>
