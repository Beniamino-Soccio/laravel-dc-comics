@extends("layouts.app")

@section("page-title", $role["name"])

@section("main-content")
<section class="container py-4">
    <div class="row">
        <div class="col-12">
            <h1>
                {{  $role["name"] }} Page
            </h1>
        </div>
    </div>
    <div class="row justify-content-around">
        <div class="col-12 card m-3">
            <ul>
                <li>
                    Nome: {{ $role["name"] }}
                </li>
                <li>
                    Classe: {{ $role["class"] }}
                </li>
                <li>
                    Razza: {{ $role["race"] }}
                </li>
                <li>
                    Tipo di danno: {{ $role["damage_type"] }}
                </li>
                <li>
                    Sesso: {{ $role["gender"] }}
                </li>
                <li>
                    Classe armatura: {{ $role["armor_class"] }}
                </li>
                <li>
                    Arma iniziale: {{ $role["starter_weapon"] }}
                </li>



            </ul>
        </div>
    </div>
</section>
@endsection
