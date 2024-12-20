@extends("layouts.app")

@section("page-title", "Editing " . $role->name)

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
        <form class="col-12 col-md-6 card m-3" method="POST" action="{{ route("role.update", $role->id) }}">
            @method("PUT")
            @csrf

            <h1 class="mb-3">
                Editing {{ $role->name }}:
            </h1>
            <div class="mb-3">
                <label for="role-name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="role-name" name="name" value="{{ old('name', $role->name) }}">
                {{-- @error("name")
                    <div class="alert alert-danger"> {{ $message }}</div>
                @enderror ERRORE SINGOLO --}}
            </div>
            <div class="mb-3">
                <label for="role-class" class="form-label">Class:</label>
                <input type="text" class="form-control" id="role-class" name="class" value="{{ old('class', $role->class) }}">
            </div>
            <div class="mb-3">
                <label for="role-race" class="form-label">Race:</label>
                <input type="text" class="form-control" id="role-race" name="race" value="{{ old('race', $role->race) }}">
            </div>
            <div class="mb-3">
                <label for="role-damage_type" class="form-label">Damage type:</label>
                <input type="text" class="form-control" id="role-damage_type" name="damage_type" value="{{ old('damage_type', $role->damage_type) }}">
            </div>
            <div class="mb-3">
                <label for="role-gender" class="form-label">Gender:</label>
                <input type="text" class="form-control" id="role-gender" name="gender" value="{{ old('gender', $role->gender) }}">
            </div>
            <div class="mb-3">
                <label for="role-armor_class" class="form-label">Armor class:</label>
                <input type="text" class="form-control" id="role-armor_class" name="armor_class" value="{{ old('armor_class', $role->armor_class) }}">
            </div>
            <div class="mb-3">
                <label for="role-starter_weapon" class="form-label">Starter weapon:</label>
                <input type="text" class="form-control" id="role-starter_weapon" name="starter_weapon" value="{{ old('starter_weapon', $role->starter_weapon) }}">
            </div>
            <div class="mb-3 d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-success me-3">
                    Editing {{ $role->name }}
                </button>
                <button type="reset" class="btn btn-warning me-3">
                    Reset
                </button>
            </div>
        </form>
    </div>
</section>
@endsection

