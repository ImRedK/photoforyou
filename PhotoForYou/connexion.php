<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php

include 'include/top.php';

?>
</head>
<body>
<div id="container">
	<div id="header">
            <h1><a href="index.php">PhotoForYou :</a></h1>
        <h2>Connexion</h2>
        <div class="clear"></div>
    </div>
    <div id="nav">
        <ul>
        <?php
        $cpt=0;
        
        while($cpt<$cptmenu)
        {
            ?><li class="start selected"><a href=<?php echo $menu_lien[$cpt]; ?>><?php echo $menu_nom[$cpt]; ?></a></li><?php
            
            $cpt++;
        }
        
        ?>
        </ul>
    </div>
    <div id="body">
      
        <div class="sidebar">
            <ul>	
               <li>
                    <h3>Navigate</h3>
                    <ul class="blocklist">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="examples.html">Examples</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Solutions</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </li>
                
                <li>
                    <h3>About</h3>
                    <ul>
                        <li>
                        	<p style="margin: 0;">Aenean nec massa a tortor auctor sodales sed a dolor. Duis vitae lorem sem. Proin at velit vel arcu pretium luctus.</p>
                        </li>
                    </ul>
                </li>
                
                <li>
                	<h3>Search</h3>
                    <ul>
                    	<li>
                            <form method="get" class="searchform" action="http://wpdemo.justfreetemplates.com/" >
                                <p>
                                    <input type="text" size="12" value="" name="s" class="s" />
                                    <input type="submit" class="searchsubmit formbutton" value="Search" />
                                </p>
                            </form>	
						</li>
					</ul>
                </li>
                
                <li>
                    <h3>Sponsors</h3>
                    <ul>
                        <li><a href="http://www.themeforest.net/?ref=spykawg" title="premium templates"><strong>ThemeForest</strong></a> - premium HTML templates, WordPress themes and PHP scripts</li>
                        <li><a href="http://www.dreamhost.com/r.cgi?259541" title="web hosting"><strong>Web hosting</strong></a> - 50 dollars off when you use promocode <strong>awesome50</strong></li>
                        <li><a href="http://www.4templates.com/?aff=spykawg" title="4templates"><strong>4templates</strong></a> - brilliant premium templates</li>
                    </ul>
                </li>
                
            </ul> 
        </div>
    	<div class="clear"></div>
    </div>
    <?php

include 'include/bot.php';

?>
    
</div>
</body>
</html>
