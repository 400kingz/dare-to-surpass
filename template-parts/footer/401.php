<script type="text/javascript">var $ = window.jQuery;</script><script src="<?php echo get_template_directory_uri(); ?>/assets/js/webflow.js?v=1687203924" type="text/javascript"></script>
<script>
(function($){
$(function(){
$(document).on('click', 'a', function(e) {
var $this = $(this),
	href = this.href,
delay = this.dataset.delay || 500;
e.preventDefault();
setTimeout(function(){ window.location = href },delay);
});
});
})(jQuery);
</script><script type="module">import*as UdeslyBanner from"https://cdn.jsdelivr.net/npm/udesly-ad-banner@0.0.1/loader/index.js";UdeslyBanner.defineCustomElements(),document.body.append(document.createElement("udesly-banner"));</script>