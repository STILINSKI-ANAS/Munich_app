<div>
    <h4 class="rbt-title-style-1 align-items-center d-flex justify-content-between">Gestion de Commandes
        <a class="rbt-btn hover-icon-reverse" href="{{url('admin/Orders/create')}}">
                <span class="icon-reverse-wrapper">
                    <span class="btn-text">Ajouter une nouvelle Commande</span>
                    <span class="btn-icon"><i class="feather-plus"></i></span>
                    <span class="btn-icon"><i class="feather-plus"></i></span>
                </span>
        </a>
    </h4>

    <div class="card rbt-shadow-box p-3 m-2" {{$showSubmitButton}}>
{{--        <input type="text" wire:model="idLang" {{$showSubmitButton}}>--}}
        <button type="submit" {{$showSubmitButton}} wire:click.prevent="destroyOrder" class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger m-1">Oui</button>
        <button type="submit" {{$showSubmitButton}} wire:click.prevent="hide_validation" class="rbt-btn btn-xs bg-color-success-opacity radius-round color-success m-1">Non</button>

    </div>
    <table class="rbt-table table table-borderless">
        <thead>
        <tr>
            <th>Type</th>
            <th>Niveau</th>
            <th>Description du cours</th>
            <th>Nom et prenom Etudiant</th>
            <th>CIN Etudiant</th>
            <th>Prix Cours</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            @if($order['type'] == 'Course')
                <tr>
                    <th>
                        <p class="b3">{{ $order['type'] }}</p>
                    </th>
                    <td>
                        <span class="b3">{{ $order['course']['level'] }}</span>
                    </td>
                    <td>
                        <span class="b3">{{ $order['course']['overview'] }}</span>
                    </td>
                    <td>
                        <p class="">{{ $order['etudiant']['prenom'] }} {{ $order['etudiant']['nom'] }}</p>
                    </td>
                    <td>
                        <p class="">{{ $order['etudiant']['cin'] }}</p>
                    </td>
                    <td>
                        <span class="b3">{{ $order['course']['price'] }} MAD</span>
                    </td>
                    <td>
                        <div class="rbt-button-group justify-content-start">
                            <a class="rbt-btn btn-xs bg-primary-opacity radius-round" href="{{ url('admin/Languages/'.$order['id'].'/edit') }}" title="Edit"><i class="feather-edit pl--0"></i></a>
                            <a wire:click.prevent="createButton({{ $order['id'] }})" onclick="toggleButton({{ $order['id'] }})" class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger" href="#"  title="Delete"><i class="feather-trash-2 pl--0"></i></a>
                        </div>
                    </td>
                </tr>
            @elseif($order['type'] == 'Test')
                <tr>
                    <th>
                        <p class="b3">{{ $order['type'] }}</p>
                    </th>
                    <td>
                        <span class="b3">{{ $order['test']['level'] }}</span>
                    </td>
                    <td>
                        <span class="b3">{{ $order['test']['overview'] }}</span>
                    </td>
                    <td>
                        <p class="">{{ $order['etudiant']['prenom'] }} {{ $order['etudiant']['nom'] }}</p>
                    </td>
                    <td>
                        <p class="">{{ $order['etudiant']['cin'] }}</p>
                    </td>
                    <td>
                        <span class="b3">{{ $order['test']['price'] }} MAD</span>
                    </td>
                    <td>
                        <div class="rbt-button-group justify-content-start">
                            <a class="rbt-btn btn-xs bg-primary-opacity radius-round" href="{{ url('admin/Languages/'.$order['id'].'/edit') }}" title="Edit"><i class="feather-edit pl--0"></i></a>
                            <a wire:click.prevent="createButton({{ $order['id'] }})" onclick="toggleButton({{ $order['id'] }})" class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger" href="#"  title="Delete"><i class="feather-trash-2 pl--0"></i></a>
                        </div>
                    </td>
                </tr>
            @endif

        @endforeach
        </tbody>
    </table>
</div>
