
<body>
    <div class="rbt-dashboard-content bg-color-white rbt-shadow-box" id="main">
        <div class="content">
            @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                @endif
            <h4 class="rbt-title-style-1 align-items-center d-flex justify-content-between">Courses
                <a class="rbt-btn hover-icon-reverse" href="{{url('admin/Course/create')}}">
                    <span class="icon-reverse-wrapper">
                        <span class="btn-text">Ajouter un nouvelle cours</span>
                        <span class="btn-icon"><i class="feather-plus"></i></span>
                        <span class="btn-icon"><i class="feather-plus"></i></span>
                    </span>
                </a>
            </h4>

            <div class="card rbt-shadow-box p-3 m-2" {{$showSubmitButton}}>
                {{--        <input type="text" wire:model="idLang" {{$showSubmitButton}}>--}}
                <button type="submit"  wire:click.prevent="destroyCourse" class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger m-1">Oui</button>
                <button type="submit" {{$showSubmitButton}} wire:click.prevent="hide_validation" class="rbt-btn btn-xs bg-color-success-opacity radius-round color-success m-1">Non</button>
        
            </div>
    
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
                                    <a wire:click.prevent="createButton({{ $course->id }})" onclick="toggleButton({{ $course->id }})" class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger" href="#"  title="Delete"><i class="feather-trash-2 pl--0"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{-- {{ $courses->links() }} --}}
        </div>
    </div>
</body>

<!-- End Enrole Course  -->

<!-- End Enrole Course  -->

    {{-- Sweet alert delete Script--}}
{{--     
    <script>
        window.addEventListener('show-delete-confirmation', event => {
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
                        Livewire.emit('deleteConfirmed')
                    }
            })
        });
    </script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script> --}}
