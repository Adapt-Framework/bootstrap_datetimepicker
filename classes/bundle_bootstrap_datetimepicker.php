<?php

namespace bootstrap\datetimepicker{
    
    /* Prevent Direct Access */
    defined('ADAPT_STARTED') or die;
    
    class bundle_bootstrap_datetimepicker extends \adapt\bundle{
        
        public function __construct($data){
            parent::__construct('bootstrap_datetimepicker', $data);
        }
        
        public function boot(){
            if (parent::boot()){
                $this->dom->head->add(new html_link(array('type' => 'text/css', 'rel' => 'stylesheet', 'href' => "/adapt/bootstrap_datetimepicker/bootstrap_datetimepicker-{$this->version}/static/css/bootstrap-datetimepicker.css")));
                $this->dom->head->add(new html_script(array('type' => 'text/javascript', 'src' => "/adapt/bootstrap_datetimepicker/bootstrap_datetimepicker-{$this->version}/static/js/bootstrap-datetimepicker.js")));
                return true;
            }
            
            return false;
        }
        
    }
    
    
}

?>