// Make all the columns of the same height
(function () {
    function setEqualHeight(columns) {
        var tallestcolumn = 0;

        columns.each(function () {
            let currentHeight = jQuery(this).height();
            if (currentHeight > tallestcolumn) {
                tallestcolumn = currentHeight;
            }
        });

        columns.height(tallestcolumn);
    }

    setEqualHeight(jQuery(".news-item .news-item__title"));

    setEqualHeight(jQuery(".board-article .board-article__title"));



    jQuery('input[type="tel"]').mask("+7(999) 999-99-99");
})();

/* masked input */
function insertMark(string, pos, len) {
    // hello world
    // hello <mark>wo</mark>rld
    // hello+<mark>+wo+</mark>+rld
    return string.slice(0, pos) + '<mark>' + string.slice(pos, pos + len) + '</mark>' + string.slice(pos + len);
}

/* modal region */
(function () {
    jQuery('.modal-region__btn').on('click', function () {
        jQuery('.modal-region').removeClass('active');
    });
})();


jQuery(document).ready(function(){
    jQuery("#elastic").keyup(function(){

        // Retrieve the input field text and reset the count to zero
        var filter = jQuery(this).val(), count = 0;

        // Loop through the comment list
        jQuery(".elastic .questions-item").each(function(){

            // If the list item does not contain the text phrase fade it out
            if (jQuery(this).text().search(new RegExp(filter, "i")) < 0) {
                jQuery(this).fadeOut();

                // Show the list item if the phrase matches and increase the count by 1
            } else {
                jQuery(this).show();
                count++;
            }
        });

        // Update the count
        var numberItems = count;
        jQuery("#filter-count").text("Number of Filter = "+count);
    });
	
	 jQuery('.article__item, .article__aside').theiaStickySidebar({
        // Настройки
        additionalMarginTop: 0
    });
		
});

/*StickySidebar*/
jQuery(document).ready(function() {
     jQuery('.article__item, .lwptoc_i').theiaStickySidebar({
        additionalMarginTop: 0
    });
});

/*Readmore*/
 jQuery('.article__content-readmore').readmore({
		collapsedHeight: 50,
		heightMargin: 16,
		moreLink: '<a href="#">Показать ещё</a>',
		lessLink: '<a href="#">Скрыть</a>'
});
