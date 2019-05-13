<?php


namespace Tidepool;


class ImageEditor
{
    /**
     * Brightness value: [-100; 100].
     *
     * @var integer
    */
    private $brightness;

    /**
     * Contrast value: [-100; 100].
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
     * Collect and print the validation errors.
     *
     * @return void
    */
    private function validateRequest(){
        // Check if the request is post
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            echo 'The request method should be POST';
            die;
        }

        // This is a errors array. In case if the form request is valid,
        // This variable will be empty.
        $errors = [];

        // Check for valid filters
        foreach ($this->post['filters'] as $filter){
            if(!isset($this->filters[ $filter ])){
                $errors[] = 'Wrong filter';
                break;
            }
        }

        // Check for valid brightness value
        if($this->post['brightness'] < -100 || $this->post['brightness'] > 100)
            $errors[] = 'Wrong brightness value';


        // Check for valid brightness value
        if($this->post['contrast'] < -100 || $this->post['contrast'] > 100)
            $errors[] = 'Wrong contrast value';


        // Check for valid image files
        foreach ($this->files['images'] as $file){
            echo"<pre>";var_dump($file);die;
//            if(in_array($file['type'] , array(IMAGETYPE_GIF , IMAGETYPE_JPEG ,IMAGETYPE_PNG , IMAGETYPE_BMP)))
        }


//            echo"<pre>";var_dump($this->files);die;
    }
}