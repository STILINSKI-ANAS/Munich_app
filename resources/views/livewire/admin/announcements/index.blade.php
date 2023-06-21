<!-- Start Enrole Course  -->
<div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
    <div class="content">
        <h4 class="rbt-title-style-1 align-items-center d-flex justify-content-between">Announcement
            <a class="rbt-btn hover-icon-reverse" href="{{url('admin/Announcements/create')}}">
                <span class="icon-reverse-wrapper">
                    <span class="btn-text">Ajouter une nouvelle Annonce</span>
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
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($announcements as $announcement)
                    <tr>
                        <th>
                            <p class="b3">{{ $announcement->id }}</p>
                        </th>
                        <td>
                            <p class="">{{ $announcement->titre }}</p>
                        </td>
                        <td>
                            <span class="b3">{{ $announcement->description }}</span>
                        </td>
                        <td>
                            <span class="b3">{{ $announcement->created_at->format('Y-m-d') }}</span>
                        </td>
                        <td>
                            <div class="rbt-button-group justify-content-start">
                                <a class="rbt-btn btn-xs bg-primary-opacity radius-round" href="{{ url('admin/Announcements/'.$announcement->id.'/edit') }}" title="Edit"><i class="feather-edit pl--0"></i></a>
                                <a class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger"a href="#" wire:click.prevent="destroyAnnouncement({{ $announcement->id }})"  data-bs-toggle="modal" data-bs-target="#deletemodal" title="Delete"><i class="feather-trash-2 pl--0"></i></a>
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
        {{ $announcements->links() }}

    </div>
</div>
<!-- End Enrole Course  -->


<!-- Modal -->
<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Announcement</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="destroyAnnouncement">
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

</div>

@push('script')
    <script>
        window.addEventListener('close-modal',event => {
            $('#deletemodal').modal('hide');
        });
    </script>
@endpush
