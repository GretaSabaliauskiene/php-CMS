<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./index.php">CMS Admin</a>
    </div>
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
        <li><a href="../index.php">View Site</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Greta <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li class="divider"></li>
                <li>
                    <a class="btn" href="login.php?action=logout"> Log Out</a>
            </ul>
        </li>
    </ul>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#posts"><i class="fa fa-fw fa-arrows-v"></i> Posts <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="posts" class="collapse">
                    <li>
                        <a href="./posts.php">View All Posts</a>
                    </li>
                    <li>
                        <a href="posts.php?opt=add_post">Add New Post</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="./categories.php"><i class="fa fa-fw fa-desktop"></i>Categories</a>
            </li>
        </ul>
    </div>
</nav>