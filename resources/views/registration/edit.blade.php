@extends ('layouts.app')

@section ('content')


    <div class="container">
        <div class="box">

            <h3>Modify account</h3>

            <hr/>

            <form method="POST" action="/register">

                {{ csrf_field() }}

                {{ method_field('PATCH') }}

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required value="{{ $user->name }}">
                </div>

                <div class="form-group">
                    <label for="name">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required value="{{ $user->email }}">
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm password:</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                @include('layouts.errors')

            </form>
        </div>
    </div>

@endsection