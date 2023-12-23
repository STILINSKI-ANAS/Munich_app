        <div>
        <div>
            <h4 class="rbt-title-style-1 align-items-center d-flex justify-content-between">Tests Inscriptions
                <a class="rbt-btn hover-icon-reverse" href="#">
                        <span class="icon-reverse-wrapper">
                            <span class="btn-text">Export </span>
                            <span class="btn-icon"><i class="feather-plus"></i></span>
                            <span class="btn-icon"><i class="feather-plus"></i></span>
                        </span>
                </a>
            </h4>

            <!-- Start Filter -->
            <div class="rbt-dashboard-filter-wrapper">

                <div class="row g-5">

                    <div class="col-lg-6 ">
                        <div class="filter-select rbt-modern-select">
                            <span class="select-label d-block">Test</span>
                            <select wire:model="language" class="w-100">
                                <option value="Allemand" data-subtext>Allemand</option>
                                <option value="English" data-subtext>Anglais</option>
                                <option value="Spanish" data-subtext>Espagnol</option>

                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="filter-select rbt-modern-select">
                            <span class="select-label d-block">Ordre Par</span>
                            <select wire:model="orderBy" class="w-100">
                                <option value="created_at">Date d'inscription</option>
                                <option value="nom">Nom Complet</option>
                                <option value="dateNaissance">Date de Naissance</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="filter-select rbt-modern-select">
                            <span class="select-label d-block">Filtré Par Action</span>
                            <select wire:model="status" class="w-100">
                                <option value="All">All</option>
                                <option value="accepter">Accepté</option>
                                <option value="nonAccepter">Non accepté</option>
                                <option value="en attente">En Attente</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row g-5 justify-content-end">
                    <div class="col-lg-6  mt--50">
                        <form action="#" class="rbt-search-style-1">
                            <input wire:model="search" type="text" placeholder="Search Tests">
                            <button class="search-btn"><i class="feather-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Filter -->
             {{-- <div class="card rbt-shadow-box p-3 m-2" {{$showSubmitButton}}>
                       <input type="text" wire:model="idLang" {{$showSubmitButton}}>
                <button type="submit" {{$showSubmitButton}} wire:click.prevent="destroyEtudiant" class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger m-1">Oui</button>
                <button type="submit" {{$showSubmitButton}} wire:click.prevent="hide_validation" class="rbt-btn btn-xs bg-color-success-opacity radius-round color-success m-1">Non</button>
            </div>  --}}
            <hr class="mt--30">
            <table class="rbt-table table table-borderless">
                <thead>
                <tr>
                    <th>Level</th>
                    <th>Nom et Prenom</th>
                    <th>CIN</th>
                    <th>Created At</th>
                    <th>OID</th>
                    <th>Status</th>
                    <th>Paiement Amount</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($this->getEtudiantsWithTests() as $etudiantTest)
                <tr>
                    <th>
                        {{ $etudiantTest->test->level }}
                    </th>
                    <td>{{ $etudiantTest->etudiant->nom . ' ' . $etudiantTest->etudiant->prenom }}</td>
                    <td>{{ $etudiantTest->etudiant->cin }}</td>
                    <td>
                        {{ $etudiantTest->created_at->format('Y-m-d') }}
                    </td>
                    <td>{{ $etudiantTest->paiement->oid }}</td>
                    <td>{{ $etudiantTest->paiement->status }}</td>
                    <td>{{ $etudiantTest->paiement->amount ?? 'N/A' }}</td>
                    <td>
                        @if ($etudiantTest->paiement->status == "en attente")
                            <form method="POST" action="{{ route('validerTestPayment') }}">
                                @csrf
                                <input type="hidden" name="idEtudiant" value="{{ $etudiantTest->etudiant->id }}">
                                <input type="hidden" name="etudiantTest" value="{{ $etudiantTest->id }}">
                                <button type="submit" class="rbt-btn btn-xs bg-color-primary color-white radius-round" title="Valider">
                                    Valider
                                </button>
                            </form>
                        @endif
                    </td>
                </tr>
                @endforeach
                </tbody>
<!--                <thead>-->
<!--                <tr>-->
<!--                    <th>Test</th>-->
<!--                    <th>Nom complet</th>-->
<!--                    <th>CNIE</th>-->
<!--                    <th>Date D'inscription</th>-->
<!--                    <th>ville</th>-->
<!--                    <th>Status</th>-->
<!--                    <th>Action</th>-->
<!--                </tr>-->
<!--                </thead>-->
<!--                <tbody>-->
<!--                @if ($etudiants && $etudiants->count() > 0)-->
<!--                 @foreach($etudiants as $etudiant)-->
<!--                    <tr>-->
<!--                        <th>-->
<!--                            <p class="b3">{{ $etudiant->tests[0]->level }}</p>-->
<!--                        </th>-->
<!--                        <td>-->
<!--                            <p class="">{{ $etudiant->nom.' '.$etudiant->prenom}}</p>-->
<!--                        </td>-->
<!--                        <td>-->
<!--                            <span class="b3">{{ $etudiant->cin }}</span>-->
<!--                        </td>-->
<!--                        <td>-->
<!--                            <span class="">{{ $etudiant->tests[0]->pivot->created_at->format('Y-m-d') }}</span>-->
<!--                        </td>-->
<!--                        <td>-->
<!--                            <span class="b3">{{ $etudiant->addresse }}</span>-->
<!--                        </td>-->
<!--                        <td>-->
<!--                            <span class="">{{ $etudiant->status }}</span>-->
<!--                        </td>-->
<!--                        <td>-->
<!--                            @if ($etudiant->status == "en attente")-->
<!--                            <div class="rbt-button-group justify-content-start">-->
<!--                                <button class="rbt-btn btn-xs bg-color-primary- color-white radius-round" wire:click="validerEtudiant({{ $etudiant->id }})" title="Valider">-->
<!--                                    Valider-->
<!--                                </button>-->
<!--                            </div>-->
<!--                            @endif-->
<!--                        </td>-->
<!--                    </tr>-->
<!--                @endforeach-->
<!--                @else-->
<!--                <p class="text-danger"> No etudiants found using this search attributs</p>-->
<!--                @endif-->
<!---->
<!--                </tbody>-->
            </table>
        </div>
    </div>
