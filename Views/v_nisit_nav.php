<!-- Navigator Area -->
     <div class="pdm-nav" style="margin-left:26%">
                <!--<a><?php echo $cur_date = date("Y-m-d");?></a>-->
                <a href="<?php echo site_url('PDM/PDM_main');?>"><button type="button" class="da-button gray large" value="Gray Button">หน้าหลัก</button></a>
                <a href="<?php echo site_url('PDM/form_profile');?>"><button type="button" class="da-button gray large" value="Gray Button">จัดการโครงงาน</button></a>
                <a href="<?php echo site_url('PDM/follow_project_std');?>"><button type="button" class="da-button gray large" value="Gray Button">ติดตามผลโครงงาน</button></a>
                <a href="<?php echo site_url('PDM/progess_project_std');?>"><button type="button" class="da-button gray large" value="Gray Button">รายงานความก้าวหน้า</button></a>
                <a href="<?php echo site_url('PDM/search_project');?>"><button type="button" class="da-button gray large" value="Gray Button">ค้นหาเอกสารโครงงาน</button></a>
                <a href="<?php echo site_url('PDM/calendar_show');?>"><button type="button" class="da-button gray large" value="Gray Button">ปฎิทินโครงงาน</button></a>
     </div>
     <script>
     /*
     $('#show_main_all').click(function(){
        $.ajax({
            url: "<?php echo site_url('PDM/PDM_main/index');?>",
            type: 'POST',
            success: function(response){
                $('#show_content').html(response);
            }
        })
    });
    $('#show_progess_std').click(function(){
        $.ajax({
            url: "<?php echo site_url('PDM/progess_project_std/index');?>",
            type: 'POST',
            success: function(response){
                $('#show_content').html(response);
            }
        })
    });
    $('#show_manage_std').click(function(){
        $.ajax({
            url: "<?php echo site_url('PDM/form_profile/index');?>",
            type: 'POST',
            success: function(response){
                $('#show_content').html(response);
            }
        })
    });
    $('#show_follow_std').click(function(){
        $.ajax({
            url: "<?php echo site_url('PDM/follow_project_std/index');?>",
            type: 'POST',
            success: function(response){
                $('#show_content').html(response);
            }
        })
    });
    $('#show_search_all').click(function(){
        $.ajax({
            url: "<?php echo site_url('PDM/search_project/index');?>",
            type: 'POST',
            success: function(response){
                $('#show_content').html(response);
            }
        })
    });
    $('#show_showcal_all').click(function(){
        $.ajax({
            url: "<?php echo site_url('PDM/calendar_show/index');?>",
            type: 'POST',
            success: function(response){
                $('#show_content').html(response);
            }
        });
        $.ajax({
            url: "<?php echo site_url('PDM/calendar_show/index');?>",
            type: 'POST',
            success: function(response){
                $('#show_content').html(response);
            }
        });
    });
    */
</script>
