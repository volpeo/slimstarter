<?php
  class Book {

    static function all() {
      return array(
        array(
          "id" => 1,
          "title" => "Alice au pays des merveilles"
        ),
        array(
          "id" => 2,
          "title" => "Tintin au Tibet"
        ),
        array(
          "id" => 3,
          "title" => "Le parfum"
        )
      );
    }

    static function getBook($book_id) {
      return array(
        "id" => 1,
        "title" => "Alice au pays des merveilles",
        "description" => "<p>'Perhaps it hasn't one,' Alice ventured to remark.</p><p>'Tut, tut, child!' said the Duchess. 'Everything's got a moral, if only you can find it.' And she squeezed herself up closer to Alice's side as she spoke.</p><p>Alice did not much like keeping so close to her: first, because the Duchess was VERY ugly; and secondly, because she was exactly the right height to rest her chin upon Alice's shoulder, and it was an uncomfortably sharp chin. However, she did not like to be rude, so she bore it as well as she could.</p>"
      );
    }

  }
?>
