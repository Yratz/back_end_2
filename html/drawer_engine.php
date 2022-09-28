<?php

class DrawerEngine_2 {
    const PARAMETER_NAME = 'num';
    
    private int $shape;
    private string $color;
    private int $width;
    private int $height;
    

    public function __construct(int $encoded) {
        $this->shape = $encoded % 4;
        $encoded = intdiv($encoded, 10);
        $this->color = $this->colorization($encoded % 4);
        $encoded = intdiv($encoded, 10);
        $this->width = ($encoded % 10 +2) * 30;
        $encoded = intdiv($encoded, 10);
        $this->height = ($encoded % 10 + 2) * 30;
        $this->paint();
    }

    private function colorization(int $code_color) {
        switch ($code_color) {
            case 0:
                return "PeachPuff";
                break;
            case 1: 
                return "SlateBlue";
                break;
            case 2: 
                return "MediumAquamarine";
                break;
            case 3: 
                return "IndianRed";
                break;
        }
    }

    private function paint() {
        $halfWidth = $this->width / 2;
        $halfHeight = $this->height / 2;
        switch ($this->shape) {
            case 0:
                $figure = <<<A
                    <ellipse  
                        cx="$halfWidth" 
                        cy="$halfHeight" 
                        rx="$halfWidth" 
                        ry="$halfHeight" 
                        fill="$this->color"
                        stroke="black"
                        stroke-width="5"/>
                A;
                break;
            case 1:
                $figure = <<<B
                    <rect 
                        width="$this->width" 
                        height="$this->height" 
                        fill="$this->color"
                        stroke="black"
                        stroke-width="5"/>
                B;
                break;
            case 2:
                $figure = <<<C
                    <polygon 
                        points="$this->width,$this->height 0,0 0,$this->height" 
                        fill="$this->color"
                        stroke="black"
                        stroke-width="5"/>
                C;
                break;
            case 3:
                $figure = <<<D
                    <polygon 
                        points="$this->width,$this->height $this->width,0 0,$this->height" 
                        fill="$this->color"
                        stroke="black"
                        stroke-width="5"/>
                D;
                break;
            default:
                throw new Exception("Wrong input");
        }
        echo <<<E
        <svg 
            width="$this->width"
            height="$this->height">
            $figure
        </svg>                
        E;
    }
}

?>