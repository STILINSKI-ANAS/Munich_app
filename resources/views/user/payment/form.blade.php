@extends('layouts.user')

@section('content')
    <main class="rbt-main-wrapper">
        <div class="rbt-page-banner-wrapper">
            <div class="rbt-banner-image"></div>
            <div class="rbt-banner-content">
                <div class="rbt-banner-content-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="page-list">
                                    <li class="rbt-breadcrumb-item"><a href="{{ route('exams') }}">Calendrier des examens</a></li>
                                    <li>
                                        <div class="icon-right"><i class="feather-chevron-right"></i></div>
                                    </li>
                                    <li class="rbt-breadcrumb-item active">Paiement</li>
                                </ul>
                                <div class="title-wrapper">
                                    <h1 class="title mb--0">Soumettre le paiement</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rbt-section-overlayping-top rbt-section-gapBottom">
            <div class="inner">
                <div class="container">
                    <div class="row justify-content-left">
                        <div class="col-lg-12">
                            <div class="rbt-card shadow-sm">
                                <div class="rbt-card-header  text-white">
                                    <h3 class="title mb--30">Paiement</h3>
                                </div>
                                <div class="rbt-card-body">
                                    <form method="POST" action="{{ route('payment.submit') }}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="registration_id" value="{{ session('registration_id') }}">

                                        <div class="mb-3">
                                            <label for="registration_reference" class="form-label">Référence d'inscription</label>
                                            <input type="text" class="form-control" id="registration_reference" name="registration_reference" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="payment_reference" class="form-label">Référence de paiement</label>
                                            <input type="text" class="form-control" id="payment_reference" name="payment_reference" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="payment_date" class="form-label">Date de paiement</label>
                                            <input type="date" class="form-control" id="payment_date" name="payment_date" required>
                                        </div>

                                        <div class="course-field mb--20">
                                            <h6>Payment Receipt</h6>
                                            <div class="rbt-create-course-thumbnail upload-area">
                                                <div class="upload-area">
                                                    <div class="brows-file-wrapper" data-black-overlay="9">
                                                        <input name="payment_receipt" id="payment_receipt" type="file" class="inputfile" />
                                                        <img id="paymentReceiptImage" src="{{ asset('assets/images/others/thumbnail-placeholder.svg') }}" alt="Payment Receipt">
                                                        <label class="d-flex" for="payment_receipt" title="No File Chosen">
                                                            <i class="feather-upload"></i>
                                                            <span class="text-center">Choose a File</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <small><i class="feather-info"></i> <b>Size:</b> As per requirement, <b>File Support:</b> JPG, JPEG, PNG, GIF, WEBP</small>
                                        </div>
                                        <script>
                                            function previewImage(inputId, imgId) {
                                                const input = document.getElementById(inputId);
                                                const img = document.getElementById(imgId);
                                                input.addEventListener('change', function() {
                                                    const [file] = this.files;
                                                    if (file) {
                                                        img.src = URL.createObjectURL(file);
                                                    }
                                                });
                                            }

                                            previewImage('payment_receipt', 'paymentReceiptImage');
                                        </script>



                                        <div class="d-grid">
                                            <button type="submit" class="rbt-btn btn-gradient">Soumettre</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
