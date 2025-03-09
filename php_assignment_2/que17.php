<?php
class ShoppingCart {
    private $items = array();
    private $total = 0.0;

    public function addItem($item, $price, $quantity = 1) {
        $this->items[] = ['item' => $item, 'price' => $price, 'quantity' => $quantity];
        $this->calculateTotal();
    }

    private function calculateTotal() {
        $this->total = 0.0;
        foreach ($this->items as $item) {
            $this->total += $item['price'] * $item['quantity'];
        }
    }

    public function getTotal() {
        return $this->total;
    }

    public function getItems() {
        return $this->items;
    }
}
// Example usage:
$cart = new ShoppingCart();
$cart->addItem("Apple", 0.99, 3);
$cart->addItem("Banana", 0.59, 2);

echo "Total: $" . $cart->getTotal() . "\n";
print_r($cart->getItems());
?>

// Total: $4.15 Array ( [0] => Array ( [item] => Apple [price] => 0.99 [quantity] => 3 ) [1] => Array ( [item] => Banana [price] => 0.59 [quantity] => 2 ) )