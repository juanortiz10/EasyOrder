<?php
/**
 * Created by PhpStorm.
 * User: jesus
 * Date: 10/21/14
 * Time: 6:03 PM
 */
function get_food($type){
    global $database;
    $database->SQL();
    $items = $database->get_food($type);
    ?>
    <div class="product" >
    <table class="table table-hover">
    <?php
    foreach($items as $item){
    ?>

                <tr>
                    <td style="width: 25%"> 	     
                        <img src="<?php echo $item['img']; ?>" alt=""/>
                    </td>
                    <td style="width: 50%">
                        <h3><?php echo $item['name'];?></h3>
                        <h2>Precio: <?php echo number_format($item['price'],2,".",",");?></h2>
                        <p> <?php echo $item['description'];?></p>
                    </td>
                    <td style="width: 25%">
                        <input type="number" min="0" max="99" class="order_values" value="0" name="<?php echo $item['id']; ?>"  id="id<?php echo $item['id']; ?>" style="width: 50px; height: 30px; font-size: larger;"/>
                        <div class="btn-group btn-group-lg" style="margin:20px auto;">
                            <button class="btn btn-success " onclick="addOne('id<?php echo $item['id']; ?>','<?php echo $item['name']; ?>','<?php echo number_format($item['price'],2,'.',',');?>');" ><span class="glyphicon glyphicon-plus"></span></button>
                            <button class="btn btn-danger " onclick="subOne('id<?php echo $item['id']; ?>','<?php echo $item['names']; ?>','<?php echo number_format($item['price'],2,'.',',');?>');");" ><span class="glyphicon glyphicon-minus"></span></button>
                        </div>
                       </td>
                </tr>
    <?php
    }
    ?>
      </table>
    </div>
        <?php
}