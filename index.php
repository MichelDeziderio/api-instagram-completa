<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">


<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" /> 

<style>

    .slick-list.draggable {
        width: 600px;
    }

    .slick-slide{
        width:600px;
    }

    @media (min-width: 991px) {
        .dg-custom-p {
            margin-top: 60px;
        }
    }

    .dg-get-instagram .edgtf-grid-col-4 {
    height: 413px !important;
    margin-bottom: 20px;
    }
    .dg-get-instagram .edgtf-grid-col-4 a {
    position: relative;
    min-height: 413px !important;
    display: block;
    background-size: cover !important;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    }
    .dg-get-instagram .edgtf-grid-col-4 a:after {
    content: "";
    background-color: rgba(0, 0, 0, 0);
    width: 100%;
    height: 100%;
    left: 0px;
    top: 0px;
    position: absolute;
    transition: ease-in-out 300ms;
    -webkit-transition: ease-in-out 300ms;
    }
    .dg-get-instagram .edgtf-grid-col-4 a .dg-heart {
    margin: 0 10px;
    color: transparent;
    font-weight: 700;
    transition: ease-in-out 300ms;
    -webkit-transition: ease-in-out 300ms;
    font-size: 16px;
    }
    .dg-get-instagram .edgtf-grid-col-4 a .dg-comments {
    margin: 0 10px;
    color: transparent;
    font-weight: 700;
    transition: ease-in-out 300ms;
    -webkit-transition: ease-in-out 300ms;
    font-size: 16px;
    }
    .dg-get-instagram .edgtf-grid-col-4 a:hover:after {
    content: "";
    background-color: rgba(0, 0, 0, 0.4);
    width: 100%;
    height: 100%;
    left: 0px;
    top: 0px;
    position: absolute;
    transition: ease-in-out 300ms;
    -webkit-transition: ease-in-out 300ms;
    }
    .dg-get-instagram .edgtf-grid-col-4 a:hover .dg-heart, .dg-get-instagram .edgtf-grid-col-4 a:hover .dg-comments {
    margin: 0 10px;
    z-index: 5;
    color: #fff;
    }

    .fancybox-slide {
    z-index: 99994 !important;
    }

    .dg-modal-instagram {
    position: relative;
    max-width: 1000px !important;
    padding: 0px !important;
    overflow: hidden !important;
    cursor: text !important;
    }
    .dg-modal-instagram .dg-box-img {
    padding: 0px !important;
    text-align: center;
    }
    .dg-modal-instagram .dg-box-img figure {
    margin: 0px !important;
    }
    @media (max-width: 768px) {
    .dg-modal-instagram .dg-box-img {
        height: auto;
        line-height: initial;
    }
    }
    .dg-modal-instagram .dg-box-img img {
    width: 100%;
    margin-bottom: -10px;
    }
    .dg-modal-instagram .dg-box-content {
    padding: 50px 20px !important;
    min-height: auto%;
    /* max-height: 464px; */
    /* overflow-y: scroll; */
    }
    .dg-modal-instagram .dg-box-content::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    background-color: #F5F5F5;
    }
    .dg-modal-instagram .dg-box-content::-webkit-scrollbar {
    width: 6px;
    height: 150px;
    background-color: #F5F5F5;
    }
    .dg-modal-instagram .dg-box-content::-webkit-scrollbar-thumb {
    background-color: #03a9f4;
    border: 0px solid #03a9f4;
    }
    .dg-modal-instagram .dg-box-content .dg-text {
    line-height: 1.6;
    font-size: 14px;
    }
    .dg-modal-instagram .dg-box-content .dg-link-insta {
    text-align: center;
    display: block;
    margin: 30px auto;
    }
    .dg-modal-instagram .dg-box-content .dg-bottom {
    font-size: 15px;
    }
    .dg-modal-instagram .dg-box-content .dg-comments-count {
    float: left;
    width: 50px;
    z-index: 3;
    }
    .dg-modal-instagram .dg-box-content .dg-comments-count a {
    text-decoration: none;
    transition: ease-in-out 300ms;
    -webkit-transition: ease-in-out 300ms;
    }
    .dg-modal-instagram .dg-box-content .dg-comments-count a:hover .fa-comment-o:before {
    content: "";
    color: #224096;
    }
    .dg-modal-instagram .dg-box-content .dg-comments-count a:hover .fa-heart-o:before {
    content: "";
    color: #ec0902;
    }
    .dg-modal-instagram .dg-box-content .dg-post-link {
    float: right;
    position: relative;
    text-align: center;
    width: 50%;
    }

    .fancybox-caption .fancybox-caption__body {
    background-color: rgba(0, 0, 0, 0.8);
    padding: 20px;
    max-width: 600px;
    position: absolute;
    margin-left: auto;
    margin-right: auto;
    left: 0;
    right: 0;
    color: #fff;
    bottom: 75px;
    position: absolute;
    }
</style>


<?php
    $access_token="SEU TOKEN";    
    $photo_count=9;
    $json_link="https://api.instagram.com/v1/users/self/media/recent/?"; 
    $json_link.="access_token={$access_token}&count={$photo_count}"; $json = file_get_contents($json_link); $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
?>
<div class="dg-get-instagram edgtf-container-inner clearfix container">
  <div class="edgtf-grid-row row">

      <?php
        error_reporting(0);
          foreach ($obj['data'] as $post) {
              
              // Get Texts posts
              $pic_text=$post['caption']['text'];
              
              // Get links posts
              $pic_link=$post['link'];

              // Get likes posts
              $pic_like_count=$post['likes']['count'];

              // Get comments posts
              $pic_comment=$post['comments']['count'];

              // Get images posts
              $pic_src=str_replace("http://", "https://", $post['images']['standard_resolution']['url']);

              $vid_src=str_replace("http://", "https://", $post['videos']['low_resolution']['url']);
              
              $carousel_src=$post['carousel_media'];

              $type=$post['type'];

              $full_name=$post['caption']['from']['full_name'];            

              $location_lat=$post['location']['latitude'];
              $location_lon=$post['location']['longitude'];
              $location_nome=$post['location']['name'];

              // Get date posts
              $pic_created_time=date("F j, Y", $post['caption']['created_time']);
              $pic_created_time=date("F j, Y", strtotime($pic_created_time . " +1 days"));
              
                  // Explode images for create modals and hashtags to titles posts
                  $imagem="{$pic_link}";
                  $array=explode("/",$imagem);
                  $quebra="$array[4]";
                  $arrayb=explode("-",$quebra);
                  $titulo="{$pic_text}";
                  $arrayc=explode("#",$titulo);
      ?>

          <div class="edgtf-grid-col-4 col-md-4">
              <a data-fancybox="preview" href="javascript:void(0)" data-src="#selectableModal<?php echo $array[4]; ?>" class="dg-bg-link" style="background:url(<?php echo $pic_src ;?>) center no-repeat;">
                  <div class="dg-heart"><i class="dg-icon fa fa-heart-o" aria-hidden="true"></i> <?php echo $pic_like_count; ?></div>
                  <div class="dg-comments"><i class="dg-icon fa fa-comment-o" aria-hidden="true"></i> <?php echo $pic_comment; ?></div>                                  
              </a>
          </div>


          <div class="dg-modal-instagram" id="selectableModal<?php echo $array[4]; ?>"  style="display:none;">
              
              <div class="edgtf-grid-col-7 dg-box-img">
                                    
                  <?php 

                      if($type == 'image'){
                
                          echo '<figure><img src="'.$pic_src.'" alt="'.$pic_text.'"></figure>';
                      
                      }elseif($type == 'video'){
                          
                          echo'<video controls id="svideo">
                              <source src="'.$vid_src.'" type="video/mp4">
                              <source src="movie.ogg" type="video/ogg">
                              Your browser does not support the video tag.
                          </video>';

                      }elseif($type == 'carousel'){


                        echo '<div class="single-item">';

                            foreach($carousel_src as $post_carousel){
                                
                                $get_carousel_image=str_replace("http://", "https://", $post_carousel['images']['standard_resolution']['url']);

                                $get_carousel_video=str_replace("http://", "https://", $post_carousel['videos']['low_resolution']['url']);
            
                                $get_crl_type = $post_carousel['type'];

                                if($get_crl_type =='image'){

                                    echo '<img src="'.$get_carousel_image.'" alt="'.$pic_text.'">';

                                }elseif($get_crl_type =='video'){

                                    echo'<video controls id="svideo">
                                        <source src="'.$get_carousel_video.'" type="video/mp4">
                                        <source src="movie.ogg" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>';

                                }                                                                
                            
                            }

                        echo '</div>';
                        
                      }
                  ?>
              </div>

              <div class="edgtf-grid-col-5 dg-box-content">
                  
                  <div class="dg-box-inner">
                      <div class="dg-text">
                          <?php echo $arrayc[0]; ?> 									
                      </div>

                      <div class="dg-link-insta">
                        <?php echo $location_nome; ?>
                      </div>

                      <div class="dg-bottom">
                          <div class="dg-comments-count">
                              <a href="<?php echo $pic_link; ?>" target="_blank"><i class="dg-icon fa fa-heart-o" aria-hidden="true"></i> <?php echo $pic_like_count; ?></a>
                          </div>
                          <div class="dg-comments-count">
                              <a href="<?php echo $pic_link; ?>" target="_blank"><i class="dg-icon fa fa-comment-o" aria-hidden="true"></i> <?php echo $pic_comment; ?></a>
                                
                              
                          </div>	
                          <div class="dg-post-link">
                              <a href="<?php echo $pic_link; ?>" target="_blank">Ver no Instagram</a>
                          </div>									
                      </div>
                  </div>
                  
              </div>
          </div>		
      <?php }?>
  </div>
</div>

<script>
    $('.single-item').slick({
        dots: true
    });

    $('[data-fancybox="preview"]').fancybox({
        video : {
            autoplay : 0,
            autoStart: false            
        }
    })
</script>
