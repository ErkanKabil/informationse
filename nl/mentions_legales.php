<?php
    require_once 'inc/master_top.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?=$lang['page_title']?></title>
        <meta name="keywords" content="<?=$lang['page_keywords']?>">
        <meta name="description" content="<?=$lang['page_description']?>">
        <link href="assets/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="assets/styles_v2.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <?php require_once 'inc/google_head.php'; ?> 
    </head>
    <body>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        <script>
            $(window).scroll(function() {
                if ($(window).scrollTop() > 100) {
                    $('.a-btn-call').show();
                    $('.frise').show();
                }
                else {
                    $('.a-btn-call').hide();
                    $('.frise').hide();
                }
            });
        </script>

        <section class="s-header">
            <div class="container">
                <a href="#" class="frise">
	                <i class="fas fa-phone-volume"></i><?=$lang['text_1']?>
                </a>
                 <a href="tel:<?=$lang['phone_number_1']?><?=$lang['phone_number_2']?>" class="frise hidden-xs"> 
                    <i class="fas fa-phone-volume"></i>
                     <?=$lang['text_1']?> <?=$lang['phone_number']?> 
                </a>
                <div class="row">
                    <div class="col-md-6 col-sm-8 col-md-offset-6 col-sm-offset-4">
                        <p class="sur-logo"><i class="fas fa-phone-volume"></i>
                             <?=$lang['text_1']?> 
                        </p>
                         <h1><a href="tel:<?=$lang['phone_number_1']?><?=$lang['phone_number_2']?>" class="a-logo hidden-xs"> 
                             <?=$lang['phone_number_1']?> <span><?=$lang['phone_number_2']?></span> 
                        </a></h1>
                        <a href="tel:<?=$lang['phone_number']?>" class="btn-appeler-mobile hidden-sm hidden-md hidden-lg"><i class="fas fa-phone-volume"></i><?=$lang['phone_number_1']?> <span><?=$lang['phone_number_2']?></a>
                        <p class="disclaimer-header" style="background-color: rgba(0, 0, 0, 0.7); margin: 2rem 0;">
                            <?=$lang['price']?> <?=$lang['per_min']?>  
                        </p>
                        <p class="slog-header">
                            <strong>
                                 <?=$lang['banner_text_1']?> 
                            </strong>
                        </p>

                        <p class="disclaimer-header" style="color: #000222">
                             <?=$lang['banner_text_2']?> 
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="box-home-1">
                            <div class="icon"><i class="far fa-thumbs-up"></i></div>
                            <div class="box-txt">
                                <h3>
                                     <?=$lang['box_1_title']?> 
                                </h3>
                                <p>
                                     <?=$lang['box_1_text']?> 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-home-1">
                            <div class="icon"><i class="far fa-clock"></i></div>
                            <div class="box-txt">
                                <h3>
                                     <?=$lang['box_2_title']?> 
                                </h3>
                                <p>
                                     <?=$lang['box_2_text']?> 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-home-1">
                            <div class="icon"><i class="fas fa-star"></i></div>
                            <div class="box-txt">
                                <h3>
                                     <?=$lang['box_3_title']?> 
                                </h3>
                                <p>
                                     <?=$lang['box_3_text']?> 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p class="disclaimer-2">
                             <strong><?=$lang['text_after_box']?> </strong>
                        </p>
                    </div>
                </div>

                <?php require_once __DIR__ . '/legales/'.$lang_file.'.php'; ?>
                

            </div> 
        </section> 

        <?php require_once 'inc/footer.php'; ?> 

        <a href="tel:<?=$lang['phone_number']?>" class="a-btn-call">
            <span class="accroche"><?=$lang['text_1']?></span>
            <span class="num">
            <span class="icon"><i class="fas fa-phone-volume"></i></span>
            <?=$lang['phone_number_1']?> <span><?=$lang['phone_number_2']?>
            </span>
        </a>

        <?php require_once 'inc/google_body.php'; ?> 
    </body>
</html>
