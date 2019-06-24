<?php
include 'functions.php';
$json = file_get_contents('data.json');
$data = json_decode($json, true);
krsort($data);
?>

<?php switch ($_GET['mode']): case 'stop':  ?>
    <?php
        $id = $_GET['id'];
        $data['id']['date_end'] = time();
        save($data);
    ?>
    <?php break; ?>

    <?php case 'new':  ?>
    <?php
    $time = time();
    $data[$time]['id'] = $time;
    $data[$time]['name']=$_GET['name'];
    $data[$time]['date_start']=$time;
    $data[$time]['date_end']='';

    $data[$time]['status']=1;
    save($data);
    ?>
    <?php break; ?>

    <?php case 'tally': ?>
    <?php $count = 0; ?>
    <?php foreach ($data as $task) : ?>
        <?php
        $count = $count + ( ((empty($task['date_end']))? 0 :$task['date_end'])  - ((empty($task['date_start']))?0:$task['date_start']));
        ?>
    <?php endforeach; ?>
    <?php echo time_nice($count); ?>
    <?php break; ?>



<?php case 'build': ?>
    <?php foreach ($data as $task) : ?>
        <tr>
            <td><?= $task['name']; ?></td>
            <td><?= date_nice($task['date_start']); ?></td>
            <td><?= (($task['date_end'] != '') ? date_nice($task['date_end']) : ''); ?></td>
            <td>
                <?php
                if ($task['date_end'] == '') {
                    echo time_nice(time() - $task['date_start']);
                } else {
                    echo time_nice($task['date_end'] - $task['date_start']);
                }
                ?>
            </td>
            <td><button data-id="<?= $task['id']; ?>" class="btn btn-primary btn-stop"><?= i('stop'); ?></button></td>
            <td><button class="btn btn-danger"><?= i('times'); ?></button></td>
        </tr>
    <?php endforeach; ?>

    <?php break; ?>


<?php case '': ?>

    <?php break; ?>
<?php endswitch; ?>