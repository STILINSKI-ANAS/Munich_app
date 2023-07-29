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
                        <li><a href="{{ url('admin/Course') }}"><i class="feather-book-open"></i><span>Cours</span></a></li>
                        <li><a href="{{ url('admin/Test') }}"><i class="feather-help-circle"></i><span>Tests</span></a></li>
                        <li><a href="{{ url('admin/Announcements') }}"><i class="feather-volume-2"></i><span>Annonces</span></a></li>                    </ul>
                </nav>

                <div class="section-title mt--40 mb--20">
                    <h6 class="rbt-title-style-2">Étudiants</h6>
                </div>

                <nav class="mainmenu-nav">
                    <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                        <li><a href="{{ url('admin/Etudiant') }}"><i class="feather-users"></i><span>Étudiants</span></a></li>
                        <li><a href="{{ url('admin/TestsInscriptions') }}"><i class="feather-shopping-bag"></i><span>Tests Inscriptions</span></a></li>
                        <li><a href="{{ url('admin/CoursInscriptions') }}"><i class="feather-shopping-bag"></i><span> Cours Inscriptions</span></a></li>
                        <li><a href="#"><i class="feather-message-square"></i><span>Resultats</span></a></li>
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
