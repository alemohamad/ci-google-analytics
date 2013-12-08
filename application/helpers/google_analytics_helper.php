<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// Google Analytics / Web Tracking
// https://developers.google.com/analytics/devguides/collection/gajs/eventTrackerGuide
// 
// This method generates the track pageview code of Google Analytics

if (!function_exists('initGA'))
{
    function initGA($gaAccount){
        if( empty($gaAccount) ) {
            return false;
        }

        $ga_code = "<script>
var _gaq = _gaq || [];
_gaq.push(['_setAccount', '{$gaAccount}']);
_gaq.push(['_trackPageview']);

(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>";

        return $ga_code;
    }
}

// This method generates the track event code of Google Analytics

if (!function_exists('trackEventGA'))
{
    function trackEventGA($category, $action, $label){
        $category = addslashes($category);
        $action   = addslashes($action);
        $label    = addslashes($label);
        $ga_code  = "onclick=\"_gaq.push(['_trackEvent', '{$category}', '{$action}', '{$label}']);\"";

        return $ga_code;
    }
}

/* End of file google_analytics_helper.php */
/* Location: ./application/helpers/google_analytics_helper.php */