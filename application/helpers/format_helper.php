<?php 
    function formatTahunBulan($value_tgl){
        //mengembalikan format ex : 2020-06
        return date_format(date_create($value_tgl), "Y-m");
    }
?>