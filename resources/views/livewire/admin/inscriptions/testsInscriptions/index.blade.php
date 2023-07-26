<div>
    <h4 class="rbt-title-style-1 align-items-center d-flex justify-content-between">Langues
        <a class="rbt-btn hover-icon-reverse" href="#">
                <span class="icon-reverse-wrapper">
                    <span class="btn-text">Export </span>
                    <span class="btn-icon"><i class="feather-plus"></i></span>
                    <span class="btn-icon"><i class="feather-plus"></i></span>
                </span>
        </a>
    </h4>



    <!-- Start Modal Area  -->
    <div class="rbt-default-modal" style="padding: 0px !important;" {{$showSubmitButton}} tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="rbt-round-btn" data-bs-dismiss="modal" aria-label="Close" {{$showSubmitButton}} wire:click.prevent="hide_validation">
                        <i class="feather-x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="inner rbt-default-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 class="modal-title mb--20" id="exampleModalLabel">Est-ce que vous voulez supprimer ?</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-circle-shape"></div>
                <div class="modal-footer pt--30">
                    <button type="submit" {{$showSubmitButton}} wire:click.prevent="destroyLanguage" class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger m-1">Oui</button>
                    <button type="submit" {{$showSubmitButton}} wire:click.prevent="hide_validation" class="rbt-btn btn-xs bg-color-success-opacity radius-round color-success m-1">Non</button>

                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Area  -->

    <!-- Start Filter -->
    <div class="rbt-dashboard-filter-wrapper">

        <div class="row g-5">

            <div class="col-lg-6 ">
                <div class="filter-select rbt-modern-select">
                    <span class="select-label d-block">Test</span>
                    <select class="w-100">
                        <option data-subtext>Allemand</option>
                        <option data-subtext>Anglais</option>
                        <option data-subtext>Français</option>

                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="filter-select rbt-modern-select">
                    <span class="select-label d-block">Ordre Par</span>
                    <select class="w-100">
                        <option>Date d'inscription</option>
                        <option>Nom Complet</option>
                        <option>Test</option>

                    </select>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="filter-select rbt-modern-select">
                    <span class="select-label d-block">Filtré Par Action</span>
                    <select class="w-100">
                        <option>Accepté
                        </option>
                        <option>Non accepté
                        </option>
                        <option>En Attente
                        </option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row g-5 justify-content-end">
            <div class="col-lg-6  mt--50">
                <form action="#" class="rbt-search-style-1">
                    <input type="text" placeholder="Search Courses">
                    <button class="search-btn"><i class="feather-search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <!-- End Filter -->

    <hr class="mt--30">
    <table class="rbt-table table table-borderless">
        <thead>
        <tr>
            <th>Test</th>
            <th>Nom complet</th>
            <th>CNIE</th>
            <th>Date D'inscription</th>
            <th>ville</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ as $)
            <tr>
                <th>
                    <p class="b3">{{ $ }}</p>
                </th>
                <td>
                    <p class="">{{ $}}</p>
                </td>
                <td>
                    <span class="b3">{{ $ }}</span>
                </td>
                <td>
                    <span class="">{{ $ }}</span>
                </td>
                <td>
                    <span class="b3">{{ $ }}</span>
                </td>
                <td>
                    <span class="">{{ $ }}</span>
                </td>
                <td>
                    <div class="rbt-button-group justify-content-start">
                        <a class="rbt-btn btn-xs bg-primary-opacity radius-round" href="{{ url('') }}" title="Edit"><i class="feather-edit pl--0"></i></a>
                        <a wire:click.prevent="createButton({{ $ }})" onclick="toggleButton({{ $language->id }})" class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger" href="#"  title="Delete"><i class="feather-trash-2 pl--0"></i></a>
                        <a class="rbt-btn btn-xs bg-color-success-opacity radius-round color-success" href="#" title="Voir profile" data-toggle="modal" data-target="#profileModal">
                            <i class="feather-eye pl--0"></i>
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

