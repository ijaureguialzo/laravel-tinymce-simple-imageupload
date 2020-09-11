<?php

if(! function_exists('mce_back'))
{
    /**
     * Respond a script back to TinyMCE
     *
     * @param  string $url
     * @return string
     */
    function mce_back($url)
    {
        return ("
            <script>
                top.$('.tox-browse-url').parent().find('.tox-textfield').val('$url');
                top.$(\"button[title|='Save']\").click();
            </script>
        ");
    }
}
