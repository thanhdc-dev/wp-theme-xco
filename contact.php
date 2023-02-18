<?php
/*
 Template Name: Contact
 */
?>

<?php get_header(); ?>

<div class="contact-page-wrap">
  <div id="content pb-0">

    <h1 class="heading-title hidden">Liên hệ</h1>
    <h2 class="box-heading mb-35 text-center wow fadeInUp  animated" style="visibility: visible; animation-name: fadeInUp;"><span>Liên hệ với chúng tôi</span></h2>
    <div class="container">
      <div class="contact-info-detail wow fadeInUp  animated" style="visibility: visible; animation-name: fadeInUp;">
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <div class="contact-item" style="height: 174px;">
              <div>
                <div class="icon"><img src="http://xcons.com.vn/public/home/img/phone-icon.png" alt="icon" class="center-block"></div>
                <p class="text-center">0242 216 8585</p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="contact-item" style="height: 174px;">
              <div>
                <div class="icon"><img src="http://xcons.com.vn/public/home/img/map-icon.png" alt="icon" class="center-block"></div>
                <p class="text-center">Tòa nhà 168 đường Láng, Thịnh Quang, Đống Đa, Hà Nội</p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="contact-item" style="height: 174px;">
              <div>
                <div class="icon"><img src="http://xcons.com.vn/public/home/img/mail-icon.png" alt="icon" class="center-block"></div>
                <p class="text-center">kinhdoanh@xcons.com.vn</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="contact-page-form wow fadeInUp  animated" style="visibility: visible; animation-name: fadeInUp;">
      <h2 class="box-heading mb-35 text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"><span>Liên hệ</span></h2>
      <div class="container">
        <form action="http://xcons.com.vn/lien-he.html" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-push-2">
              <input type="text" name="name" value="" placeholder="Họ &amp; tên *" class="form-control text-input">
            </div>
            <div class="col-xs-12 col-sm-8 col-sm-push-2">
              <input type="email" name="email" value="" placeholder="Email" class="form-control text-input">
            </div>
            <div class="clearfix"></div>
            <div class="col-xs-12 col-sm-8 col-sm-push-2">
              <input type="tel" name="phone" value="" placeholder="Điện thoại *" class="form-control text-input">
            </div>
            <div class="col-xs-12 col-sm-8 col-sm-push-2">
              <input type="text" name="title" value="" placeholder="Địa chỉ" class="form-control text-input">
            </div>
            <div class="clearfix"></div>
            <div class="col-xs-12 col-sm-8 col-sm-push-2">
              <textarea name="enquiry" placeholder="Nội dung *" class="form-control"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-push-2">
              <div class="register-form" role="form">

              </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-sm-push-2">
              <div class="text-center">
                <input class="btn btn-primary submit-form" type="submit" value="Gửi đi">
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </form>

          <?php echo do_shortcode('[contact-form-7 id="17" title="Form liên hệ"]')?>
      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>
