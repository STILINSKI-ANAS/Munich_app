<div>
    <h4 class="rbt-title-style-1 align-items-center d-flex justify-content-between">Langues
        <a class="rbt-btn hover-icon-reverse" href="{{url('admin/Languages/create')}}">
                <span class="icon-reverse-wrapper">
                    <span class="btn-text">Ajouter une nouvelle langue</span>
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
    <table class="rbt-table table table-borderless">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($languages as $language)
            <tr>
                <th>
                    <p class="b3">{{ $language->id }}</p>
                </th>
                <td>
                    <p class="">{{ $language->name }}</p>
                </td>
                <td>
                    <span class="b3">{{ $language->description }}</span>
                </td>
                <td>
                    <div class="rbt-button-group justify-content-start">
                        <a class="rbt-btn btn-xs bg-primary-opacity radius-round" href="{{ url('admin/Languages/'.$language->id.'/edit') }}" title="Edit"><i class="feather-edit pl--0"></i></a>
                        <a wire:click.prevent="createButton({{ $language->id }})" onclick="toggleButton({{ $language->id }})" class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger" href="#"  title="Delete"><i class="feather-trash-2 pl--0"></i></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
