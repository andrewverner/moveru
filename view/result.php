<?php
/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 12.02.17
 * Time: 15:44
 */
?>
<html>
<head>
    <title>HTML Parser results</title>
</head>
<body>
    <h2>HTML Parser results</h2>
    <?php if (empty($counter)) { ?>
        <h3>There are no HTML tags</h3>
    <?php } else { ?>
        <table border="1" width="50%">
            <thead>
                <th><strong>Tag</strong></th>
                <th><strong>Count</strong></th>
            </thead>
            <?php foreach ($counter as $tag => $count) : ?>
                <tr>
                    <td><?php echo $tag ?></td>
                    <td><?php echo $count ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php } ?>
</body>
</html>
