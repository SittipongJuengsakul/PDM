    <div class="grid_3">
     <div class="da-panel-widget pdm-content">
      <h1>ข้อมูลพื้นฐาน</h1>
      <hr>
        <form id="ProfilePersonal" name="ProfilePersonal" method="post" class="da-form" action="<?php echo site_url('PDM/form_profile/submit_update_persons');?>">
        <div class="da-form-row">
         <div class="da-form-col-2-8">
          <label>คำนำหน้าชื่อ (ไทย)</label>
          <select name="prefixth">
          <?php foreach($prefix as $pf):?>
              <option value="<?php echo $pf->pref_id;?>"><?php echo $pf->pref_nameth;?></option>
          <?php endforeach;?>    
          </select>
         </div>
         <div class="da-form-col-3-8">
         <label>ชื่อ (ไทย)</label>
           <input type="text" value="<?php echo $dataUser[0]->pers_fname;?>" name="fnameth"/>
         </div>  
         <div class="da-form-col-3-8">
         <label>นามสกุล (ไทย)</label>
           <input type="text" value="<?php echo $dataUser[0]->pers_lname;?>" name="lnameth"/>
         </div>
        </div>
        <div class="da-form-row">
         <div class="da-form-col-2-8">
          <label>คำนำหน้าชื่อ (EN)</label>
           <select name="prefixen">
              <?php foreach($prefix as $pf):?>
              <option value="<?php echo $pf->pref_id;?>"><?php echo $pf->pref_nameen;?></option>
              <?php endforeach;?> 
          </select>  
         </div>
         <div class="da-form-col-3-8">
         <label>ชื่อ (EN)</label>
           <input type="text" value="<?php echo $dataUser[0]->pers_fnameen;?>" name="fnameen"/>
         </div>  
         <div class="da-form-col-3-8">
         <label>นามสกุล (EN)</label>
           <input type="text" value="<?php echo $dataUser[0]->pers_lnameen;?>" name="lnameen"/>
         </div>
        </div>
        <div class="da-form-row">
         <div class="da-form-col-4-8">
             <label>คณะที่สังกัด (Faculty)</label>
             <select name="facu">
              <?php foreach($fac as $fac):?>
              <option value="<?php echo $fac->fac_id;?>"><?php echo $fac->fac_faculty;?></option>
              <?php endforeach;?> 
             </select> 
         </div>
         <div class="da-form-col-4-8">
             <label>สาขาที่สังกัด (Major)</label>
             <select name="maju">
              <?php foreach($maj as $maj):?>
              <option value="<?php echo $maj->maj_id;?>"><?php echo $maj->maj_major;?></option>
              <?php endforeach;?> 
          </select> 
         </div>
        </div>
        <div class="da-form-row">
        <div class="da-form-col-5-8">
         <label>อีเมล์ (Email)  <img src="<?php echo base_url('images/icons/color/add.png');?>" title="เพิ่มอีเมล์ติดต่อ"></label>
         <input type="text" value="<?php echo $dataUser[0]->pers_email;?>" name="email"/>
        </div>
        <div class="da-form-col-3-8">
         <label>เบอร์โทรศัพท์ (Tel)  <img src="<?php echo base_url('images/icons/color/add.png');?>" title="เพิ่มเบอร์ติดต่อ"></label>
         <input type="text" value="<?php echo $dataUser[0]->pers_tel;?>" name="tel"/>
        </div>
        </div>
        <div class="da-button-row">
         <input type="submit" value="ตกลง" class="da-button green">
        </div>
        </form>
     </div>                                   
    </div>