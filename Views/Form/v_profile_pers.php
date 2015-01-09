   <?php echo $nav;echo $sidebar;?>
   <div id="show_content">
    <div class="grid_3">
     <div class="da-panel-widget pdm-content">
      <h1>ข้อมูลพื้นฐาน<input style="float:right;" type="button" value="แก้ไขข้อมูลพื้นฐาน" id="edit_profile" class="da-button gray"></h1>
      <hr>
        <form id="ProfilePersonal" name="ProfilePersonal" class="da-form">
        <div class="da-form-row">
         <div class="da-form-col-2-8">
          <label>คำนำหน้าชื่อ (ไทย)</label>
          <input type="text" disabled="disabled" value="<?php echo $dataUser[0]->pref_nameth;?>"/>
         </div>
         <div class="da-form-col-3-8">
         <label>ชื่อ (ไทย)</label>
           <input type="text" disabled="disabled" value="<?php echo $dataUser[0]->pers_fname;?>"/>
         </div>  
         <div class="da-form-col-3-8">
         <label>นามสกุล (ไทย)</label>
           <input type="text" disabled="disabled" value="<?php echo $dataUser[0]->pers_lname;?>"/>
         </div>
        </div>
        <div class="da-form-row">
         <div class="da-form-col-2-8">
          <label>คำนำหน้าชื่อ (EN)</label>
           <input type="text" disabled="disabled" value="<?php echo $dataUser[0]->pref_nameen;?>"/>
         </div>
         <div class="da-form-col-3-8">
         <label>ชื่อ (EN)</label>
           <input type="text" disabled="disabled" value="<?php echo $dataUser[0]->pers_fnameen;?>"/>
         </div>  
         <div class="da-form-col-3-8">
         <label>นามสกุล (EN)</label>
           <input type="text" disabled="disabled" value="<?php echo $dataUser[0]->pers_lnameen;?>"/>
         </div>
        </div>
        <div class="da-form-row">
         <div class="da-form-col-4-8">
             <label>คณะที่สังกัด (Faculty)</label>
             <input type="text" disabled="disabled" value="<?php echo $dataUser[0]->fac_faculty;?>"/>
         </div>
         <div class="da-form-col-4-8">
             <label>สาขาที่สังกัด (Major)</label>
             <input type="text" disabled="disabled" value="<?php echo $dataUser[0]->maj_major;?>"/>
         </div>
        </div>
        <div class="da-form-row">
         <div class="da-form-col-4-8">
             <label>อีเมล์ (Email)</label>
             <input type="text" disabled="disabled" value="<?php echo $dataUser[0]->pers_email;?>"/>
         </div>
         <div class="da-form-col-4-8">
             <label>เบอร์โทรศัพท์ (Tel)</label>
             <input type="text" disabled="disabled" value="<?php echo $dataUser[0]->pers_tel;?>"/>
         </div>
        </div>
        </form>
     </div>                                   
    </div>
    </div>
    <script>
     $('#edit_profile').click(function(){
      $.ajax({
        url: "<?php echo site_url('PDM/form_profile/edit_persons');?>",
        type: 'POST',
        success: function(response){
        $('#show_content').html(response);
        $("#show_content").hide().fadeIn(300);
        }
       })
      });
    </script>