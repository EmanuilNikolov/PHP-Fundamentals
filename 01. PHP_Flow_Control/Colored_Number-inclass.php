<?php
$html = "<ul>";
for ($i = 0; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        $color = 'green';
    } else {
        $color = 'blue';
    }
    $html .= "  <li><span style=\"color:$color\">$i</span></li>";
}
$html .= "</ul>";
echo $html;
