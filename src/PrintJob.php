<?php
/**
 * laravel-google-cloud-print
 *
 * @author    Jérémy GAULIN <jeremy@ALIWORKSHOP.re>
 * @copyright 2016 - B&B Web Expertise
 */

namespace ALIWORKSHOP\GoogleCloudPrint;

/**
 * Class PrintJob
 *
 * @property string id
 * @property string printerid
 * @property string status
 * @property string title
 *
 * @package ALIWORKSHOP\GoogleCloudPrint
 */
class PrintJob
{

    public function __construct($job)
    {
        $this->data = $job;
    }


    public function __get($attribute)
    {
        if (isset($this->data->{$attribute})) {
            return $this->data->{$attribute};
        }

        return null;
    }
}