<?php $pods_settings = pods('website_settings'); ?>
<section id="section-slider">
    <div class="m_slider_wrp">
        <div class="d-flex" id="video_holder">
            <video onloadstart="this.volume=0.5" id="v" autoplay muted="" loop="" playsinline="" width="100%" poster="">
                <source type="video/mp4" src="<?php echo $pods_settings->display('background_video'); ?>">
            </video>

            <div class="video_overlay"></div>
        </div>
        <div class="first_message_holder">
            <h2 class="playfair text-center f1"> Find your dream property</h2>
            <h4 class="opensan text-center f2">The strong and resilient property market in Dubai demands
                professionalism,
                knowledge, and commitment. At D&B
                Properties, we have proven track record of excelling in all of them. Over the years, we have been
                catering
                to
                this rapidly growing property market by capturing opportunities efficiently.</h4>
        </div>
    </div>
</section>