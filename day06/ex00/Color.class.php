<?php

    class Color {

        //properties and methods

        private $red;
        private $green;
        private $blue;
        static public $verbose = false;

        public function __construct(array $rgb){
            if (array_key_exists("rgb", $rgb)){
                $this->red = intval(($rgb["rgb"]>>16) & 0xff);
                $this->green = intval(($rgb["rgb"] >> 8) & 0xff);
                $this->blue = intval(($rgb["rgb"]) & 0xff);
            }
            if (isset($rgb["red"]) && isset($rgb["green"]) && isset($rgb["green"])) {
                $this->red = intval($rgb["red"]);
                $this->green = intval($rgb["green"]);
                $this->blue = intval($rgb["blue"]);
            }
            if (self::$verbose) {
                echo (($this->__toString())." constructed".PHP_EOL); 
            }
        }

        public function __destruct(){
            if (self::$verbose){
                echo (($this->__toString())."constucted".PHP_EOL);
            }
        }

        public function add($new_add){
            return (
                new Color(
                    array(
                        'red' => $this->red + $new_add->red,
                         'green' => $this->green + $new_add->green,
                          'blue' => $this->blue + $new_add->blue
                        )
                    )
                );               
        }
        public function sub($new_sub){
            return (new Color(
                array(
                    'red' => $this->red - $new_sub->red,
                     'green' => $this->green - $new_sub->green,
                      'blue' => $this->blue - $new_sub->blue
                    )
                )
            );               
        }
        public function mult($new_mult){
            return (new Color(
                array(
                    'red' => $this->red * $new_mult->red,
                     'green' => $this->green * $new_mult->green, 
                     'blue' => $this->blue * $new_mult->blue
                    )
                )
            );               
        }
        
        function __toString() {
            return (sprintf("Color(red:%4d, green:%4d, blue:%4d)", $this->red, $this->green, $this->blue));
        }
        public static function doc(){
            echo (file_get_contents("./ex00/Color.doc.txt"));
        }
    }
 ?>