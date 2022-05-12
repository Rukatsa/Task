<?php
function hello(string $text ): void {
    echo $text;
}
hello("param3t3r");

function repatContent(int $count=1): void{
    for($i=0;$i<=$count;$i++){
        hello("Hello Vassily");
    }
}
repatContent();
repatContent(5);