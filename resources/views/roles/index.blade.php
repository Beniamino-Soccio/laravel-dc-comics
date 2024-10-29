@extends("layouts.app")

@section("page-title", "Role Index")

@section("main-content")
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="py-3 fw-bold text-center">
                    Character list:
                </h1>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <a href="{{ route("role.create") }}" class="btn btn-primary btn-lg">
                        Create new character
                    </a>
                </div>
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Class</th>
                            <th scope="col">Race</th>
                            <th scope="col">Damage type</th>
                            <th scope="col">Gender</th>
                            <th scope="col">armor class</th>
                            <th scope="col">starter weapon</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $roles as $index => $role )
                        <tr>
                            <td>
                                {{ $role->id }}
                            </td>
                            <td>
                                {{ $role->name }}
                            </td>
                            <td>
                                {{ $role->class }}
                            </td>
                            <td>
                                {{ $role->race }}
                            </td>
                            <td>
                                {{ $role->damage_type }}
                            </td>
                            <td>
                                {{ $role->gender }}
                            </td>
                            <td>
                                {{ $role->armor_class }}
                            </td>
                            <td>
                                {{ $role->starter_weapon }}
                            </td>

                            <td>
                                <a href="{{ route("role.show", $role->id) }}" class="btn btn-sm btn-primary me-2">Show</a>
                                <a href="#" class="btn btn-sm btn-success me-2">Edit</a>
                                <a href="#" class="btn btn-sm btn-warning me-2">Delete</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="12">No role available</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
