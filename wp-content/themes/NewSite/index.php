<!-- ヘッダーは「header.php」で管理 -->
<?php get_header(); ?>

    <?php if(is_home()): ?>
    <div class="jumbotron">
        <div class="jumbotron_item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/slider_00.png')"></div>
        <div class="jumbotron_item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/slider_01.png')"></div>
        <div class="jumbotron_item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/slider_02.png')"></div>
    </div>
    <?php endif; ?>

    <section class="sec">
        <div class="container">
            <header class="sec_header">
                <h2 class="title">News<span>最新情報</span></h2>
            </header>

            <div class="row">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <div class="col-md-4">
                            <article id="post-<?php the_ID(); ?>"<?php post_class('news'); ?>>
                                <div class="news_pic">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/menu_00.png" alt="">
                                    </a>
                                </div>
                                <div class="news_meta">
                                    <?php the_category(); ?>
                                    <time class="news_time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                                </div>
                                <h2 class="news_title"><a href="#">タイトルタイトルタイトルタイトル</a></h2>
                                <div class="news_desc">
                                    <p>概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。</p>
                                    <p><a href="#">[続きを読む]</a></p>
                                </div>
                            </article>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <p class="sec_btn">
                <a href="" class="btn btn-default">最新情報の一覧<i class="fas fa-angle-right"></i></a>
            </p>

        </div>
    </section>

    <section class="sec bg-gray">
        <div class="container">
            <header class="sec_header">
                <h2 class="title">INFORMATION<span>店舗情報</span></h2>
            </header>

            <div class="row">
                <div class="col-md-6">
                    <a href="#" class="bnr" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/shop_00.png')">
                        <div class="bnr_inner">
                        Boulangerie mugi<span>(ブーランジェリー ムギ)</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-6">
                    <a href="#" class="bnr" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/shop_01.png')">
                        <div class="bnr_inner">
                        Marche NATURE<span>(マルシェ・ナチュール)</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-6">
                    <a href="#" class="bnr" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/shop_02.png')">
                        <div class="bnr_inner">
                        Café Nature<span>(カフェ・ナチュール)</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-6">
                    <a href="#" class="bnr" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/shop_03.png')">
                        <div class="bnr_inner">
                        YOMOGI<span>(ヨモギ)</span>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section class="sec sec-bg">
        <div class="sec_inner">
            <header class="sec_header">
                <h2 class="title">On line shop<span>ブーランジェリームギ　オンラインショップ</span></h2>
            </header>

            <!-- <div class="sec_body contact">
                <div class="contact_icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="contact_body">
                    <p>
                        お気軽にお問い合わせください
                        <span>086-000-0000</span>
                    </p>
                </div>
            </div> -->

            <div class="sec_btn">
                <a href="http://shop.mugi.co.jp/" class="btn btn-default">お買い物は、こちらからどうぞ<i class="fas fa-angle-right"></i></a>
            </div>
        </div>
    </section>

    <!-- フッターは「footer.php」で管理 -->
    <?php get_footer(); ?>
