@extends ('layouts.app')

@section ('content')

    <div class="container">
        <div class="box">

            <h3>Login</h3>

            <hr/>

            <form method="POST" action="/login">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                @include('layouts.errors')

            </form>
        </div>
    </div>


@endsection