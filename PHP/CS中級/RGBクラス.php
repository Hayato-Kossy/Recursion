<?php

class RGB {
    public $red;
    public $green;
    public $blue;

    function __construct(int $red, int $green, int $blue) {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;
    }

    function toHex(int $decnumber): string{
        $ans = "";
        $hex = "0123456789abcdef";

        if ($decnumber == 0) return "00";

        while ($decnumber > 0) {
            $ans = $hex[$decnumber % 16] . $ans;
            $decnumber = floor($decnumber / 16);
        }
        return $ans;
    }

    function getHexCode(): string{
        return '#' . $this->toHex($this->red) . $this->toHex($this->green) . $this->toHex($this->blue);        
    }

    function toBit(string $hexnumber): string{
        $dec = hexdec($hexnumber);
        $bit = decbin($dec);
        return $bit;
    }

    function getBits(): string{
        return $this->toBit($this->getHexCode());
    }

    function getColorShade(): string{
        $color_array = [
            $this->red => "red", 
            $this->green => "green", 
            $this->blue => "blue"
        ];

        if ($this->red == $this->green && $this->red == $this->blue) {
            return "grayscale";
        } else {
            $colors = [$this->red, $this->green, $this->blue];

            return $color_array[max($colors)];
        }
    }
}

$color1 = new RGB(0, 153, 255);
echo $color1->getHexCode() . PHP_EOL;
echo $color1->getBits() . PHP_EOL;
echo $color1->getColorShade() . PHP_EOL;

$color2 = new RGB(255, 153, 204);
echo $color2->getHexCode(). PHP_EOL;
echo $color2->getBits(). PHP_EOL;
echo $color2->getColorShade(). PHP_EOL;


$color3 = new RGB(0, 87, 0);
echo $color3->getHexCode(). PHP_EOL;
echo $color3->getBits(). PHP_EOL;
echo $color3->getColorShade(). PHP_EOL;


$gray = new RGB(123, 123, 123);
echo $gray->getHexCode(). PHP_EOL;
echo $gray->getBits(). PHP_EOL; 
echo $gray->getColorShade(). PHP_EOL;