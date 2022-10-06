<?php

class about {
    public function index($nama = 'Sandhika', $pekerjaan = 'Dosen')
    {
        echo"Halo , nama Saya $nama , saya adalah seorang $pekerjaan";
    }
    public function page ()
    {
        echo 'about/page';
    }
}
?>