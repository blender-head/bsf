(function ($) {

  $(document)
    .ready(function () {
	
	// -------------------------------------------------------------------------------------------------------
    // First Word
    // -------------------------------------------------------------------------------------------------------
	
	
	$('.sidebarnav h3').each(function() {
                if ($(this).contents().first().is('a')) {
                    $(this).contents().first().css('color', '#000');
                } else {
                    var node = $(this).contents().filter(function() {
                        return this.nodeType == 3;
                    }).first();
                    var text = node.text();
                    var first = text.slice(0, text.indexOf(" "));
                    node[0].nodeValue = text.slice(first.length);
                    node.before('<span style="font-weight: 300;">' + first + '</span>');
                }
    });

	$('.title-page h1')
      .each(function () {
      var h = $(this)
        .html();
      var index = h.indexOf(' ');
      if (index == -1) {
        index = h.length;
      }
      $(this)
        .html('<span style="color:#fff; font-weight:300;">' + h.substring(0, index) + '</span>' + h.substring(index, h.length));
    });
	
	
	
    $('.title-home h3')
      .each(function () {
      var h = $(this)
        .html();
      var index = h.indexOf(' ');
      if (index == -1) {
        index = h.length;
      }
      $(this)
        .html('<span style="color:#fff; font-weight:300;">' + h.substring(0, index) + '</span>' + h.substring(index, h.length));
    });
	
		 $('.title-head h1')
      .each(function () {
      var h = $(this)
        .html();
      var index = h.indexOf(' ');
      if (index == -1) {
        index = h.length;
      }
      $(this)
        .html('<span style="color:#fff; font-weight:300;">' + h.substring(0, index) + '</span>' + h.substring(index, h.length));
    });
	

	
	});

})(window.jQuery);