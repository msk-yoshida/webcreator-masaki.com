<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
    <main id="site-content">
        <div class="row position-relative" style="height: 600px;">
            <div class="position-absolute h-100 d-flex align-items-center justify-content-center">
                <h2 class="fw-bold text-white-50">サイトコンテンツ</h2>
            </div>
            <img class="h-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/top.jpg">
        </div>
        <div class="container">

            <section class="py-3 my-3">
                <div class="row">
                    <h3>service</h3>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <a class="btn h-100" href="#">
                            <div class="card h-100">
                                <div class="card-header">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <i class="fa-brands fa-git-square"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title fw-bolder">ホームページ制作</h5>
                                    <p class="card-text h-100">Webサイトでの集客には、キーワードや使いやすさが必要です。SEOを考慮した設計を提案させて頂きます。</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a class="btn h-100" href="#">
                            <div class="card h-100">
                                <div class="card-header">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <i class="fa-brands fa-git-square"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title fw-bolder">Webシステム制作</h5>
                                    <p class="card-text">Webシステムにとって重要であるのは使いやすさやです。実現したい機能を開発することはもちろんですが、運用時のストレスで使われなければコストがかかるだけで業務システムの効率向上にはなりません。</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a class="btn h-100" href="#">
                            <div class="card h-100">
                                <div class="card-header">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <i class="fa-brands fa-git-square"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title fw-bolder">業務委託</h5>
                                    <p class="card-text">業務委託には委託、受託の双方に信頼がなければ成立しません。迅速な完工を目指し、報連相により意志の相違を防ぎ、誠意と向上心を持って業務致します。</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </section>

        </div>

        <section id="profile" class="py-3 my-3 bg-light">

            <div class="container">
                <div class="row">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-lg-6">
                            <div class="about-text go-to">
                                <h3 class="dark-color">profile</h3>
                                <p class="theme-color lead fw-bold">吉田 正貴</p>
                                <p>yoshida masaki</p>
                                <p>
                                    1991年10月7日生まれ。
                                    広島県福山市出身で現在も地元を拠点としてWeb制作活動しております。
                                    独学でプログラミングを取得し、2020年12月に地元Web制作会社に就職しシステム開発や、ホームページ制作の要件定義、サイト設計、コーディング、テスト工程などを任せて頂きました。
                                    その後は退職し、フリーランスとしてWeb制作に携わっております。
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-avatar">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" title="" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="counter py-5 shadow rounded">
                        <h5 class="text-white fs-2 mx-3">言語一覧</h5>
                        <div class="row">
                            <div class="col-6 col-lg-3 py-3">
                                <div class="text-center">
                                    <figure class="p-1 bg-light rounded-circle mb-3">
                                        <span>HTML</span>
                                        <img class="w-50 h-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/html.svg">
                                    </figure>
                                    <p class="text-light fs-2">4<span class="fs-5 m-1">年</span></p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 py-3">
                                <div class="text-center">
                                    <figure class="p-1 bg-light rounded-circle mb-3">
                                        <span>CSS</span>
                                        <img class="w-50 h-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/css.svg">
                                    </figure>
                                    <p class="text-light fs-2">4<span class="fs-5 m-1">年</span></p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 py-3">
                                <div class="text-center">
                                    <figure class="p-1 bg-light rounded-circle mb-3">
                                        <span>JavaScript</span>
                                        <img class="w-50 h-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/js.svg">
                                    </figure>
                                    <p class="text-light fs-2">4<span class="fs-5 m-1">年</span></p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 py-3">
                                <div class="text-center">
                                    <figure class="p-1 bg-light rounded-circle mb-3">
                                        <span>PHP</span>
                                        <img class="w-50 h-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/php.svg">
                                    </figure>
                                    <p class="text-light fs-2">4<span class="fs-5 m-1">年</span></p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 py-3">
                                <div class="text-center">
                                    <figure class="p-1 bg-light rounded-circle mb-3">
                                        <span>MySQL</span>
                                        <img class="w-50 h-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/mysql.svg">
                                    </figure>
                                    <p class="text-light fs-2">4<span class="fs-5 m-1">年</span></p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 py-3">
                                <div class="text-center">
                                    <figure class="p-1 bg-light rounded-circle mb-3">
                                        <span>Linux</span>
                                        <img class="w-50 h-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/linux.svg">
                                    </figure>
                                    <p class="text-light fs-2">4<span class="fs-5 m-1">年</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>






    </main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
