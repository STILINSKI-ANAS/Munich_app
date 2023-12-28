<div>
    <h4 class="rbt-title-style-1 align-items-center d-flex justify-content-between">Courses
        <a class="rbt-btn hover-icon-reverse" href="{{url('admin/Course/create')}}">
                    <span class="icon-reverse-wrapper">
                        <span class="btn-text">Ajouter un nouvelle cours</span>
                        <span class="btn-icon"><i class="feather-plus"></i></span>
                        <span class="btn-icon"><i class="feather-plus"></i></span>
                    </span>
        </a>
    </h4>
    <div class="rbt-default-modal" style="padding: 0px !important;" {{$showSubmitButton}} tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="rbt-round-btn" data-bs-dismiss="modal" aria-label="Close"
                            {{$showSubmitButton}} wire:click.prevent="hide_validation">
                        <i class="feather-x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="inner rbt-default-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 class="modal-title mb--20" id="exampleModalLabel">Est-ce que vous voulez supprimer
                                    ?</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-circle-shape"></div>
                <div class="modal-footer pt--30">
                    <button type="submit" {{$showSubmitButton}} wire:click.prevent="destroyCourse"
                            class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger m-1">Oui
                    </button>
                    <button type="submit" {{$showSubmitButton}} wire:click.prevent="hide_validation"
                            class="rbt-btn btn-xs bg-color-success-opacity radius-round color-success m-1">Non
                    </button>

                </div>
            </div>
        </div>
    </div>
    <table class="rbt-table table table-borderless">
        <thead>
        <tr>
            <th>ID</th>
            <th>Niveau</th>
            <th>Description</th>
            <th>Contenu</th>
            <th>Calendrier</th>
            <th>Prix</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($courses as $course)
            <tr>
                <th>
                    <p class="b3">{{ $course->id }}</p>
                </th>
                <td>
                    <p class="">{{ $course->level }}</p>
                </td>
                <td>
                    <p class="">{{ \Illuminate\Support\Str::limit($course->overview, 100) }}</p>
                </td>
                <td>
                    <span class="b3">{{ $course->content }}</span>
                </td>
                <td>
                    <p class="">{{ $course->time }}</p>
                </td>
                <td>
                    <p class="">{{ $course->price }}</p>
                </td>
                <td>
                    <div class="rbt-button-group justify-content-start">
                        <a class="rbt-btn btn-xs bg-primary-opacity radius-round"
                           href="{{ url('admin/Course/'.$course->id.'/edit') }}" title="Edit"><i
                                    class="feather-edit pl--0"></i></a>
                        <a wire:click.prevent="createButton({{ $course->id }})"
                           onclick="toggleButton({{ $course->id }})"
                           class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger" href="#"
                           title="Delete"><i class="feather-trash-2 pl--0"></i></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
