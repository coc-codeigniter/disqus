# disqus
disqus for codeigniter 

###Create file in config/disqus.php and add 
     <?php 
        $config['disqus']=array('disqus_name'=>'yourname');
     ?>

###Create file in helpers/disqus_helper.php and add 
     <?php 
        use carlosocarvalho\Disqus\Disqus;
        function disqus(){
        
            if( ! is_callable('Disqus','render') ) return '';
            return Disqus::render();
        }
     ?>     
     

###Use in view 
   disqus(); 
  
