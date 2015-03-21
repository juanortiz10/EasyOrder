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
    foreach($items as $item){
    ?>
        <div class="product" >
            <table class="table table-hover">
                <tr>
                    <td>
                        <img src="<?php echo $item['img']; ?>" alt=""/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3><?php echo $item['name'];?></h3>
                        <h2><?php echo $item['price'];?></h2>
                        <p><?php echo $item['description'];?></p>
                    </td>
                </tr>
            </table>
        </div>

    <?php
    }
}