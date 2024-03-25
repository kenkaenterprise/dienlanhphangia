        <!-- ===========================
=== START 
-->

<style>
    #mainheader {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    #mainheader .logolink img {
        max-width: 100px;
    }

    #mainheader .mainlogo, #mainheader .infohotline {
        display: flex;
        flex-direction: row;
    }

    #mainheader .infohotline dt, #mainheader .infohotline dd {
        display: inline-block;
    }
</style>
<div class="d-none d-lg-block d-xl-block">
    <section class="header__main">
        <div class="container">
            <?php

          //  home_url()
            $logo = get_field( 'logo', 'options' );
           // echo $logo['url'];
            // the_field( 'ten_cong_ty', 'options' )
            // the_field( 'dia_chi', 'options' )
            // the_field( 'hotline', 'options' )
            // the_field( 'hotline_kinhdoanh', 'options' )
            //  the_field( 'hotline_baotri', 'options' )
            ?>

            <div class="row" id="mainheader">
                <div class="mainlogo">
                    <a class="logolink" href="<?=home_url()?>">
                        <img alt="phangia-logo" title="dienlanhphangia" src="<?= $logo['url']?>"/>
                    </a>
                    <div class="info-detail">
                        <div class="line1">Công ty TNHH Điện Lạnh</div>
                        <div class="line2">Phan Gia</div>
                    </div>
                </div>
                <div class="infocontact">
                    <ul class="list-service">
                        <li class="service1">Lắp đặt chuyên nghiệp</li>
                        <li class="service2">Bảo hành chính hãng</li>
                    </ul>
                </div>
                <div class="infohotline">
                    <div class="divonleft">
                        <img src="https://dienlanhphangia.com/wp-content/uploads/2024/03/logo-daikin.jpg" alt="daikin logo"/>
                    </div>
                    <div class="divonright">
                        <dl>
                            <dt>Hotline:</dt>
                            <dd>0931 837 839</dd>
                        </dl>
                        <dl>
                            <dt>Báo giá dự án:</dt>
                            <dd>0902 980 892</dd>
                        </dl>
                        <dl>
                            <dt>Báo giá dịch vụ:</dt>
                            <dd>0909 980 892</dd>
                        </dl>
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