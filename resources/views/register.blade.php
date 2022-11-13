@include('header')

<div class="container m-4 p-5 bg-warning">
   
    <form action="{{ url('/userform') }}" method="post" enctype="multipart/form-data" class="p-3">
        @csrf
        <h1 class="text-center">Register Form</h1>
        <div class="row">
            <div class="col-md-6 p-3">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control">
                @error('name')
                    {{ $message }}
                @enderror

            </div>
            <div class="col-md-6 p-3">
                <label for="">email</label>
                <input type="text" name="email" class="form-control">
                @error('email')
                    {{ $message }}
                @enderror

            </div>
        </div>
        <div class="row">
            <div class="col-md-6 m p-3">
                <label for="">password</label>
                <input type="password" name="password" class="form-control">
                @error('password')
                    {{ $message }}
                @enderror

            </div>
            <div class="col-md-6 p-3">
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">feMale<br>
                <small class="form-text text-dark"> * @error('gender')
                        {{ $message }}
                    @enderror </small>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 p-3">
                <label for="">upload photo :</label>
                <input type="file" name="image">
                <small class="form-text text-dark"> @error('image')
                        {{ $message }}
                    @enderror </small>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 p-3">
                <button class="btn btn-primary" name="submit">Submit</button>
            </div>
        </div>
    </form>
</div>
