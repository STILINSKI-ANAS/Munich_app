<div>
    <h4 class="rbt-title-style-1 align-items-center d-flex justify-content-between">Etudiants
        <a class="rbt-btn hover-icon-reverse" href="{{url('admin/Etudiant/create')}}">
                <span class="icon-reverse-wrapper">
                    <span class="btn-text">Ajouter une nouvelle Etudiant</span>
                    <span class="btn-icon"><i class="feather-plus"></i></span>
                    <span class="btn-icon"><i class="feather-plus"></i></span>
                </span>
        </a>
    </h4>
    @if($errorMessage)
        <div class="alert alert-danger">
            {{ $errorMessage }}
        </div>
    @endif
    <div class="card rbt-shadow-box p-3 m-2" {{$showSubmitButton}}>
        <button type="submit" {{$showSubmitButton}} wire:click.prevent="destroyEtudiant" class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger m-1">Oui</button>
        <button type="submit" {{$showSubmitButton}} wire:click.prevent="hide_validation" class="rbt-btn btn-xs bg-color-success-opacity radius-round color-success m-1">Non</button>
    </div>
    <table class="rbt-table table table-borderless">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>CIN</th>
            <th>GSM</th>
            <th>Addresse</th>
            <th>Date de Naissance</th>
            <th>status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($etudiants as $etudiant)
            <tr>
                <th>
                    <p class="b3">{{ $etudiant->id }}</p>
                </th>
                <td>
                    <p class="">{{ $etudiant->nom }}</p>
                </td>
                <td>
                    <p class="">{{ $etudiant->prenom }}</p>
                </td>
                <td>
                    <p class="">{{ $etudiant->cin }}</p>
                </td>
                <td>
                    <p class="">{{ $etudiant->tel }}</p>
                </td>
                <td>
                    <span class="b3">{{ $etudiant->addresse }}</span>
                </td>
                <td>
                    <p class="">{{ $etudiant->dateNaissance }}</p>
                </td>
                <td>
                    <p class="">{{ $etudiant->status }}</p>
                </td>
                <td>
                    <div class="rbt-button-group justify-content-start">
                        <a class="rbt-btn btn-xs bg-primary-opacity radius-round" href="{{ url('admin/Etudiant/edit/'.$etudiant->id) }}" title="Edit"><i class="feather-edit pl--0"></i></a>
                        <a wire:click.prevent="createButton({{ $etudiant->id }})" onclick="toggleButton({{ $etudiant->id }})" class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger" href="#"  title="Delete"><i class="feather-trash-2 pl--0"></i></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
