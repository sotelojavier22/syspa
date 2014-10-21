
<!DOCTYPE html>
<html>
<head>
    <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
    <?php echo $this->Html->charset(); ?>
    <title>
       
        <?php echo $title_for_layout; ?>
    </title>
    <?php
        echo $this->Html->meta('icon');
        echo $this->Html->css(array('reset','style','redmond/jquery-ui-1.9.2.custom'));
        echo $this->Html->script(array('jquery-1.8.3','jquery-ui-1.9.2.custom.min','http://code.jquery.com/ui/1.9.0/jquery-ui.js'));
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');

    ?>
    <script>
        $(function() {
        $( "#datepicker" ).datepicker();
        });
  </script>
  
</head>
<body>  
    <div id="wrapper">
    <div id="header">
    <table >
        <tr cellspacing="2" >
            <td >
                <div id="logo">
                     <h1>Syspa</h1>          
                </div>
            </td>
            <td >
                <div id="menu">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><?php echo $this->Html->link('Empresas',
                                    array('controller'=>'empresas','action'=>'index'))?>
                         </li>
                        <li><a href="#">Convenios</a>
							<ul>
								<li><a href="#">Convenios Marcos</a></li>
								<li><?php echo $this->Html->link('Convenios Particulares',
                                    array('controller'=>'Conveniosparticulares','action'=>'index'))?>
								</li>
							</ul> 
						</li>
							
                        <li><a href="#">Pasantes</a></li>
                        <li><a href="#">Informes</a></li>
                    </ul>
                </div> 
            </td>
        </tr>
    </table>
        
         
    </div>
    <!-- end #header -->
   
    <div id="page">
        <div id="page-bgtop">
            <div id="page-bgbtm">     
                <div >
               
                    <?php echo $this->Session->flash(); ?>
                    <?php echo $this->fetch('content'); ?> 
                            
                </div>
            </div>
        </div>
    </div>


    <div id="footer" >
        <p>Copyright 2014 Grupo-PHP</p>
    </div>

    
    
</body>
</html>
