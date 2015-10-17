/*
jQuery 滚动插件
*/
(function($) {
$.fn.scrolll = function(options) {
	options = options || {};
  	this.css('overflow', 'hidden');
  	var scrolll = (function(self) {
    	return function() {
      		if (self.data('scroll_stop')) {
        		return;
      		}
	  		if(options.fxx==1){
		  		var li = self.find('li:first');
		  		var t = parseInt(li.css('marginLeft')) || 0;
		  		li.animate({'marginLeft': (t - li.outerWidth()) + 'px'}, options.speed || 'slow', function() {
					self.append(li);
					li.css('marginLeft', t + 'px');
		  		});
	  		}else{
		  		var li = self.find('li:first');
		  		var t = parseInt(li.css('marginTop')) || 0;
		  		li.animate({'marginTop': (t - li.outerHeight()) + 'px'}, options.speed || 'slow', function() {
					self.append(li);
					li.css('marginTop', t + 'px');
		  		});
	  		}
    	};
  	})(this);
  	setInterval(scrolll, options.delay || 3000);
  	this.hover(function() {
    	$(this).data('scroll_stop', true);
  	}, function() {
    	$(this).removeData('scroll_stop');
  	});
};
})(jQuery);