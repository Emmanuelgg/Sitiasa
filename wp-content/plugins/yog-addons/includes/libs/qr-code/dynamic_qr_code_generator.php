<?php
class Yog_DynamicQrCode {
    
    public function  __construct(){
        
        add_action('init',array($this,"yog_register_script"));
        add_action('add_meta_boxes',array($this,"yog_add_admin_metabox"));
        add_action('admin_enqueue_scripts',array($this,"yog_load_admin_script"));
        add_shortcode( 'yog_dqr_code', array($this,"yog_shortcode_dqr_code") );

    }
    
    public function yog_register_script(){
        wp_register_script( 'yog-dynamic-qr-code', YOG_CORE_DIR . '/assets/js/libs/qrcode.min.js', false, false, true);
    } 
    
    public function yog_add_admin_metabox(){
        
        $screens=array('product');
        foreach($screens as $screen){
            add_meta_box('cm_qrcode', __('QR code for the permalink','flipmart' ), array($this,'yog_admin_metabox_html'), $screen,'side','high');
        }
    }

    public function yog_admin_metabox_html(){
        
        $post_id = $_REQUEST['post'];
        $url=get_permalink();
        $html = '<div id="qrcode"><span><b>Shortcode:</b><br/> [yog_dqr_code post_id="'.$post_id.'"]<br /><br /></a></span></div>';
        $html .= $this->yog_get_qrcode_js($url,200,"qrcode");
        echo $html;
        
    }
    
    public function yog_load_admin_script(){
        wp_enqueue_script('yog-dynamic-qr-code');
    }
    
    public function yog_get_qrcode_js($url, $size=null, $js_id=null,$color= null,$bgcolor= null){
        if(null === $js_id){
            $js_id = "qrcode";
        }
        if(null === $size){
            $size = 100;
        }
        if(null === $color){
            $color = '#000000';
        }
        if(null === $bgcolor){
            $bgcolor = '#ffffff';
        }
        $script_format='<script type="text/javascript">
        jQuery( document ).ready(function() {
            var qrcode = new QRCode(document.getElementById("%s"), {
                width : %d,
                height : %d,
                colorDark: "%s",
                colorLight: "%s",
                correctLevel : QRCode.CorrectLevel.H
            });
            qrcode.makeCode("%s");
        });
        </script>';
        
       return sprintf($script_format,$js_id,$size,$size,$color,$bgcolor,$url);
    }
    
    public function yog_shortcode_dqr_code($atts){
        
        $args = shortcode_atts( array(
            'post_id' => '0',
            'url' => '',
            'size' =>'200',
            'color' =>'#000000',
            'bgcolor'=> '#ffffff'
        ), $atts );

        if($args['url']==''){
            
            if($args['post_id']=="0"){
                //no url or post id provided in shortcode return current page permalink
                $url= get_permalink();
                $js_id="qrcode-current";
            }else{
                $url= get_permalink($args['post_id']);
                $js_id="qrcode-".$args['post_id'];
                
            }
            
        }else{
            
            $url = $args['url'];
            $js_id="qrcode-".substr(md5($args['url']), 0, 8);
        }
        
        wp_enqueue_script('yog-dynamic-qr-code');
        
        $html = '<span id="'.$js_id.'"></span>';
        $html .= $this->yog_get_qrcode_js($url,$args['size'],$js_id,$args['color'],$args['bgcolor']);
        return $html;
    }
 }
 
 $yog_theme_options = get_option( 'flipmart' );
 if( isset($yog_theme_options['product-qr-code'] ) && !empty( $yog_theme_options['product-qr-code'] )  ){
    $yog_dynamic_qr_code = new Yog_DynamicQrCode();
 }