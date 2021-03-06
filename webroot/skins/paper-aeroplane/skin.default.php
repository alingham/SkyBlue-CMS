<?php fragment(array('name' => 'segments', 'view' => 'header')); ?>
    <div class="container_12" id="top_container">
        <a href="[[site.url]]" id="logo" class="grid_3"><span class="hide">Home</span></a>
        <?php 
            fragment(array(
                'name' => 'menu', 
                'view' => 'view3', 
                'menu_id' => '1'
            )); 
        ?>
        <div class="grid_1">
            <a href="search.html" id="search-button"><span class="hide">Search</span></a>
            <a href="[[site.url]]rss" id="rss-button"><span class="hide">RSS</span></a>
        </div>
        <div class="clear"></div>
    </div>
    <div class="container_12" id="main-content">
        <div class="grid_8 no_margin_left">
            <div class="grid_8 blog-intro">
                <div class="article-header">
                    <h2 class="cufon"><a href="">[[page.title]]</a></h2>
                    <h3 class="cufon">[[page.modified(m.d.Y)]] : <em>By [[page.author]]</em></h3>
                </div>
                <div class="clear"></div>
                <?php fragment(array('name' => 'page')); ?>
            </div>
            <div class="clear"></div>
        </div>
        <div class="grid_4">
            <div class="menu grid_4 no_margin_left">
                <?php 
                    fragment(array(
                        'name' => 'links', 
                        'heading' => 'Blog Roll', 
                        'class' => 'section-heading no_margin_top', 
                        'tag' => 'h3'
                    )); 
                ?>
            </div>
            <h3 class="grid_4 section-heading">Sponsors</h3>
            <div class="grid_4 ad-block-125x125">
                <a href=""><img src="[[skin.path]]images/ad-03.gif" alt="Banner Ad" /></a>
                <a href=""><img src="[[skin.path]]images/ad-02.gif" alt="Banner Ad" /></a>
                <a href=""><img src="[[skin.path]]images/ad-05.gif" alt="Banner Ad" /></a>
                <a href=""><img src="[[skin.path]]images/ad-06.gif" alt="Banner Ad" /></a>
            </div>
        </div>
    </div>        
<?php fragment(array('name' => 'segments', 'view' => 'footer')); ?>