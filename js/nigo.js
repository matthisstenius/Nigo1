var NIGO = NIGO || {};

NIGO.elements = {
	portfolioItemLinks: '.portfolio-item-link',
	overlay: '.overlay'
};

NIGO.init = function() {
	var portfolioItemLinks = $(NIGO.elements.portfolioItemLinks);
	NIGO.showPortfolioContent(portfolioItemLinks);
};

NIGO.showPortfolioContent = function(portfolioItems) {
	for (var i = 0; i < portfolioItems.length; i++) {
		(function(i) {
			$(portfolioItems[i]).on('click', function(e) {
				e.preventDefault();
				var currentItem = $('.item-' + i);

				$(currentItem).removeClass('hidden');
				$(currentItem).css('left', (window.innerWidth / 2) - ($(currentItem).width() / 2 ));
				$(NIGO.elements.overlay).removeClass('hidden').css('height', $(document).height() + 'px');

				$('.overlay').on('click', function() {
					NIGO.hidePortfolioContent('.item-' + i);
				});
			});
		})(i);	
	}


};

NIGO.hidePortfolioContent = function(portfolioItem) {
	$(portfolioItem).addClass('hidden');
	$(NIGO.elements.overlay).addClass('hidden');
};

NIGO.init();