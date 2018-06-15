<?php require_once ('layouts/header.php'); ?>
<!-- Home Page Content -->
</div class="page-wrapper">
    <?php require_once ('layouts/navbar.php'); ?>
    <div class="main_bg aligner">
        <div class="text">
            <h1>Where words fail, music speaks.</h1>
            <h5>Hans Christian Andersen</h5>
        </div>
    </div>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="info-containers">
                        <i class="material-icons">album</i>
                    </div>
                    <div class="info-headers">
                        <h3>Albums</h3>
                    </div>
                    <div>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </div>
                </div>
                <div class="col text-center">
                    <div class="info-containers">
                        <i class="material-icons">audiotrack</i>
                    </div>
                    <div class="info-headers">
                        <h3>Tracks</h3>
                    </div>
                    <div>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </div>
                </div>
                <div class="col text-center">
                    <div class="info-containers">
                        <i class="material-icons">star</i>
                    </div>
                    <div class="info-headers">
                        <h3>Artists</h3>
                    </div>
                    <div>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </div>
                </div>
                <div class="col text-center">
                    <div class="info-containers">
                        <i class="material-icons">swap_vert</i>
                    </div>
                    <div class="info-headers">
                        <h3>Public</h3>
                    </div>
                    <div>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </div>
                </div>
            </div>
            <?= $artists_count ?>
        </div>
    </div>
</div>
<?php require_once ('layouts/footer.php'); ?>

