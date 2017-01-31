<section class="section-block featured-media tm-slider-parallax-container">
    <div class="tm-slider-container full-width-slider" data-featured-slider data-parallax data-scale-under="960">
        <ul class="tms-slides">
            <li class="tms-slide" data-image data-force-fit data-overlay-bkg-color="#000000" data-overlay-bkg-opacity="0.70">
                <div class="tms-content">
                    <div class="tms-content-inner center v-align-middle">
                        <div class="row">
                            <div class="column width-12">
                                @if(isset($metas[$value->id]['title']))
                                    <h1 class="title-xlarge font-alt-2 weight-light color-white mb-20">
                                        <span class="tms-caption" data-animate-in="preset:slideInDownShort;duration:800ms;delay:200;" data-no-scale>{{$metas[$value->id]['title']}}</span>
                                    </h1>
                                @endif
                                <div class="clear"></div>
                                    @if(isset($metas[$value->id]['subtitle']))
                                        <p class="tms-caption lead mb-30 color-grey-ultralight"
                                           data-animate-in="preset:slideInUpShort;duration:900ms;delay:200ms;"
                                           data-no-scale
                                        >{{$metas[$value->id]['subtitle']}}</p>
                                    @endif
                                <div class="clear"></div>
                                @if(isset($metas[$value->id]['btn_title']))
                                    <a href="#demos" data-offset="-60" class="tms-caption button medium pill scroll-link border-white bkg-hover-theme color-white color-hover-white"
                                       data-animate-in="preset:scaleOut;duration:900ms;delay:400ms;"
                                       data-no-scale
                                    >{{$metas[$value->id]['btn_title']}}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <img data-src="images/generic/hero-screens.jpg" src="images/blank.png" alt=""/>
            </li>
        </ul>
    </div>
</section>