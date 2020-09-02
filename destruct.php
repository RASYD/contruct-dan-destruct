<?php
class coba {
    public function __destruct(){
        echo "Assalamualaikum";
    }
}

$tampil = new coba();
unset($tampil);
?>