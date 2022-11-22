        <!-- ===========================
=== START 
-->
<div class="d-none d-lg-block d-xl-block">
    <section class="header__main">
        <div class="container">
            <div class="row">
                <div class="col-xl-1 d-none d-xl-block h-100 align-items-center">
                    <div class="logo_area">
                        <a href="<?php echo home_url(); ?>" title=""><img src="<?php $logo = get_field( 'logo', 'options' ); echo $logo['url']; ?>" alt=""></a>
                    </div>
                </div>
                <!-- end logo -->
                <div class="col-12 col-xl-7">
                    <div class="company_area text-center">
                        <div class="company_name chu-noi"><?php the_field( 'ten_cong_ty', 'options' ); ?></div>
                        <div class="company_alt">Địa chỉ: <?php the_field( 'dia_chi', 'options' ); ?></div>
                    </div>
                </div>
                <!-- end company -->
                <div class="col-xl-2t d-none d-xl-block">
                    <div class="company_phone d-flex justify-content-center">
                        <div class="icon_phone"><img width="70px" src="https://dienlanhphangia.com/wp-content/uploads/giot%20nuoc.png" alt="""></div>
                        <div class="text_phone">
                            <div>
                                <p>Hotline:</p>
                                <p class="m-0 chu-noi phones"><?php the_field( 'hotline', 'options' ); ?></p>
                            </div>
                            <div>
                                <p>Kinh doanh, Dự án:</p>
                                <p class="m-0 chu-noi phones">0902 980 892</p>
                            </div>
                            <div>
                                <p>Bảo trì, sữa chữa:</p>
                                <p class="m-0 chu-noi phones">0909 980 892</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
        <!-- =============== END  ====================== -->
<!-- end header main -->
<div class="header__menu d-none d-lg-block d-xl-block"> 
	<?php wp_nav_menu( array( 'theme_location' => 'menu-1') ); ?>
</div>