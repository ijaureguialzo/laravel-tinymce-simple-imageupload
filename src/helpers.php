<?php

if(! function_exists('mce_back'))
{
    /**
     * Respond a script back to TinyMCE
     *
     * @param  string $filename
     * @return string
     */
    function mce_back($filename)
    {
        return ("
            <script>
                top.$('.tox-browse-url').parent().find('.tox-textfield').val('/img/$filename');
                top.$(\"button[title|='Save']\").click();
            </script>
        ");
    }
}
