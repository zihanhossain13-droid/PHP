<?php
declare(strict_types=1);
interface DiscountInterface {
    public function calculate(float $price): float;
}
interface SeasonalDiscountInterface extends DiscountInterface {
    public function isEligible(): bool;
}
class FlatDiscount implements DiscountInterface {
    public function calculate(float $price): float {
        return $price - 100.00; 
    }
}
class EidDiscount implements SeasonalDiscountInterface {
    public function isEligible(): bool {
        return true;
    }

    public function calculate(float $price): float {
        if ($this->isEligible()) {
            return $price - ($price * 0.20);
        }
        return $price;
    }
}
function applyDiscount(DiscountInterface $discount, float $originalPrice): void {
    echo "Final Price: " . $discount->calculate($originalPrice) . " BDT<br>";
}
$flat = new FlatDiscount();
applyDiscount($flat, 1000.00);
$eid = new EidDiscount();
applyDiscount($eid, 1000.00);