
<?php
echo "Enter Number Of Units=";
$input = $units[3];
    if (!empty($units)) {
        $result = calculate_bill($units);
        $result_str = 'Total amount of ' . $units . ' = ' . $result;
        echo $result;
    }
}
function calculate_bill($units) 
{
    $unit_cost_first = 9;
    $unit_cost_second = 12;
    $unit_cost_third = 15;
    
    if($units <= 50) 
    {
        $result = $units * $unit_cost_first;
    }
    else if($units > 50 && $units <= 100) 
    {
        $result = $units * $unit_cost_second;
    }
    else 
    {
        $result = $units * $units_cost_third;
     }
}
 
?>
