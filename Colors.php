<?php
// Adjust namespace depending on your needs, here's for Code Igniter 4
// namespace App\Helpers;

//  * Colors helpers
//  @author     Maxime Chevasson    <masamune.code@gmail.com>
//  @use
//              use App\Helpers\Colors;
//              $colorsFunctions = new Colors();
//
//              echo $colorsFunctions->HTMLColorNameToHEX('salmon');
//              echo $colorsFunctions->HTMLToRGB('#FA8072');
//              echo $colorsFunctions->isLightColorFromRGB('salmon') ? 'dark-shadow': 'light-shadow';
//              echo $colorsFunctions->RGBToHSL($colorsFunctions->HTMLToRGB('#FA8072'));
//              echo $colorsFunctions->testIsLightColorFromRGB();
class Colors {
    // * Allow conversion from html color literral to hexadecimal
    // @see https://www.w3schools.com/colors/colors_names.asp
    public $htmlColorsNamesCorrespondence = array(
        'aliceblue'             => 'F0F8FF'
        ,'antiquewhite'         => 'FAEBD7'
        ,'aqua'                 => '00FFFF'
        ,'aquamarine'           => '7FFFD4'
        ,'azure'                => 'F0FFFF'
        ,'beige'                => 'F5F5DC'
        ,'bisque'               => 'FFE4C4'
        ,'black'                => '000000'
        ,'blanchedalmond'       => 'FFEBCD'
        ,'blue'                 => '0000FF'
        ,'blueviolet'           => '8A2BE2'
        ,'brown'                => 'A52A2A'
        ,'burlywood'            => 'DEB887'
        ,'cadetblue'            => '5F9EA0'
        ,'chartreuse'           => '7FFF00'
        ,'chocolate'            => 'D2691E'
        ,'coral'                => 'FF7F50'
        ,'cornflowerblue'       => '6495ED'
        ,'cornsilk'             => 'FFF8DC'
        ,'crimson'              => 'DC143C'
        ,'cyan'                 => '00FFFF'
        ,'darkblue'             => '00008B'
        ,'darkcyan'             => '008B8B'
        ,'darkgoldenrod'        => 'B8860B'
        ,'darkgray'             => 'A9A9A9'
        ,'darkgrey'             => 'A9A9A9'
        ,'darkgreen'            => '006400'
        ,'darkkhaki'            => 'BDB76B'
        ,'darkmagenta'          => '8B008B'
        ,'darkolivegreen'       => '556B2F'
        ,'darkorange'           => 'FF8C00'
        ,'darkorchid'           => '9932CC'
        ,'darkred'              => '8B0000'
        ,'darksalmon'           => 'E9967A'
        ,'darkseagreen'         => '8FBC8F'
        ,'darkslateblue'        => '483D8B'
        ,'darkslategray'        => '2F4F4F'
        ,'darkslategrey'        => '2F4F4F'
        ,'darkturquoise'        => '00CED1'
        ,'darkviolet'           => '9400D3'
        ,'deeppink'             => 'FF1493'
        ,'deepskyblue'          => '00BFFF'
        ,'dimgray'              => '696969'
        ,'dimgrey'              => '696969'
        ,'dodgerblue'           => '1E90FF'
        ,'firebrick'            => 'B22222'
        ,'floralwhite'          => 'FFFAF0'
        ,'forestgreen'          => '228B22'
        ,'fuchsia'              => 'FF00FF'
        ,'gainsboro'            => 'DCDCDC'
        ,'ghostwhite'           => 'F8F8FF'
        ,'gold'                 => 'FFD700'
        ,'goldenrod'            => 'DAA520'
        ,'gray'                 => '808080'
        ,'grey'                 => '808080'
        ,'green'                => '008000'
        ,'greenyellow'          => 'ADFF2F'
        ,'honeydew'             => 'F0FFF0'
        ,'hotpink'              => 'FF69B4'
        ,'indianred'            => 'CD5C5C'
        ,'indigo'               => '4B0082'
        ,'ivory'                => 'FFFFF0'
        ,'khaki'                => 'F0E68C'
        ,'lavender'             => 'E6E6FA'
        ,'lavenderblush'        => 'FFF0F5'
        ,'lawngreen'            => '7CFC00'
        ,'lemonchiffon'         => 'FFFACD'
        ,'lightblue'            => 'ADD8E6'
        ,'lightcoral'           => 'F08080'
        ,'lightcyan'            => 'E0FFFF'
        ,'lightgoldenrodyellow' => 'FAFAD2'
        ,'lightgray'            => 'D3D3D3'
        ,'lightgrey'            => 'D3D3D3'
        ,'lightgreen'           => '90EE90'
        ,'lightpink'            => 'FFB6C1'
        ,'lightsalmon'          => 'FFA07A'
        ,'lightseagreen'        => '20B2AA'
        ,'lightskyblue'         => '87CEFA'
        ,'lightslategray'       => '778899'
        ,'lightslategrey'       => '778899'
        ,'lightsteelblue'       => 'B0C4DE'
        ,'lightyellow'          => 'FFFFE0'
        ,'lime'                 => '00FF00'
        ,'limegreen'            => '32CD32'
        ,'linen'                => 'FAF0E6'
        ,'magenta'              => 'FF00FF'
        ,'maroon'               => '800000'
        ,'mediumaquamarine'     => '66CDAA'
        ,'mediumblue'           => '0000CD'
        ,'mediumorchid'         => 'BA55D3'
        ,'mediumpurple'         => '9370DB'
        ,'mediumseagreen'       => '3CB371'
        ,'mediumslateblue'      => '7B68EE'
        ,'mediumspringgreen'    => '00FA9A'
        ,'mediumturquoise'      => '48D1CC'
        ,'mediumvioletred'      => 'C71585'
        ,'midnightblue'         => '191970'
        ,'mintcream'            => 'F5FFFA'
        ,'mistyrose'            => 'FFE4E1'
        ,'moccasin'             => 'FFE4B5'
        ,'navajowhite'          => 'FFDEAD'
        ,'navy'                 => '000080'
        ,'oldlace'              => 'FDF5E6'
        ,'olive'                => '808000'
        ,'olivedrab'            => '6B8E23'
        ,'orange'               => 'FFA500'
        ,'orangered'            => 'FF4500'
        ,'orchid'               => 'DA70D6'
        ,'palegoldenrod'        => 'EEE8AA'
        ,'palegreen'            => '98FB98'
        ,'paleturquoise'        => 'AFEEEE'
        ,'palevioletred'        => 'DB7093'
        ,'papayawhip'           => 'FFEFD5'
        ,'peachpuff'            => 'FFDAB9'
        ,'peru'                 => 'CD853F'
        ,'pink'                 => 'FFC0CB'
        ,'plum'                 => 'DDA0DD'
        ,'powderblue'           => 'B0E0E6'
        ,'purple'               => '800080'
        ,'rebeccapurple'        => '663399'
        ,'red'                  => 'FF0000'
        ,'rosybrown'            => 'BC8F8F'
        ,'royalblue'            => '4169E1'
        ,'saddlebrown'          => '8B4513'
        ,'salmon'               => 'FA8072'
        ,'sandybrown'           => 'F4A460'
        ,'seagreen'             => '2E8B57'
        ,'seashell'             => 'FFF5EE'
        ,'sienna'               => 'A0522D'
        ,'silver'               => 'C0C0C0'
        ,'skyblue'              => '87CEEB'
        ,'slateblue'            => '6A5ACD'
        ,'slategray'            => '708090'
        ,'slategrey'            => '708090'
        ,'snow'                 => 'FFFAFA'
        ,'springgreen'          => '00FF7F'
        ,'steelblue'            => '4682B4'
        ,'tan'                  => 'D2B48C'
        ,'teal'                 => '008080'
        ,'thistle'              => 'D8BFD8'
        ,'tomato'               => 'FF6347'
        ,'turquoise'            => '40E0D0'
        ,'violet'               => 'EE82EE'
        ,'wheat'                => 'F5DEB3'
        ,'white'                => 'FFFFFF'
        ,'whitesmoke'           => 'F5F5F5'
        ,'yellow'               => 'FFFF00'
        ,'yellowgreen'          => '9ACD32'
    // End / public $htmlColorsNamesCorrespondence = array(
    );

    // * Convert HTML colors name to hex, eg. 'salmon' > 'FA8072'
    // @param   $htmlColor  string  ~salmon #FA8072
    // @return              string  hex color without # ~FA8072
    public function HTMLColorNameToHEX($htmlColor) {
        // Lowercase conversion
        $htmlColor = strtolower($htmlColor);

        if(array_key_exists($htmlColor, $this->htmlColorsNamesCorrespondence)) {
            $htmlColor = $this->htmlColorsNamesCorrespondence[$htmlColor];
        }

        return $htmlColor;
    // End / public function HTMLColorNameToHEX($htmlColor) {
    }

    // * Convert a html/hexa color string to RGB
    //  @param  $htmlCode   string  With or without # : ~'#FA8072' ou 'FA8072'
    //  @return             string  ~255 255 255 ?
    //  @see    https://stackoverflow.com/a/12228733
    public function HTMLToRGB($htmlCode) {
        if($htmlCode[0] == '#'){
            $htmlCode = substr($htmlCode, 1);
        }
        
        if (strlen($htmlCode) == 3) {
            $htmlCode = $htmlCode[0] . $htmlCode[0] . $htmlCode[1] . $htmlCode[1] . $htmlCode[2] . $htmlCode[2];
        }
        
        $r = hexdec($htmlCode[0] . $htmlCode[1]);
        $g = hexdec($htmlCode[2] . $htmlCode[3]);
        $b = hexdec($htmlCode[4] . $htmlCode[5]);
        
        return $b + ($g << 0x8) + ($r << 0x10);
    // End / public function HTMLToRGB($htmlCode) {
    }

    // * Check luminosity of a color, allowing automatic contrast depending on light or dark color
    //  @param      $htmlColor              string      With or without # : ~'#FA8072' ou 'FA8072'
    //  @param      $lightnessThreshold     int         Original was 200, some say 150, some say 100, just make some tests and adjust
    //  @return                             boolean     true : light color, false : dark color
    //  @use
    //              use App\Helpers\Colors;
    //              $colorsFunctions = new Colors();
    //              echo $colorsFunctions->isLightColorFromRGB('salmon') ? 'dark-shadow': 'light-shadow';
    public function isLightColorFromRGB($htmlColorString, $lightnessThreshold = 115) {
        
        $htmlColor = $this->HTMLColorNameToHEX($htmlColorString);
        // Debug
        // echo '<h1>/app/Views/functions/colors.php > isLightColorFromRGB()</h1><p>Original color : ' . $htmlColor . ', converted color : ' . $convertedHtmlColor . '</p><hr>';

        $rgb = $this->HTMLToRGB($htmlColor);
        $hsl = $this->RGBToHSL ($rgb);

        return $hsl->lightness > $lightnessThreshold;
    // End / public function isLightColorFromRGB($htmlColorString, $lightnessThreshold = 115) {
    }

    // * Convert RGB string to HSL (Hue Saturation Light)
    //  @param  $RGB   string   ~255 255 255 ?
    //  @return        object   Associative array converted to object
    //      ('hue' => $h, 'saturation' => $s, 'lightness' => $l)
    //  @see    https://stackoverflow.com/a/12228733
    public function RGBToHSL($RGB) {
        $r = 0xFF & ($RGB >> 0x10);
        $g = 0xFF & ($RGB >> 0x8);
        $b = 0xFF & $RGB;
        
        $r = ((float)$r) / 255.0;
        $g = ((float)$g) / 255.0;
        $b = ((float)$b) / 255.0;
        
        $maxC = max($r, $g, $b);
        $minC = min($r, $g, $b);
        
        $l = ($maxC + $minC) / 2.0;
        
        if($maxC == $minC) {
            $s = 0;
            $h = 0;
        }
        else {
            if($l < .5) {
                $s = ($maxC - $minC) / ($maxC + $minC);
            }
            else {
                $s = ($maxC - $minC) / (2.0 - $maxC - $minC);
            }
            if($r == $maxC) {
                $h = ($g - $b) / ($maxC - $minC);
            }
            if($g == $maxC) {
                $h = 2.0 + ($b - $r) / ($maxC - $minC);
            }
            if($b == $maxC) {
                $h = 4.0 + ($r - $g) / ($maxC - $minC);
            }
            
            $h = $h / 6.0; 
        }
        
        $h = (int)round(255.0 * $h);
        $s = (int)round(255.0 * $s);
        $l = (int)round(255.0 * $l);
        
        return (object) Array('hue' => $h, 'saturation' => $s, 'lightness' => $l);
    // End / public function RGBToHSL($RGB) {
    }

    // 📌 Some tests
    public function testIsLightColorFromRGB() {
        echo '<h1>Tests : Colors > isLightColorFromRGB()</h1>';
        echo '<p>isLightColorFromRGB("#fafafa")            = "' . isLightColorFromRGB('#fafafa')           . '"</p>';
        echo '<p>isLightColorFromRGB("#020202")            = "' . isLightColorFromRGB('#020202')           . '"</p>';
        echo '<p>isLightColorFromRGB("020202")             = "' . isLightColorFromRGB('020202')            . '"</p>';
        echo '<p>isLightColorFromRGB("#F23498")            = "' . isLightColorFromRGB('#F23498')           . '"</p>';
        echo '<p>isLightColorFromRGB("#01FF70")            = "' . isLightColorFromRGB('#01FF70')           . '"</p>';
        echo '<p>isLightColorFromRGB("#DDDDDD")            = "' . isLightColorFromRGB('#DDDDDD')           . '"</p>';
        echo '<p>isLightColorFromRGB("#F012BE")            = "' . isLightColorFromRGB('#F012BE')           . '"</p>';
        echo '<p>isLightColorFromRGB("#7FDBFF")            = "' . isLightColorFromRGB('#7FDBFF')           . '"</p>';
        echo '<p>isLightColorFromRGB("lavenderblush")      = "' . isLightColorFromRGB('lavenderblush')     . '"</p>';
        echo '<p>isLightColorFromRGB("mediumspringgreen")  = "' . isLightColorFromRGB('mediumspringgreen') . '"</p>';
        echo '<p>isLightColorFromRGB("salmon")             = "' . isLightColorFromRGB('salmon')            . '"</p>';
    // End / public function testIsLightColorFromRGB() {
    }
// End / class Colors {
}
?>
