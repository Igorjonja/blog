<nav class="navbar navbar-expand-lg navbar-light bg-light">


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <?php
            $q = "SELECT * FROM pages";
            $r = mysqli_query($dbc, $q);

            while( $nav = mysqli_fetch_assoc($r)) { ?>

                <li <?php if($pageid == $nav['id']) { echo 'class="active"'; } ?> >
                    <a class="nav-link " href="?page=<?php echo $nav['id']; ?>"><?php echo $nav['label']; ?></a></li>
                    <?php } ?>

            <li><a class="nav-link" href="#">FAQ</a></li>
        </ul>
    </div>
</nav>