;(function($) {
    var $dropdownIcon = $('.dropdown-icon-link');

    $dropdownIcon.on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        $this.parent().toggleClass('show-children');
    });
})(jQuery);