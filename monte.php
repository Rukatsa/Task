
  <?php

function simu(int $probtobuy = 20): array {
    $adv = rand(0, 100);
    if($adv > $probtobuy){
        return ["bought"=> false, "discount" => 0];
    }

    $buyimmediately = rand(0, 100);
    if($buyimmediately < 10){
        return immediatelybuy();
    }
    return  nobuy();
}

function immediatelybuy(): array {
    $discount = rand(0, 100);
    if($discount > 25){
        return ["bought"=> true, "discount" => 0];
    }
    return ["bought"=> true, "discount" => 10];
}

function nobuy(): array {
    global $remarketing;
    $nobuy = rand(0, 100);
    if($nobuy > 2){
        $remarketing += 1;
        return simu(10); 
    }
    return newsletter();
}

function newsletter(): array {
    global $remarketing;
    $nobuy = rand(0, 100);
    if($nobuy > 4){
        $remarketing += 1;
        return simu(10); 
    }

    return ["bought"=> true, "discount"=> 15];
}



$usersnum= 100000;
$successfulsells = 0;
$subscribers = 0;
$marketing_cost = 0;

$book_1 = 0;
$book_2 = 0;
$set_of_2_books = 0;
$authors_box = 0;

$total_income = 0;
$discount_cost = 0;
$discount_users = 0;
$discount_15_users_num = 0;

for($i = 1; $i < $usersnum; ++$i){
    $result = simu();
    if($result["bought"] == true){
        $current_sale = 0;

        $successfulsells += 1;
        $num_buy = rand(0, 100);
        if($num_buy < 5) {
            $buy_count = 3;
        }
        elseif($num_buy < 20){
            $buy_count = 2;
        }
        else{
            $buy_count = 1;
        }

        for($pro_count = 0; $pro_count <= $buy_count; $pro_count++){
            $select = rand(0, 100);

            if($select < 10){
                $book_1 += 1;
                $current_sale += 14;
            }
            elseif($select < 40){
                $book_2 += 1;
                $current_sale += 14;
            }
            elseif($select < 80){
                $set_of_2_books += 1;
                $current_sale += 28;
            }
            else{
                $authors_box += 1;
                $current_sale += 25;
            }
        }

        if($result["discount"] != 0){
            $discount_users += 1;
            $discount_cost += $current_sale - $current_sale / $result["discount"];

            if($result["discount"] == 15){
                $discount_15_users_num += 1;
            }
        }
        $total_income += $current_sale;
    }
}

while($subscribers < $usersnum){
    $marketing_cost += 20;
    $subscribers += rand(460, 1200);
}

$remarketing_cost = $remarketing * 2.5;

echo "Probability of buying the book is " . ($successfulsells / $usersnum) * 100 . " %\n"."<br>";
echo "Total costs of advertising on instagram " . $marketing_cost . "\n"."<br>";
echo "Total cost of discount " . $discount_cost . "(" . $discount_cost / $total_income * 100 . " %)\n"."<br>";
echo "Number of people who subscribed are to the newsletter " . (100 * $discount_15_users_num) / 4 . "\n"."<br>";
echo "Number of people who bought the book are  " . $successfulsells . "\n";
echo "How much did it cost on average to get one customer " . (($marketing_cost + $remarketing_cost) / $successfulsells) . "\n"."<br>";
echo "People using discounts are  " . $discount_users . "\n"."<br>";
echo "Total Profit from Sales " . $total_income - $marketing_cost - $remarketing_cost . "\n"."<br>";
echo "Profit per user " . (($total_income - $marketing_cost - $remarketing_cost) / $usersnum) . "\n"."<br>";