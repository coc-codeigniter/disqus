# disqus
disqus for codeigniter 

[![Codacy Badge](https://www.codacy.com/project/badge/9dc273e4a21d46e7a2895561da6cb994)](https://www.codacy.com/app/contato_2/disqus)

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
  
