<?php
require('index_header.php');
require('config.php');
?>
 <?php
               $nwo = mysqli_query($con,"SELECT * FROM banner");
               $nwo1 = mysqli_fetch_array($nwo);


               ?>


<div class=banner id=layerSlider style="width: 100%;">
        <div class=ls-slide data-ls="transition3d: 33,15; slidedelay: 8000 ; durationin:0;"><img
                src="<?php echo $nwo1['banner_image_background']?>" class=ls-bg alt="Slide background">

            <div class="ls-l layercontent01" style="top: 50%; left: 50%; z-index:4;"
                 data-ls="offsetxin:left; offsetxout:right; durationin: 4000; parallaxlevel: 8;"><img
                    src="<?php echo $nwo1['banner_image_player']?>" alt=innerimage class=img-responsive
                    style="max-width: 100% !important ;"></div>
            <img src="<?php echo $nwo1['banner_image_ball']?>" alt=innerimage class="ls-l layercontent02" style=z-index:5;
                 data-ls="offsetxin: right; offsetxout:left; rotatein:-360; easingin: easeoutquart; durationin: 4000; delayin: 250; parallaxlevel: -5;">
            <img src="<?php echo $nwo1['banner_image_front']?>" alt=particles class=ls-l style="z-index:3; left:0;"
                 data-ls="offsetxin: left; offsetxout:left; scalexin:50; easingin: easeoutquart; durationin: 3000; delayin: 250;">
            <img src="<?php echo $nwo1['banner_image_back']?>" alt=particles class=ls-l style="z-index:3; left:50%;"
                 data-ls="offsetxin: left; offsetxout:left; scalein:90; easingin: easeoutquart; durationin: 3000; delayin: 250;">

            <h2 class="ls-l bannertext layercontent03" data-ls="offsetxin:left; rotatexin:90 ; durationin: 3500;">
                action</h2>

            <h2 class="ls-l bannertext01 italic01 layercontent04"
                data-ls="offsetxin:left; scalexin:9; durationin: 4000;">starts</h2><h4
                    class="ls-l bannertext02 layercontent05" data-ls="offsetxin:left; rotatexin:90 ; durationin: 4500;">
                from</h4>

            <h2 class="ls-l bannertext01 layercontent06" style="left: 87%; top:760px;"
                data-ls="offsetxin:left; flipxin:90 ; durationin: 5000;">21<sup>st</sup></h2><h6
                    class="ls-l bannertext03 layercontent07" data-ls="offsetxin:left; flipxin:90 ; durationin: 6000;">
                july , 2025</h6></div>
    </div>
    <div class=banner-text>
        <div class=container>
            <div class=row>action start from 21<sup>st</sup> july , 2025.</div>
        </div>
    </div>
    
    <?php
               $result = mysqli_query($con,"SELECT * FROM latest_result");
               $result1 = mysqli_fetch_array($result);


               ?>
    <section class=latestResult>
        <div class=container>
            <div id="lr" class=row><h2 class=heading>latest <span>result</span></h2>

                <div class=latestResult-wrap><h4><?php echo $result1['result_title']?></h4>

                    <p><?php echo $result1['result_description']?></p></div>
                <div class="result clearfix">
                    <div class=result-details>
                        <div class=content><h4><?php echo $result1['result_team1name']?></h4>

                            <p><?php echo $result1['result_team1_score']?></p>

                            <p><?php echo $result1['result_team1_performence']?></p></div>
                        <div class=figure>
                            <div class=team-logo>
                                <div class=teamLogoImg><img src="<?php echo $result1['result_team1_image']?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class=result-count>
                        <div class=count-number><?php echo $result1['result_status']?><span class=lose-team></div>
                        <div class=dateTime>
                            <div class=dateTime-container><span class=date><?php echo $result1['result_datetime']?></span> <span>
</span></div>
                            <div class=country-wrap><span class=field><?php echo $result1['result_stadium']?></span> <span class=country><?php echo $result1['result_country']?></span>
                            </div>
                        </div>
                    </div>
                    <div class=result-details>
                        <div class="content contentresult"><h4><?php echo $result1['result_team2name']?></h4>

                            <p><?php echo $result1['result_team2_score']?></p>

                            <p><?php echo $result1['result_team2_performence']?></p>
</div>
                        <div class="figure figresult">
                            <div class=team-logo>
                                <div class=teamLogoImg><img src="<?php echo $result1['result_team2_image']?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class=center><a href=# class="btn btn-red score-btn">Score board</a></div>
                </div>
            </div>
        </div>
    </section>
    
    <section class=matchSchedule>
        <div class=container>
        <?php
               $shedule = mysqli_query($con,"SELECT * FROM match_schedule");
               while($shedule1 = mysqli_fetch_array($shedule)){


               ?>
            <div id="ms" class=row><h2 class=heading>match <span>schedule</span></h2>

                <p class=headParagraph><?php echo $shedule1['ms_description']?></p>

                <div class="matchSchedule_details row">
                    <div class="match_next right-triangle">
                        <div class="wrap_match_next right-triangle">
                            <div class=right-padding><h4 class=headline03>next match</h4></div>
                        </div>
                    </div>
                    <div class=match_versus>
                        <div class="bg-blackimg match_versus02">
                            <div class=nextmatchDetails><p></p>

                                <div class="wrap-logo clearfix">
                                    <div class=logo-match><img src="<?php echo $shedule1['ms_team1_image']?>" alt=image></div>
                                    <div class=match_vs>vs</div>
                                    <div class=logo-match><img src="<?php echo $shedule1['ms_team2_image']?>" alt=image></div>
                                </div>
                                <p class=match_dtls><?php echo $shedule1['ms_date']?> | <?php echo $shedule1['ms_day']?></p>

                                <p class=match_dtls><?php echo $shedule1['ms_stadium']?>(<?php echo $shedule1['ms_city']?>)</p></div>
                        </div>
                    </div>
                    <div class=match_timing>
                        <ul class=counter-wrap>
                            <li><span>12</span>days</li>
                            <li><span>18</span>hours</li>
                            <li><span>27</span>minutes</li>
                            <li><span>55</span>seconds</li>
                        </ul>
                    </div>
                </div>
                <?php
               }
               ?>
 
                <div class="matchSchedule_details row">
                    <div class=match_versus-wrap>
                        <div class=wrap_match-innerdetails>
                            <ul class="home_tInfo scrollable">
                            <?php
               $match = mysqli_query($con,"SELECT * FROM matches");
               while($match1 = mysqli_fetch_array($match)){


               ?>
                                <li><a href="#">
                                    <ul class="t_info match_info01 headline01 clearfix">
                                        <li>1</li>
                                        <li>
                                            <div class="headline01 clearfix"><span><?php echo $match1['match_team1_name']?></span><span
                                                    class=vs>vs</span> <span><?php echo $match1['match_team2_name']?></span></div>
                                            <div class="paragraph02 clearfix"><?php echo $match1['match_date']?></span>
                                                <span><?php echo $match1['match_time']?></span></div>
                                        </li>
                                    </ul>
                                </a></li>
                            
                                
<?php 
}
?>
                            </ul>
                        </div>
                    </div>
                 
             
                    <div class=match_next>
                        <div class="wrap_match_next left_triangle">
                            <div class=left_padding><h4 class=headline03>upcoming feature</h4></div>
                        </div>
                    </div>
                </div>
                <div class="matchSchedule_details row">
                    <div class=match_next>
                        <div class="wrap_match_next right-triangle">
                            <div class=right-padding><h4 class=headline03>pointed table</h4></div>
                        </div>
                    </div>
                    <div class=match_versus-wrap>
                        <div class=wrap_match-innerdetails>
                            <ul class="point_table scrollable">

                            <?php
               $point = mysqli_query($con,"SELECT * FROM point_table");
               while($point1 = mysqli_fetch_array($point)){


               ?>
                                <li class=clearfix>
                                    <div class=subPoint_table>
                                        <div class="headline01 smallpoint"><?php echo $point1['p_id']?></div>
                                        <div class="headline01 largepoint"><?php echo $point1['p_teamname']?></div>
                                        <div class="headline01 smallpoint row row"><span>p</span><span><?php echo $point1['p_points']?></span></div>
                                    </div>
                                </li>

                                <?php
               }
               ?>
                            </ul>
                        </div>
                    </div>
                </div>


                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </section>

    
    
    <section class=latestvideo>
        <div class=container>
            <div id="lv" class=row><h2 class=heading>latest <span>video</span></h2>
            <br>
            <br>
                <div class="video-wrap clearfix">
                    <div class="video-content clearfix"><a class=btn-up></a>
                        <ul class="videoLive clearfix" id=videoSlide role=tablist>
                 
                        
                        <?php
               $video = mysqli_query($con,"SELECT * FROM latest_video");
               while($video1 = mysqli_fetch_array($video)){


               ?>
                            <li><a class=changeVideo data-yt-video="<?php echo $video1['video_link']?>">
                                <div><span><?php echo $video1['video_date']?></span><?php echo $video1['video_title']?> : <span>Live audio and video</span>
                                </div>
                            </a></li>
                            <?php
               }
               ?>

                        </ul>
                        <a class=btn-down></a></div>
                    <div class=video-show>
                    <?php
               $video = mysqli_query($con,"SELECT * FROM latest_video");
            $video1 = mysqli_fetch_array($video)
               ?>
           <div class=video-container id=video01 data-current-video=W7qWa52k-nE>
                            <iframe src="https://youtu.be/qoRo4BNc1yg" class=liveVideo
                                    allowfullscreen=""></iframe>
                    
                        </div>        
                    </div>
                </div>
            </div>
        </div>
    </section>
               <section class="players homeplayer">
        <div class=container>
            <div id="oh" class=row><h2 class=heading>our <span>heroes</span></h2>
            <?php
               $hero = mysqli_query($con,"SELECT * FROM players_gallery");
            $hero1 = mysqli_fetch_array($hero)
               ?>

                <p class=headParagraph><?php echo $hero1['players_description']?></p>

                <div class="wrapplayer clearfix"><a class="prv prev-player"></a> <a class="nxt next-player"></a>
                    <ul class="slideHeroes clearfix">
                    <?php
               $hero = mysqli_query($con,"SELECT * FROM players_gallery");
               while($hero1 = mysqli_fetch_array($hero)){


               ?>

                        <li>
                            <div class=playerFig>
                                <div class=playerpic>
                                    <div  class=bgimg> <img src="<?php echo $hero1['players_image']?>" alt=""></div>
                                </div>
                                <ul class="playerDetails clearfix">
                                    <li><span><?php echo $hero1['players_name']?></span> <span><img src=images/icons/tShirt.png
                                                                              alt=image></span></li>
                                    <li class=playinfodetails>age <?php echo $hero1['players_age']?> (born <?php echo $hero1['players_date']?>)</li>
                                    <li class=playerInfo><span><?php echo $hero1['players_role']?></span> <span><i
                                            class="fa fa-heart"></i><?php echo $hero1['players_like']?></span></li>
                                </ul>
                            </div>
                        </li>
                        <?php
               }
               ?>





                        
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="product bg-white">
        <div class=container>
            <div id="pro" class=row><h2 class=heading>TOP PRODUCTS & <span>merchandise</span></h2>
<br>
<br>
<br>
       
                <ul class="product_details my-2">
                <?php
               $pro = mysqli_query($con,"SELECT * FROM products");
               while($pro1 = mysqli_fetch_array($pro)){
               ?>
                    <li><a href="shop.php">
                        <div>
                            <div class=product-img
                                 style=" center no-repeat"><img src="<?php echo $pro1['products_image1']?>" alt=""></div>
                        </div>
                        <ul class="oswald16 product_info">
                            <li class=detailsContainer><span> <?php echo $pro1['products_name']?></span> <span><i
                                    class="fa fa-user"></i></span></li>
                            <li class=cartContainer><span>Add to cart</span> <span><i
                                    class="fa fa-shopping-cart"></i></span> <span class=price>$<?php echo $pro1['products_price']?></span></li>
                     
                        </ul>
                    </a>
                
                
                </li>

                <?php
               }
               ?>
                  
                <div class=center><a href="shop.php" class="btn btn-red">view more</a></div>
            </div>
        </div>
    </section>  

<?php
require('index_footer.php');
?>
