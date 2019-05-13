<?php


namespace Tidepool;


class ImageEditor
{
    /**
     * Brightness value: 0 - 100.
     *
     * @var integer
    */
    private $brightness;

    /**
     * Contrast value: 0 - 100.
     *
     * @var integer
    */
    private $contrast;

    /**
     * Available filters list.
     *
     * @var array
    */
    private $filters = [
        'edgedetect'   => IMG_FILTER_EDGEDETECT,
        'gaussianblur' => IMG_FILTER_GAUSSIAN_BLUR,
        'negate'       => IMG_FILTER_NEGATE,
    ];

    /**
     * Post files.
     *
     * @var array
    */
    private $files;

    /**
     * Post data.
     *
     * @var array
    */
    private $post;


    /**
     * Init the properties.
     * Run the validation.
     *
     * @return void
    */
    public function __construct(){
        $this->initObject();
        $this->validateRequest();
    }

    public function process(){
        echo"<pre>";var_dump($_POST, $_FILES);die;
    }


    /**
     * Init Image object.
     *
     * @return void
    */
    private function initObject(){
        $this->post  = $_POST;
        $this->files = $_FILES;
    }

    /**
     * Validate the request.
     *
     * @return void
    */
    private function validateRequest(){
        echo"<pre>";var_dump($this->post);die;
    }
}