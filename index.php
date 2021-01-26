<?php

function convertEnglishMonthToMarathiMonth($input) {
    
    $english_months_array = array("December","November","October","January","February","March","April","May","June","July","August","September");
    $marathi_months_array = array("डिसेंबर","नोव्हेंबर","ऑक्टोबर","जानेवारी","फेब्रूवारी","मार्च","एप्रिल","मे","जून","जुलै","ऑगस्ट","सप्टेंबर");
    
    return str_replace($english_months_array, $marathi_months_array, $input);
  }

?>

<?php

function convertNumberToMarathiMonth($input) {
    
    $standard_numsets = array("12","11","10","01","02","03","04","05","06","07","08","09","1","2","3","4","5","6","7","8","9");
    $months_array = array("डिसेंबर","नोव्हेंबर","ऑक्टोबर","जानेवारी","फेब्रूवारी","मार्च","एप्रिल","मे","जून","जुलै","ऑगस्ट","सप्टेंबर","जानेवारी","फेब्रूवारी","मार्च","एप्रिल","मे","जून","जुलै","ऑगस्ट","सप्टेंबर");
    
    return str_replace($standard_numsets, $months_array, $input);
  }

?>

<?php

function convertNumberToEnglishMonth($input) {
    
    $standard_numsets = array("12","11","10","01","02","03","04","05","06","07","08","09","1","2","3","4","5","6","7","8","9");
    $months_array = array("December","November","October","January","February","March","April","May","June","July","August","September");
    
    return str_replace($standard_numsets, $months_array, $input);
  }

?>

<?php

function convertMonthToNumber($input) {
    
    $standard_numsets = array("12","11","10","01","02","03","04","05","06","07","08","09");
    $months_array = array("December","November","October","January","February","March","April","May","June","July","August","September");
    
    return str_replace($months_array, $standard_numsets, $input);
  }

?>

