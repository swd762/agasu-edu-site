$(document).ready(function () {
	var htmlTemp = '';
	/*****sidebar start*****/
	$('.sidebar').customScroll({
		prefix: 'custom-scroll_',

		/* vertical */
		barMinHeight: 10,
		offsetTop: -280,
		offsetBottom: -280,
		/* will be added to offsetBottom in case of horizontal scroll */
		trackWidth: 10,

		/* horizontal */
		barMinWidth: 10,
		offsetLeft: 0,
		offsetRight: 0,
		/* will be added to offsetRight in case of vertical scroll */
		trackHeight: 10,

		/* each bar will have custom-scroll_bar-x or y class */
		barHtml: '<div />',

		/* both vertical or horizontal bar can be disabled */
		vertical: true,
		horizontal: false
	});
	/****videogallery start******/
	$('.video-container').customScroll({
		prefix: 'custom-scroll_',

		/* vertical */
		barMinHeight: 10,
		offsetTop: -280,
		offsetBottom: -280,
		/* will be added to offsetBottom in case of horizontal scroll */
		trackWidth: 10,

		/* horizontal */
		barMinWidth: 10,
		offsetLeft: 0,
		offsetRight: 0,
		/* will be added to offsetRight in case of vertical scroll */
		trackHeight: 10,

		/* each bar will have custom-scroll_bar-x or y class */
		barHtml: '<div />',

		/* both vertical or horizontal bar can be disabled */
		vertical: true,
		horizontal: true
	});
	$(document).click(function (e) {
		//if user click anywhere - check - got it to the gallery. If yes - do nothing...
		if ($(e.target).closest('.video-container').length) {

		}
		//...if No - ...
		else {
			//...check - got it to the gallery button. If Yes - next step...
			if ($(e.target).hasClass('video')) {
				// check and once load video from youtube
				if ($('.vc-wrapper').hasClass('loaded')) {

				}
				else if ($('.vc-wrapper').hasClass('loading')) {

				}
				else {
					$('.vc-wrapper').addClass('loading');
					$('.video-container').css({ 'max-height': '150px' });
					var serach = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId=PLqMqmny-BPjxegcUXxrzuB24phK40rI8N&key=AIzaSyAcL_5iYbktBbZswz5xu5WNGyefv2tpQNI&maxResults=25';
					$.getJSON(serach, function (data) {
						$.each(data.items, function (i, item) {
							htmlTemp = '<div class="video-item"><a target="_blank" href="https://www.youtube.com/watch?v=' + item.snippet.resourceId.videoId + '" class="video-link" title="' + item.snippet.title + '">';
							htmlTemp += '<img src="' + (typeof item.snippet.thumbnails.medium != 'undefined' ? item.snippet.thumbnails.medium.url : '') + '" alt="' + item.snippet.title + '"/><span class="video-title">' + item.snippet.title + '</span></a></div>';

							$('.video-container .custom-scroll_inner').append(htmlTemp);
						})
						setTimeout(function () {
							$('.vc-wrapper').removeClass('loading');
							$('.video-container').width(setWidth($('.video-container'), $('.video-item'))).css({ 'height': 'auto', 'max-height': '100vh' });
							setTimeout(function () { $('.vc-wrapper').addClass('loaded'); }, 600);
						}, 1000);
					});
				}
				//check and add or remove class
				if ($('.vc-wrapper').hasClass('active'))
					$('.vc-wrapper').removeClass('active');
				else
					$('.vc-wrapper').addClass('active');
			}
			//...if No - remove class
			else {
				$('.vc-wrapper').removeClass('active');
			}
		}
	});
	function setWidth(block, item) {
		var temp = block.find('.custom-scroll_inner').css('padding-left');
		var block_padding_left = temp.substr(0, temp.length - 2);
		var block_padding_right = '';
		var item_margin_right = '';
		var itemWidth = item.width();
		var blockWidth = '';
		var content_padding_left = '';
		var factor = '';
		var finalWidth = '';

		temp = block.find('.custom-scroll_inner').css('padding-right');
		block_padding_right = temp.substr(0, temp.length - 2);

		temp = block.find('.video-item').css('margin-right');
		item_margin_right = temp.substr(0, temp.length - 2);

		// console.log('block padding-left: ' + block_padding_left);
		// console.log('item width: ' + itemWidth);
		// console.log('block padding-right: ' + block_padding_right);
		// console.log('item_margin_right: ' + item_margin_right);

		temp = $('.content').css('padding-left');
		content_padding_left = temp.substr(0, temp.length - 2);

		// console.log('content padding left: ' + content_padding_left);
		// console.log('content width: ' + $('.content').width());
		blockWidth = $('.content').width() - 60;

		// console.log(blockWidth - Number(block_padding_left) - Number(block_padding_right));
		// console.log(itemWidth + Number(item_margin_right));

		factor = (blockWidth - Number(block_padding_left) - Number(block_padding_right)) / (itemWidth + Number(item_margin_right));

		// console.log('factor_b: ' + factor);

		factor = Math.floor(factor);

		// console.log('factor: ' + factor);

		finalWidth = factor * (itemWidth + Number(item_margin_right));

		return finalWidth + Number(block_padding_left) + Number(block_padding_right);
	}
	/****videogallery end*****/

	/****sidebar-menu start*****/
	$('a.second-menu-item').click(function (e) {
		var index = $('a.second-menu-item').index(this);
		$(this).next('div.description').toggleClass('active');

		e.preventDefault();
	});
	/****sidebar-menu end******/
})