<?php
    // show_array($list_users);
    echo $a;
    get_header();
?>
<div id="content">
    <h1>Danh sách thành viên</h1>
    <table>
        <thead>
            <tr>
                <td>STT</td>
                <td>Tên</td>
                <td>Tuổi</td>
                <td>Thu nhập</td>
            </tr>
        </thead>
        <tbody>
        
            <?php
            if(!empty($list_users)){
                $stt=0;
                foreach($list_users as $item){
                    $stt++;
            ?>
             <tr>
                <td></td>
                <td><?php echo $stt;?></td>
                <td><?php echo $item['fullname'];?></td>
                <td><?php echo $item['age'];?></td>
                <td><?php echo currency_format($item['earn'],' đồng');?></td>
            </tr>
               
     
        <?php
                 }
            }
        ?>
           
        </tbody>
    </table>
</div>
<?php
get_footer();
?>