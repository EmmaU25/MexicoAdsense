<?php
/**
Plugin Name: Mexico Adbsense
Plugin URI: www.MexicoDestinos.com
Description: Esto no es solo un plugin, simboliza la oportunidad de encontrar tu destino ideal para viajar. Emmanuel 2017.
Version: 1.0.0
Author: Ernesto Emmanuel Yah Lopez
Author URI: www.facebook.com/EmmaU25
License: GPL2
*/

//Agregar JS del widget
add_action('wp_head', 'widgetJs');
function widgetJs() {
    ?>
        <script src="https://www.mexicodestinos.com/blog/widget_md/widgetAdbsense.js?var=2"></script>
    <?php
}


//Crear widget 
function crearAdsense(){    
    class mpw_widget extends WP_Widget {
 
    function mpw_widget(){
        $widget_ops = array('classname' => 'mpw_widget', 'description' => "El widget ideal para encontrar tu destino al viajar" );
        $this->WP_Widget('mpw_widget', "México destinos adbsense", $widget_ops);
    }
 
    function widget($args,$instance){
        echo $before_widget;    
        ?>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:300px">
            <div class="carousel-inner" id="Contenedor">

            </div>
          <a href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <?php
        echo $after_widget;
    }
 
    function update($new_instance, $old_instance){
        // Función de guardado de opciones   
    }
 
    function form($instance){
        // Formulario de opciones del Widget, que aparece cuando añadimos el Widget a una Sidebar
    }    
} 
    register_widget('mpw_widget');
}
add_action('widgets_init','crearAdsense');

?>