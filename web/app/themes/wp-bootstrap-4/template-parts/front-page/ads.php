<?php 

$grp_condition_solution = get_field('ads_on_frontpage', 'option');
$condition_title = $grp_condition_solution['title'] ?? 'Giải pháp điều hoà';
$condition_desc = $grp_condition_solution['description'] ?? 'Daikin là nhà sản xuất máy điều hòa không khí hàng đầu thế giới và các sản phẩm của chúng tôi được bán tại hơn 140 quốc gia. Kể từ đầu những năm 1930, chúng tôi đã tiến một bước dài trong việc hiện thực hóa một môi trường và chất lượng cuộc sống tốt hơn thông qua việc cung cấp các giải pháp điều hòa không khí. Khám phá tiếng nói của khách hàng, công nghệ quan trọng và câu chuyện của chúng tôi. Khám phá Daikin.';
 
$banner_1 = $grp_condition_solution['banner_1'];
$banner_2 = $grp_condition_solution['banner_2'];
$banner_3 = $grp_condition_solution['banner_3'];
$banner_4 = $grp_condition_solution['banner_4'];
$banner_5 = $grp_condition_solution['banner_5'];
$banner_6 = $grp_condition_solution['banner_6'];

$b_title_1 = $banner_1['title'] ?: 'Cửa hàng tiện lợi';
$b_title_2 = $banner_2['title'] ?: 'Khách sạn nghỉ dưỡng';
$b_title_3 = $banner_3['title'] ?: 'Văn phòng';
$b_title_4 = $banner_4['title'] ?: 'Nhà phố, villa ,biệt thự';
$b_title_5 = $banner_5['title'] ?: 'Nhà hàng - Khách sạn';
$b_title_6 = $banner_6['title'] ?: 'Nhà máy sản xuất';

$b_img_1 = $banner_1['image'] ?: 'https://ad-daikin.daikin.com.vn:60444/storage/upload/media/ac-solutions/retail.png';
$b_img_2 = $banner_2['image'] ?: 'https://ad-daikin.daikin.com.vn:60444/storage/upload/media/ac-solutions/resort-and-hotel-1.png';
$b_img_3 = $banner_3['image'] ?: 'https://ad-daikin.daikin.com.vn:60444/storage/upload/media/ac-solutions/building.png';
$b_img_4 = $banner_4['image'] ?: 'https://ad-daikin.daikin.com.vn:60444/storage/upload/media/ac-solutions/building.png';
$b_img_5 = $banner_5['image'] ?: 'https://ad-daikin.daikin.com.vn:60444/storage/upload/media/ac-solutions/building.png';
$b_img_6 = $banner_6['image'] ?: 'https://ad-daikin.daikin.com.vn:60444/storage/upload/media/ac-solutions/building.png';

$b_link_1 = $banner_1['link'] ?: '#';
$b_link_2 = $banner_2['link'] ?: '#';
$b_link_3 = $banner_3['link'] ?: '#';
$b_link_4 = $banner_4['link'] ?: '#';
$b_link_5 = $banner_5['link'] ?: '#';
$b_link_6 = $banner_6['link'] ?: '#';
?>

<div class="container">
    <div class="advertisement-block">
        <div class="left-column">
            <h2 class="ad-title text-uppercase"><?= $condition_title ?></h2>
            <p class="ad-description"><?= $condition_desc ?></p>
        </div>
        <div class="right-column">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper swiper7">
                            <div class="swiper-wrapper">
                                <a class="sub-block swiper-slide" style="background-image: url('<?= esc_html($b_img_1) ?>');" href="<?= $b_link_1 ?>">
                                    <span class="sub-title"><?= esc_html($b_title_1)?></span>
                                </a>
                                <a class="sub-block swiper-slide" style="background-image: url('<?= esc_html($b_img_2) ?>');" href="<?= $b_link_2 ?>">
                                    <span class="sub-title"><?= esc_html($b_title_2) ?></span>
                                </a>
                                <a class="sub-block swiper-slide" style="background-image: url('<?= esc_html($b_img_3) ?>');" href="<?= $b_link_3 ?>">
                                    <span class="sub-title"><?= esc_html($b_title_3) ?></span>
                                </a>
                                <a class="sub-block swiper-slide" style="background-image: url('<?= esc_html($b_img_4) ?>');" href="<?= $b_link_4 ?>">
                                    <span class="sub-title"><?= esc_html($b_title_4)?></span>
                                </a>
                                <a class="sub-block swiper-slide" style="background-image: url('<?= esc_html($b_img_5) ?>');" href="<?= $b_link_5 ?>">
                                    <span class="sub-title"><?= esc_html($b_title_5) ?></span>
                                </a>
                                <a class="sub-block swiper-slide" style="background-image: url('<?= esc_html($b_img_6) ?>');" href="<?= $b_link_6 ?>">
                                    <span class="sub-title"><?= esc_html($b_title_6) ?></span>
                                </a>
                            </div>
                            <div class="swiper-button-prev swiper-button-prev_7 fa fa-angle-left"></div>
                            <div class="swiper-button-next swiper-button-next_7 fa fa-angle-right"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>