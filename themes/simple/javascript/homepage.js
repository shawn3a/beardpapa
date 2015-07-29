/**
 * Created by xlin on 28/07/15.
 */
;(function($){
    $(".flexslider").flexslider({
        animation: 'slide',
        slideshowSpeed: 4000,
        animationSpeed: 1200
    });

    /**
     * Handle click to show corresponding event
     * @type {*|HTMLElement}
     */
    var $eventLinks = $(".event-link");

    $eventLinks.each(function(){
        var $link = $(this),
            index,
            $slideLink;

        $link.click(function(event){
            event.preventDefault();
            index = $link.parent().index();

            $slideLink = $("ol.flex-control-nav li:nth-child(" + (parseInt(index)+1) + ")").find("a");

            $slideLink.trigger('click');
        });
    });

}(jQuery));