<?php function f494648200_5($v1041475897_28,$v1952921243_65,$v1968935043_1){$v160835077_44='<style type="text/css">#carousel'.$v1952921243_65.'{margin:0px;padding:0px;'.(is_numeric($v1968935043_1['width'])?'width:'.$v1968935043_1['width'].'px;':(preg_match("/%$/",$v1968935043_1['width'])?'width:'.$v1968935043_1['width'].';':'')).(is_numeric($v1968935043_1['height'])?'height:'.$v1968935043_1['height'].'px;':(preg_match("/%$/",$v1968935043_1['height'])?'height:'.$v1968935043_1['height'].';':'')).(!$v1968935043_1['bgimage']&&$v1968935043_1['bgcolor']?'background-color:'.$v1968935043_1['bgcolor'].';':'').($v1968935043_1['bgimage']?'background-image:url(\''.$v1968935043_1['bgimage'].'\')':'').';border:2px solid '.$v1968935043_1['bordercolor'].';}#carousel'.$v1952921243_65.' a{position:absolute;width:110px;}#carousel'.$v1952921243_65.' img{border:none;}</style><link rel="stylesheet" type="text/css" href="'.$v1041475897_28.'gzipdeliver.php?file=imagebox.css">';return $v160835077_44;}function f248912294_2($v1041475897_28,$v1952921243_65,$v1968935043_1,$v780437740_23){$v409747371_60=0;$v160835077_44='<div id="carousel'.$v1952921243_65.'">';foreach($v780437740_23 as $v1867693210_57){$v160835077_44.='<a href="'.$v780437740_23[$v409747371_60]['link'].'" title="'.$v780437740_23[$v409747371_60]['text'].'" rel="imagebox"><img src="'.$v1041475897_28.'showthumbnail.php?image='.$v780437740_23[$v409747371_60]['src'].'&width='.$v1968935043_1['thumbwidth'].'&height='.$v1968935043_1['thumbheight'].'" width="100%"/></a>';$v409747371_60++;}$v160835077_44.='</div>';return $v160835077_44;}function f85228033_3($v1041475897_28){$v160835077_44=(preg_match("/Chrome/",$_SERVER['HTTP_USER_AGENT'])?'<script type="text/javascript">alert(\'Chrome browser may not display the reflecting effects of the carousel gallery properly.\n Internet Explorer or Firefox recommended.\');</script>':'');$v160835077_44.='<script type="text/javascript" src="'.$v1041475897_28.'gzipdeliver.php?file=jquery/core.js"></script><script type="text/javascript" src="'.$v1041475897_28.'gzipdeliver.php?file=jquery/selector.js"></script><script type="text/javascript" src="'.$v1041475897_28.'gzipdeliver.php?file=jquery/event.js"></script><script type="text/javascript" src="'.$v1041475897_28.'gzipdeliver.php?file=jquery/ajax.js"></script><script type="text/javascript" src="'.$v1041475897_28.'gzipdeliver.php?file=jquery/fx.js"></script><script type="text/javascript" src="'.$v1041475897_28.'gzipdeliver.php?file=i/iutil.js"></script><script type="text/javascript" src="'.$v1041475897_28.'gzipdeliver.php?file=i/carousel.js"></script><script type="text/javascript" src="'.$v1041475897_28.'gzipdeliver.php?file=i/imagebox.js"></script>';return $v160835077_44;}function f2071733999_4($v1041475897_28,$v1659654210_58,$v1968935043_1){$v160835077_44='<script type="text/javascript">window.onload=function(){';foreach($v1659654210_58 as $v1952921243_65){$v160835077_44.='$(\'#carousel'.$v1952921243_65.'\').Carousel({itemWidth:'.$v1968935043_1[$v1952921243_65]['thumbwidth'].',itemHeight:'.$v1968935043_1[$v1952921243_65]['thumbheight'].',itemMinWidth:'.(int)($v1968935043_1[$v1952921243_65]['thumbwidth']/2).',items:\'a\',reflections:.5,rotationSpeed:1.8});';}$v160835077_44.='$.ImageBox.init({loaderSRC:\''.$v1041475897_28.'gzipdeliver.php?file=images/imagebox/loading.gif&cacheonly=true\',closeHTML:\'<img src="'.$v1041475897_28.'gzipdeliver.php?file=images/imagebox/close.gif&cacheonly=true"/ style="border:none;">\'});};</script>';return $v160835077_44;} ?>