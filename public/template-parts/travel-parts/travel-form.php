<?php
require_once './template-parts/travel.php'; ?>
<form method="post" >
        <div class="form-group ">
            <label for="exampleFormControlSelect2">Select a category
             <select name="category"  class="form-control" id="">
             <option>Select your category </option>
            <?php foreach($categories as $key => $val ){ ?>
            <option value="<?= $key ?>"><?= $key ?></option>
            <?php } ?>
            </select></label>
         </div>

        <div class="form-group ">
            <label for="">Select a country
                <select name="$key"  class="form-control" id="">
                    <option>Select your country </option>
                <?php foreach($countries as $key => $val ){ ?>
            <option value="<?= $key ?>"><?= $val ?></option>
            <?php } ?>
            </select> </label>
         </div>
    <input type="submit" value="Send">
</form>