<?php
if ( ! function_exists('my_anchor'))
{
    function my_anchor($uri = '', $title = '', $attributes = '')
    {
        $title = (string) $title;
        if ( ! is_array($uri))
        {
            $site_url = ( ! preg_match('!^\w+://! i', $uri)) ? site_url($uri) : $uri;
        }
        else
        {
            $site_url = site_url($uri);
        }
        if ($title == '')
        {
            $title = $site_url;
        }
        if ($attributes != '')
        {
            $attributes = _parse_attributes($attributes);
        }
        # new edit
        $querystring = explode('?', $site_url);
        $querystring[0] = rtrim($querystring[0], '/');
        $site_url = implode('?', $querystring);
        # stop edit
        return '<a href="'.$site_url.'"'.$attributes.'>'.$title.'</a>';
    }
}
?>