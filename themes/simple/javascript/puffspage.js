/**
 * Created by xlin on 31/07/15.
 */
; (function($){
    var $detailLinks = $('.detail-link'),
        $descriptions = $('.description-container');

    $detailLinks.each(function() {
        var $this = $(this),
            id = $this.attr('id');

        $this.click(function(e){
            e.preventDefault();
            showHideDetail(id);
        });
    });

    function showHideDetail(id) {
        var $link = $('#' + id + '.detail-link'),
            $description = $link.siblings('.description-container');
        if ($description.hasClass('show')) {
            $description.removeClass('show');
        } else {
            $descriptions.removeClass('show');
            $description.addClass('show');
        }
    }
}(jQuery));