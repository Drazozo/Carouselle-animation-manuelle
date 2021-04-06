<!DOCTYPE html>
<html>
<head>
  <title>Caroussel d'image </title>
<link href="style.css" rel="stylesheet" type="text/css" media="all" />

<div>
  <span class="info">Il faut cliquer dans les cerles pour faire défiler les images. </span>

  <div class="card">

    <!-- Use radio button to simulate
      -- The feature that let users choose the picture to show
    -->
    <input type="radio" name="checkbox" class="checkbox checkbox_1" id="card_part-one" checked="checked">
    <label for="card_part-one">
      <span></span>
    </label>

    <input type="radio" name="checkbox" class="checkbox checkbox_2" id="card_part-two">
    <label for="card_part-two">
      <span></span>
    </label>

    <input type="radio" name="checkbox" class="checkbox checkbox_3" id="card_part-three">
    <label for="card_part-three">
      <span></span>
    </label>

    <input type="radio" name="checkbox" class="checkbox checkbox_4" id="card_part-four">
    <label for="card_part-four">
      <span></span>
    </label>

    <!-- The cards photos cards ist
      Every photos is loaded as a background part
      In divs taht have class "card_part_slice" -->

    <!-- Photo 1 -->
    <div class="card_part card_part-one">
      <div class="card_part_slice slice_1">
      </div>

      <div class="card_part_slice slice_2">
      </div>

      <div class="card_part_slice slice_3">
      </div>

      <div class="card_part_slice slice_4">
      </div>
    </div>

    <!-- Photo 2 -->
    <div class="card_part card_part-two">
      <div class="card_part_slice slice_1">
      </div>

      <div class="card_part_slice slice_2">
      </div>

      <div class="card_part_slice slice_3">
      </div>

      <div class="card_part_slice slice_4">
      </div>
    </div>

    <!-- Photo 3 -->
    <div class="card_part card_part-three">
      <div class="card_part_slice slice_1">
      </div>

      <div class="card_part_slice slice_2">
      </div>

      <div class="card_part_slice slice_3">
      </div>

      <div class="card_part_slice slice_4">
      </div>
    </div>

    <!-- Photo 4 -->
    <div class="card_part card_part-four">
      <div class="card_part_slice slice_1">
      </div>

      <div class="card_part_slice slice_2">
      </div>

      <div class="card_part_slice slice_3">
      </div>

      <div class="card_part_slice slice_4">
      </div>
    </div>

  </div>
</div>

</body>
</html>