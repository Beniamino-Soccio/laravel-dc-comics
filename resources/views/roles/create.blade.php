@extends("layouts.app")

@section("page-title", "Create new role")

@section("main-content")
<section class="container py-4">
    <div class="row justify-content-around">
        @if ( $errors->any() )
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error )
                        <li>
                            {{$error}}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="col-12" method="POST" action="{{ route("role.store") }}">
            @csrf

            <h1 class="mb-3">
                Create new role:
            </h1>
            <div class="mb-3">
                <label for="role-name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="role-name" name="name" value="{{old('name')}}">
            </div>
            <div class="mb-3">
                <label for="role-class" class="form-label">Class:</label>
                <input type="text" class="form-control" id="role-class" name="class" value="{{old('class')}}">
            </div>
            <div class="mb-3">
                <label for="role-race" class="form-label">race:</label>
                <input type="text" class="form-control" id="role-race" name="race" value="{{old('race')}}">
            </div>
            <div class="mb-3">
                <label for="role-damage_type" class="form-label">damage_type:</label>
                <input type="text" class="form-control" id="role-damage_type" name="damage_type" value="{{old('damage_type')}}">
            </div>
            <div class="mb-3">
                <label for="role-gender" class="form-label">gender:</label>
                <input type="text" class="form-control" id="role-gender" name="gender" value="{{old('gender')}}">
            </div>
            <div class="mb-3">
                <label for="role-armor_class" class="form-label">armor_class:</label>
                <input type="number" class="form-control" id="role-armor_class" name="armor_class" value="{{old('armor_class')}}">
            </div>
            <div class="mb-3">
                <label for="role-starter_weapon" class="form-label">starter_weapon:</label>
                <input type="text" class="form-control" id="role-starter_weapon" name="starter_weapon" value="{{old('starter_weapon')}}">
            </div>
            <div class="mb-3 d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-primary me-3">
                    Create new role
                </button>
                <button type="reset" class="btn btn-warning me-3">
                    Reset fields
                </button>
            </div>
        </form>
    </div>
</section>
@endsection
