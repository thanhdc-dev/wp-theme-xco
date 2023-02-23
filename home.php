<?php
/*
 Template Name: Home
 */
?>

<?php get_header(); ?>
<section class="box box-introduce">
    <div class="container">
        <div class="info wow fadeInLeft  animated">
            <h2 class="box-title text-center"><span><?php echo carbon_get_the_post_meta('introduce_title'); ?></span>
            </h2>
            <div class="description-detail text-center"><?php echo carbon_get_the_post_meta('introduce_description'); ?>
            </div>
        </div>
        <div class="img wow fadeInRight  mt-30 animated">
            <img src="<?php echo wp_get_attachment_image_url(carbon_get_the_post_meta('introduce_image')); ?>"
                 alt="<?php echo carbon_get_the_post_meta('introduce_title'); ?>" class="img-responsive center-block">
        </div>
    </div>
</section>
<?php
$projectTitle = carbon_get_the_post_meta('project_title') ?? '';
$projectBackgroundUrl = wp_get_attachment_image_url(carbon_get_the_post_meta('project_background') ?? 0);
$projectItems = carbon_get_the_post_meta('project_items') ?? [];
?>
<section class="box box-risks box-project-feature"
         style="background-image: url('<?php echo $projectBackgroundUrl; ?>')">
    <div class="container">
        <h2 class="box-title text-center white wow fadeInUp  mb-35 animated">
            <span><?php echo $projectTitle; ?></span></h2>
        <div class="box-content">
            <?php foreach ($projectItems as $i => $projectItem): ?>
                <?php
                $title = $projectItem['title'] ?? '';
                $description = $projectItem['description'] ?? '';
                $imageUrl = wp_get_attachment_image_url($projectItem['image']);
                ?>
                <?php if ($i % 2 == 0): ?>
                    <div class="item wow fadeInUp left animated">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <div class="info" style="height: 351px;">
                                    <h3 class="box-title mb-20"><span><?php echo $title; ?></span></h3>
                                    <div class="description"><?php echo $description; ?></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-8">
                                <img src="<?php echo $imageUrl; ?>"
                                     alt="<span><?php echo $title; ?>"
                                     class="img-responsive center-block img-get-height-box">
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="item wow fadeInUp right animated">
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 hidden-xs">
                                <img src="<?php echo $imageUrl; ?>"
                                     alt="Công trình tiêu biểu" class="img-responsive center-block">
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <div class="info" style="height: 351px;">
                                    <h3 class="box-title mb-20"><span><?php echo $title; ?></span></h3>
                                    <div class="description"><?php echo $description; ?></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-8 visible-xs">
                                <img src="<?php echo $imageUrl; ?>"
                                     alt="<span><?php echo $title; ?>"
                                     class="img-responsive center-block img-get-height-box">
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php
$videoTitle = carbon_get_the_post_meta('video_title') ?? '';
$videoDescription = carbon_get_the_post_meta('video_description') ?? '';
$videoItems = carbon_get_the_post_meta('video_items') ?? [];
$videoItemFirst = count($videoItems) ? $videoItems[0] : null;
?>
<section class="box box-video">
    <div class="container">
        <h2 class="box-heading wow fadeInUp  text-center animated"><span><?php echo $videoTitle; ?></span></h2>
        <div class="description-detail text-center mb-30 wow fadeInUp  animated"><?php echo $videoDescription; ?></div>
        <div class="box-content">
            <div class="wpb_wrapper wow fadeInUp  animated">
                <div class="td_block_wrap td_block_video_playlist ">
                    <div class="td_uid_38_5d60f116c6d96 td_block_inner">
                        <div class="td_video_playlist_column_3">
                            <div class="td_wrapper_video_playlist">
                                <div class="td_wrapper_player td_wrapper_playlist_player_youtube"
                                     data-first-video="<?php echo $videoItemFirst['youtube_id'] ?? '';?>" data-autoplay="0">
                                    <iframe id="player_youtube_0" allowfullscreen="1"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            title="<?php echo $videoItemFirst['title']; ?>" width="100%"
                                            height="100%"
                                            src="<?php echo "https://www.youtube.com/embed/{$videoItemFirst['youtube_id']}?autoplay=0&amp;enablejsapi=1&amp;widgetid=1"?>"></iframe>
                                </div>
                                <div class="td_container_video_playlist ">
                                    <div id="td_youtube_playlist_video"
                                         class="td_playlist_clickable td_add_scrollbar_to_playlist">
                                        <?php foreach ($videoItems as $index => $video): ?>
                                            <?php
                                            $title = $video['title'] ?? '';
                                            $imageUrl = $video['image_url'] ?? '';
                                            $youtubeId = $video['youtube_id'] ?? '';
                                            ?>
                                            <a class="td_<?php echo $youtubeId?> td_click_video td_click_video_youtube <?php echo $index == 0 ? 'td_video_currently_playing' : ''?>"
                                               data-video-id="<?php echo $youtubeId; ?>">
                                                <div class="td_video_thumb">
                                                    <img src="<?php echo $imageUrl; ?>" alt="">
                                                </div>
                                                <div class="td_video_title_and_time">
                                                    <div class="td_video_title"><?php echo $title; ?></div>
                                                </div>
                                            </a>
                                        <?php endforeach;?>
                                    </div>
                                </div>
                            </div>
                            <script>
                                if (undefined === window.td_youtube_list_ids) {
                                    window.td_youtube_list_ids = {}
                                }
                                <?php foreach ($videoItems as $index => $video): ?>
                                    <?php
                                    $title = "{$video['title']}";
                                    $youtubeId = $video['youtube_id'] ?? '';
                                    ?>
                                    window.td_youtube_list_ids['<?php echo "td_{$youtubeId}";?>'] = {
                                        title: "<?php echo $title; ?>",
                                        time: "00"
                                    };
                                <?php endforeach; ?>
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$feedbackTitle = carbon_get_the_post_meta('feedback_title') ?? '';
$feedbackDescription = carbon_get_the_post_meta('feedback_description') ?? '';
$feedbackBackgroundUrl = wp_get_attachment_image_url(carbon_get_the_post_meta('feedback_background') ?? 0);
$feedbackItems = carbon_get_the_post_meta('feedback_items') ?? [];
?>
<section class="box box-testimonial"
         style="background-image: url('<?php echo $feedbackBackgroundUrl; ?>')">
    <div class="container">
        <h2 class="box-title text-center visible-xs"><span><?php echo $feedbackTitle; ?></span></h2>
        <div class="box-main">
            <div class="row wow fadeInUp  animated">
                <div class="hidden-xs col-sm-5">
                    <h3><?php echo $feedbackTitle; ?></h3>
                </div>
                <div class="col-xs-12 col-sm-7">
                    <div class="box-content">
                        <div class="owl-carousel owl-theme">
                            <?php foreach ($feedbackItems as $index => $feedback): ?>
                                <?php
                                $idx = $index + 1;
                                $description = $feedback['description'] ?? '';
                                $imageUrl = wp_get_attachment_image_url($feedback['image']);
                                $name = $feedback['name'] ?? '';
                                $position = $feedback['position'] ?? '';
                                ?>
                                <div class="item">
                                    <div class="sort"><span><?php echo sprintf('%02d', $idx); ?></span></div>
                                    <div class="description">"<?php echo $description; ?>"
                                    </div>
                                    <div class="img pull-left">
                                        <img src="<?php echo $imageUrl; ?>"
                                             class="img-responsive"
                                             alt="<?php echo $name; ?>">
                                    </div>
                                    <div class="info pull-left">
                                        <div class="name"><?php echo $name; ?></div>
                                        <span><?php echo $position; ?></span>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
