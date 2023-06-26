<div>
<div>
    <h1>Commande</h1>
</div>

<div class="card-body" wire:init="firstrender">
    <div class="background-loading" style="display: {{$loading}};">
        <div class="loading-box">
            <div class="inter-load">
                <div class="rect rect1"></div>
                <div class="rect rect2"></div>
                <div class="rect rect3"></div>
                <div class="rect rect4"></div>
                <div class="rect rect5"></div>
            </div>
        </div>
    </div>
    <style>
        .background-loading{
            background: #FFFFFF;
            position: absolute;
            width: 80%;
            height: 75%;
            z-index: 6999;
            border-radius: 8px;
            border: 2px solid #E6E3F1;
        }
        .loading-box {
            width: 200px;
            height: 200px;
            border: 5px solid #000000;
            margin: 200px auto;
            position: relative;
            z-index: 7000;
        }

        .inter-load {
            width: 100px;
            height: 50px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            text-align: center;
        }

        .rect {
            background: #000000;
            display: inline-block;
            height: 60px;
            width: 7px;
            margin: 0 1px;
            animation: load 1.3s infinite ease-in-out;
        }

        @keyframes load {
            0% {
                transform: scaleY(0.4);
            }
            20% {
                transform: scaleY(1);
            }
            40% {
                transform: scaleY(0.4);
            }
            100% {
                transform: scaleY(0.4);
            }
        }

        .rect2 {
            animation-delay: -1.2s;
        }
        .rect3 {
            animation-delay: -1.1s;
        }
        .rect4 {
            animation-delay: -1s;
        }
        .rect5 {
            animation-delay: -0.9s;
        }
    </style>
    <!-- Start Course Field Wrapper  -->
    <form action="{{ url('admin/Orders')}}" method="POST">
        <div>
            @csrf
        </div>
        <div class="rbt-course-field-wrapper rbt-default-form card p-2 mb-3 rounded-3">
            <h4 class="card-title" >
{{--                <i class="feather-message-square"></i>--}}
                Information Commande :
            </h4>
            <div class="row">
            </div>

            <div class="row">
                <div class="course-field mb--15 col-12">
                    <label for="field-1">Selectionnez L'etudiant :</label>
                    <select id="Etudiant_options" name="etudiant_id" required>
                        <option value="" selected>-- Select --</option>
                        @foreach($etudiants as $etudiant)
                            <option wire:key="etudiant-{{ $etudiant->id }}" value="{{$etudiant->id}}">{{$etudiant->prenom}} {{$etudiant->nom}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row">
                    <div class="course-field mb--15 col-12">
                        <label for="field-1">Produit</label>
                        <select id="produit_options" wire:model="produit_options" wire:change.prevent="handleproduitChange" name="type" required>
                            <option value="">-- Select --</option>
                            <option value="Cours">Cours</option>
                            <option value="Test">Test</option>
                        </select>

                        <div id="Cours-area" style="display: {{ $Coursarea }};">
                            <label for="CoursInput">Selectionnez Un Cours:</label>
                            <select id="CoursInput" wire:model="selectedCourse" {{ $CoursInput }} wire:change.prevent="calcul" name="course_id">
                                <option value="">-- Select --</option>
                            @foreach($courses as $course)
                                    <option wire:key="course-{{ $course->id }}" value="{{$course->id}}">{{$course->level}}  ||  {{$course->overview}}  ||  {{$course->price}}MAD</option>
                                @endforeach
                            </select>
                        </div>
                        <div id="Test-area" style="display: {{ $Testarea }};">
                            <label for="TestInput">Selectionnez Un Test:</label>
                            <select id="TestInput" name="test_id" wire:model="selectedTest" {{ $TestInput }} wire:change.prevent="calcul">
                                <option value="">-- Select --</option>
                                @foreach($tests as $test)
                                    <option wire:key="test-{{ $test->id }}" value="{{$test->id}}">{{$test->level}}  ||  {{$test->overview}}  ||  {{$test->price}}MAD</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
{{--                    <H2>Produit: @json($selectedProduct)</H2>--}}
                </div>

            </div>

            <div class="rbt-course-field-wrapper rbt-default-form card p-2 mb-3 rounded-3">
                <h4 class="card-title" >
{{--                    <i class="feather-message-square"></i>--}}
                    Paiement :
                </h4>
                <div id="methodePay-area" style="display: {{ $mPayDisplay }};">
                    <label for="methodePay">Selectionnez La methode de Paiement:</label>
                    <select id="methodePay" name="methodePay" {{ $mPayInput }}>
                        <option value="" selected>-- Methode de Paiement --</option>
                        @foreach($methodesPay as $method)
                            <option value="{{$method}}">{{$method}}</option>
                        @endforeach
                    </select>
                </div>
                <div id="status-area" style="display: {{ $mPayDisplay }};">
                    <label for="statusInput">Selectionnez Le status de Paiement:</label>
                    <select id="statusInput" name="status" {{ $mPayInput }}>
                        <option value="" selected>-- Status de Paiement --</option>
                        @foreach($statuss as $status)
                            <option value="{{$status}}">{{$status}}</option>
                        @endforeach
                    </select>
                </div>
                <label for="reference">Entrer le reference de paiemenet</label>
                <input id="reference" type="text" value="" placeholder="Entrer le reference de paiemenet" name="reference">
                <H2>Total a Payer: {{$totalPay}} MAD</H2>
                <input hidden="hidden" type="text" value="{{$totalPay}}" name="total">



            </div>

            <div class="form-group mb--0">
                <button class="rbt-btn rbt-switch-btn btn-gradient radius-round btn-sm" type="submit">
                    <span data-text="Ajouter">Ajouter</span>
                </button>
            </div>
        </div>
    </form>

    <!-- End Course Field Wrapper  -->
</div>
</div>
