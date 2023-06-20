<!-- Start Enrole Course  -->
<!-- Start Enrole Course  -->
<div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
    <div class="content">
        <h4 class="rbt-title-style-1 align-items-center d-flex justify-content-between">Langues
            <a class="rbt-btn hover-icon-reverse" href="{{url('admin/Languages/create')}}">
                <span class="icon-reverse-wrapper">
                    <span class="btn-text">Ajouter un nouvelle cours</span>
                    <span class="btn-icon"><i class="feather-plus"></i></span>
                    <span class="btn-icon"><i class="feather-plus"></i></span>
                </span>
            </a>
        </h4>

        <hr class="mt--30">

        <div class="rbt-dashboard-table table-responsive mobile-table-750 mt--30">
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
                            <p class="">{{ $course->overview }}</p>
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
                                <a class="rbt-btn btn-xs bg-primary-opacity radius-round" href="{{ url('admin/Course/'.$course->id.'/edit') }}" title="Edit"><i class="feather-edit pl--0"></i></a>
                                <a class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger"a href="#" wire:click.prevent="destroyLanguage({{ $course->id }})"  data-bs-toggle="modal" data-bs-target="#deletemodal" title="Delete"><i class="feather-trash-2 pl--0"></i></a>
                                {{--                            <a href="#" wire:click.prevent="deleteCategory({{ $category->id }})" class="me-3 confirm-text" data-bs-toggle="modal" data-bs-target="#deletemodal">--}}
                                {{--                                <img src="images/icons/delete.svg" alt="Delete">--}}
                                {{--                            </a>--}}
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{ $courses->links() }}
    </div>
</div>
<!-- End Enrole Course  -->

<!-- End Enrole Course  -->


<!-- Modal -->
<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimmer Language</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="destroyLanguage">
                <div class="modal-body">
                    <h6>Sure??</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Oui. Supprimmer</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal -->
{{--    <div wire:ignore.self class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--        <div class="modal-dialog" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <form wire:submit.prevent="destroyLanguage">--}}
{{--                    <div class="modal-body">--}}
{{--                        <h6>Are you sure you want to delete this data?</h6>--}}
{{--                        <input type="hidden" wire:model="language_id">--}}
{{--                    </div>--}}
{{--                    <div class="modal-footer">--}}
{{--                        <button type="submit" class="btn btn-primary">Yes. Delete</button>--}}
{{--                        <button type="button" wire:click="closeModal" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>

@push('script')
    <script>
        window.addEventListener('close-modal',event => {
            $('#deletemodal').modal('hide');
        });
    </script>
@endpush
