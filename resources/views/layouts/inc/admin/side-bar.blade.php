<!-- Start Dashboard Sidebar  -->
<div class="rbt-default-sidebar sticky-top rbt-shadow-box rbt-gradient-border">
    <div class="inner">
        <div class="content-item-content">

            <div class="rbt-default-sidebar-wrapper">
                <div class="section-title mb--20">
                    <h6 class="rbt-title-style-2">Welcome, Admin</h6>
                </div>
                <nav class="mainmenu-nav">
                    <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                        <li><a href="{{ url('admin/Dashboard') }}"><i class="feather-home"></i><span>Dashboard</span></a></li>
                        <li><a href="#"><i class="feather-user"></i><span>Mon profil</span></a></li>
                        <li><a href="{{ url('admin/Languages') }}"><i class="feather-message-square"></i><span>Langues</span></a></li>
                        <li><a href="{{ url('admin/Announcements') }}"><i class="feather-volume-2"></i><span>Annonces</span></a></li>
                        <li><a href="{{ url('admin/Users') }}"><i class="feather-users"></i><span>Utilisateurs (Admin)</span></a></li>
                    </ul>
                </nav>

                <div class="section-title mt--40 mb--20">
                    <h6 class="rbt-title-style-2">Vague d'Inscription</h6>
                </div>

                <nav class="mainmenu-nav">
                    <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                        <li><a href="{{ url('admin/exams') }}"><i class="feather-calendar"></i><span>Calendrier des examens</span></a></li>
                        <li><a href="{{ url('admin/registrations') }}"><i class="feather-users"></i><span>Inscriptions</span></a></li>
                        <li><a href="{{ url('admin/payments') }}"><i class="feather-dollar-sign"></i><span>Paiement</span></a></li>
                        <li><a href="{{ url('admin/convocations') }}"><i class="feather-file-text"></i><span>Convocation</span></a></li>
                        <li><a href="{{ url('admin/results') }}"><i class="feather-award"></i><span>Résultats</span></a></li>
                    </ul>
                </nav>


                <div class="section-title mt--40 mb--20">
                    <h6 class="rbt-title-style-2">Paramètre de Compte</h6>
                </div>

                <nav class="mainmenu-nav">
                    <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                        <li><a href="#"><i class="feather-settings"></i><span>Paramètres</span></a></li>
                        <li><a href="#"><i class="feather-log-out"></i><span>Déconnecter</span></a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</div>
<!-- End Dashboard Sidebar  -->
