<html>
<?php 
function ageCalculator($dob){
    if(!empty($dob)){
        $birthdate = new DateTime($dob);
        $today   = new DateTime('today');
        $age = $birthdate->diff($today)->y;
        return $age;
    }else{
        return 0;
    }
}
$dob = '1998-04-12';
echo ageCalculator($dob);
?>
</html>
