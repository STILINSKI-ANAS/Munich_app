<!-- Start Enrole Course  -->

<body>
    <div class="rbt-dashboard-content bg-color-white rbt-shadow-box" id="main">
        <div class="content">
            @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                @endif
            <h4 class="rbt-title-style-1 align-items-center d-flex justify-content-between">Tests
                <a class="rbt-btn hover-icon-reverse" href="{{url('admin/Test/create')}}">
                    <span class="icon-reverse-wrapper">
                        <span class="btn-text">Ajouter un nouvelle test</span>
                        <span class="btn-icon"><i class="feather-plus"></i></span>
                        <span class="btn-icon"><i class="feather-plus"></i></span>
                    </span>
                </a>
            </h4>
    
            <div class="rbt-dashboard-table table-responsive mobile-table-750 mt--30">
                <table class="rbt-table table table-borderless">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Niveau</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Contenu</th>
                        <th>Calendrier</th>
                        <th>Prix</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tests as $test)
                        <tr>
                            <th>
                                <p class="b3">{{ $test->id }}</p>
                            </th>
                            <td>
                                <p class="">{{ $test->level }}</p>
                            </td>
                            <td>
                                <p class="">{{ $test->name }}</p>
                            </td>
                            <td>
                                <p class="">{{ $test->overview }}</p>
                            </td>
                            <td>
                                <span class="b3">{{ $test->content }}</span>
                            </td>
                            <td>
                                <p class="">{{ $test->time }}</p>
                            </td>
                            <td>
                                <p class="">{{ $test->price }}</p>
                            </td>
                            <td>
                                <div class="rbt-button-group justify-content-start">
                                    <a class="rbt-btn btn-xs bg-primary-opacity radius-round" href="{{ url('admin/Test/'.$test->id.'/edit') }}" title="Edit"><i class="feather-edit pl--0"></i></a>
                                    <a class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger" href="#" wire:click.prevent="deleteConfirmation({{ $test->id }})" title="Delete"><i class="feather-trash-2 pl--0"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{ $tests->links() }}
        </div>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    {{-- @livewire('Livewire\Admin\Tests\index') --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.addEventListener('show-delete-confirmation', function(event) {
                const test_id = event.detail.test_id;
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.emit('delete', test_id);
                    }
                });
            });
        });
    </script>
    

    @stack('scripts')
    @livewireScripts

</body>

<!-- End Enrole Course  -->

<!-- End Enrole Course  -->

    {{-- Sweet alert delete Script--}}
    
