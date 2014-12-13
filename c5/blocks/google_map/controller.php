<?php 
	defined('C5_EXECUTE') or die("Access Denied.");
	class GoogleMapBlockController extends Concrete5_Controller_Block_GoogleMap {
		
		public function on_page_view() {
			$html = Loader::helper('html');
			$c = Page::getCurrentPage();
			if (!$c->isEditMode()) {
				$this->addFooterItem('<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>');
				$this->addFooterItem('<script type="text/javascript"> 
				function googleMapInit' . $this->bID . '() { 
				   try{
					  var latlng = new google.maps.LatLng(' . $this->latitude . ', ' . $this->longitude . ');
					   var mapOptions = {
						 zoom: ' . $this->zoom . ',
						 center: latlng,
						 mapTypeId: google.maps.MapTypeId.ROADMAP,
						 streetViewControl: false,
						 mapTypeControl: false,
						 scrollwheel: false
					  };
					   var map = new google.maps.Map(document.getElementById(\'googleMapCanvas' . $this->bID . '\'), mapOptions);
					   var marker = new google.maps.Marker({
						   position: latlng, 
						   map: map
					   });
				   }catch(e){
				   $("#googleMapCanvas'. $this->bID .'").replaceWith("<p>Unable to display map: "+e.message+"</p>")}
				}
				$(function() {
					var t;
					var startWhenVisible = function (){
						if ($("#googleMapCanvas'. $this->bID .'").is(":visible")){
							window.clearInterval(t);
							googleMapInit' . $this->bID . '();
							return true;
						} 
						return false;
					};
					if (!startWhenVisible()){
						t = window.setInterval(function(){startWhenVisible();},100);      
					}
				});            
				</script>');				
			}
		}
		
	}