<header>
    <nav class="navbar navbar-expand-lg cust-navbar	">
        <div class="collapse navbar-collapse col-sm-4 pr-0 " id="navbarSupportedContent">

            <ul id="primary" class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link">
                        Blog Application
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="sub-nav cust-sub-nav">
        <ul>
            <?php
            if ($categories !== null) {
                foreach ($categories as $category) {
                    echo  '<li>';
                    // echo '<a data-id="' . $category->id . '" href="">' . $category->category_name . '</a>';
                    echo '<a data-id="' . $category->id . '" href="' . base_url() . 'home/get_posts?id=' . $category->id . '">' . $category->category_name . '</a>';
                    echo '</li>';
                }
            }
            ?>
        </ul>
    </div>
</header>