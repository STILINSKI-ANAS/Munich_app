@extends('layouts.user')
@section('content')

<div class="rbt-overlay-page-wrapper">
    <div class="breadcrumb-image-container breadcrumb-style-max-width">
        <div class="breadcrumb-image-wrapper">
            <img src="assets/images/bg/bg-image-10.jpg" alt="Education Images">
        </div>
        <div class="breadcrumb-content-top text-center">
            <ul class="meta-list justify-content-center mb--10">
                <li class="list-item">

                    <div class="author-info">
                        <a href="#"><strong>Institut Munich</strong></a>
                    </div>
                </li>

            </ul>
            <h1 class="title">Merci a vous</h1>
            <p>Nous vous remercions de votre inscription à l'examen TELC Deutsch qui se déroulera dans notre établissement. Nous sommes ravis de vous compter parmi nos candidats et nous souhaitons vous fournir quelques informations importantes concernant
                votre&nbsp;inscription.
            </p>
        </div>
    </div>

    <div class="rbt-blog-details-area rbt-section-gapBottom breadcrumb-style-max-width">
        <div class="blog-content-wrapper rbt-article-content-wrapper">

            <div class="content">
                <div class="post-thumbnail mb--30 position-relative wp-block-image blog-post-gallery-wrapper alignwide">
                    <div class="swiper rbt-arrow-between blog-post-gallery-activation swiper-initialized swiper-horizontal swiper-pointer-events swiper-autoheight swiper-backface-hidden">

                        <div class="wrapper">
                            <div class="">
                                <figure>
                                    <img src="{{ asset('assets/images/cover.jpg')}}" alt="Blog Images">
                                </figure>
                            </div>

                        </div>




                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
            </div>


            <!-- Social Share Block  -->





        </div>


    </div>
</div>

<div class="rbt-progress-parent">
    <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
@endsection
