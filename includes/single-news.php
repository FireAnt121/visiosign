<?php 

    get_header();

    if(have_posts()):
        while(have_posts()):the_post();
            //the content here
            ?>
            <div class="position-relative fr-pages">
                <?php
                    $id = get_the_ID();
                    $length = esc_html(get_post_meta($id, "fire_adder_counter".$id,true));
                    if($length != null):
                        for($i = 0; $i < $length ;$i++):
                            $type= get_post_meta($id,'meta-fire-'.$id.$i,true); 
							$order = get_post_meta($id,'meta-fire-order'.$id.$i,true);
                            $arr = ['i'=>$i, 'type' => $type, 'order' => $order ];
                            set_query_var( 'mystery', $arr );
                            switch($type):
                                case 'hip':
                                    get_template_part('includes/section','hip');
                                    break;
                                case 'ctaB':
                                    get_template_part('includes/section','ctaB');
                                     break;
                                case 'features':
                                    get_template_part('includes/section','features'); 
                                    break;
                                case 'carousel':
                                    get_template_part('includes/section','carousel'); 
                                    break;
                                case 'umbrella':
                                    get_template_part('includes/section','umbrella'); 
                                    break;
                                case 'cloud':
                                    get_template_part('includes/section','cloud'); 
                                    break;
                                case 'cta':
                                    get_template_part('includes/section','cta'); 
                                     break;
                                case 'nyhed':
                                    get_template_part('includes/section','nyhed'); 
                                    break;
                                case 'cards':
                                    get_template_part('includes/section','vision'); 
                                    break;
                                case '3cards':
                                    get_template_part('includes/section','kunde'); 
                                    break;
                                case 'reference':
                                    get_template_part('includes/section','reference'); 
                                    break;
                                case 'onlyH':
                                    get_template_part('includes/section','onlyH'); 
                                    break;
                                case 'page50':
                                    get_template_part('includes/section','page50'); 
                                    break;
                                case 'gridInfo':
                                    get_template_part('includes/section','gridInfo'); 
                                    break;
                                case 'magazine':
                                    get_template_part('includes/section','magazine'); 
                                    break;
                                case 'blogList':
                                    get_template_part('includes/section','blogList'); 
                                    break;
                                case 'sHero':
                                    get_template_part('includes/section','smallHero'); 
                                    break;
                                case 'listGrids':
                                    get_template_part('includes/section','listGrids'); 
                                    break;
                                case 'products':
                                    get_template_part('includes/section','gridInfoB'); 
                                    break;
                                case 'hero':
                                    get_template_part('includes/section','hero'); 
                                    break;
                                case 'onlyImg':
                                    get_template_part('includes/section','onlyImage'); 
                                    break;
                                case 'call':
                                    get_template_part('includes/section','call'); 
                                    break;
                                case 'split':
                                    get_template_part('includes/section','twoSecTwo'); 
                                    break;
                                case 'accord':
                                    get_template_part('includes/section','accord'); 
                                    break;
                                case 'contactForm':
                                    get_template_part('includes/section','contactForm'); 
                                    break;
                                    case 'splitRev':
                                        get_template_part('includes/section','twoSecRev'); 
                                        break;
                                        case 'tal':
                                            get_template_part('includes/section','tal'); 
                                            break;
                                            case 'globe':
                                                get_template_part('includes/section','globe'); 
                                                break;
                                                case 'circleSec':
                                                    get_template_part('includes/section','circleSec'); 
                                                    break;
                                                    case 'bigHeader':
                                                        get_template_part('includes/section','topHeader'); 
                                                        break;
                                                        case 'splitThree':
                                                            get_template_part('includes/section','backline'); 
                                                            break;
                                                            case 'magCarousel':
                                                                get_template_part('includes/section','magCar'); 
                                                                break;
                                                                case 'fiveSplit':
                                                                    get_template_part('includes/section','fem'); 
                                                                    break;
                                                                    case 'magCarouselRev':
                                                                        get_template_part('includes/section','magCarRev'); 
                                                                        break;
                                                                        case 'clicker':
                                                                            get_template_part('includes/section','clicker'); 
                                                                            break;
                                                                            case 'twoSec':
                                                                                get_template_part('includes/section','twoSec'); 
                                                                                break;
                                                                                case 'inspire':
                                                                                    get_template_part('includes/section','inspire'); 
                                                                                    break;
                                                                                    case 'infoPriser':
                                                                                        get_template_part('includes/section','infoPriser'); 
                                                                                        break;
                                default:
                                    break;
                            endswitch;
                        endfor;
                    else:
                        get_the_title();
                        echo '<br>';
                        get_the_content();
                    endif;

                ?>
            </div>
            <?php
        endwhile;
    endif;

    get_footer();

?>