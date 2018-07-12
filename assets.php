<?php

namespace fixframework\assets;

use Fix\Support\Support;
use Fix\Kernel\Kernel;
use Fix\Kernel\Url;
use Fix\Settings\Kernel as Settings;

class assets
{

    /**
     * @param null $__setFile
     * @param null $__setData
     * @return bool
     */
    public static function render($__setFile = null, $__setData = null){

        if($__setFile):

            if(
                file_exists
                (
            Settings::APPLICATIONS_MASTER_FOLDER.
                    Settings::SLASH.
                    Url::getSettings()["folder"].
                    Settings::SLASH.
                    Settings::VIEWS_FOLDER.
                    Settings::SLASH.
                    Settings::ASSETS_PAGES_FOLDER.
                    Settings::SLASH.
                    $__setFile.
                    Settings::CORE_EXTENSION
                )
            ):

                is_array($__setData) ? extract($__setData) : null;

                include
                (
                    Settings::APPLICATIONS_MASTER_FOLDER.
                    Settings::SLASH.
                    Url::getSettings()["folder"].
                    Settings::SLASH.
                    Settings::VIEWS_FOLDER.
                    Settings::SLASH.
                    Settings::ASSETS_PAGES_FOLDER.
                    Settings::SLASH.
                    $__setFile.
                    Settings::CORE_EXTENSION
                );

                return true;

            else:
                Support::__error("NOT FOUND FILE");
            endif;

        else:
            Support::__error("ENTER FILE NAME");
        endif;

    }

}