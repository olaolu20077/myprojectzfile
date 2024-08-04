<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User75z $user75z

 */
?>

<!--
<?php echo $this->layout = 'mygenerallaout'?>-->

<?php // In your view file $this->Html->script('bootstrap', ['block' => true]); $this->Html->script('bootstrap.bundle.min', ['block' => true]); $this->Html->script('bootstrap.min', ['block' => true]); $this->Html->script('jquery', ['block' => true]);  $this->Html->css('bootstrap.min', ['block' => true]);  $this->Html->css('appb', ['block' => true]); ?>

<div class="container-fluid">
<div class="row">

<!-- Example split button --> <div class="btn-group "> <button type="button" class="btn btn-success">Register as a user</button> </div></div> </div>





<option></option>







<?= $this->Form->create($user75z,['class' => 'needs-validation','enctype' => 'multipart/form-data']);?>



<?php echo $this->Form->hidden('_csrfToken', [
     'value' => $this->getRequest()->getAttribute('csrfToken')
]);?>


            
        <fieldset>      




<div class="col-md-4 mb-3" >
      <label for="validationCustomUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
       <div class="col-md-6"style="position:relative; right:0px; top:-24px;"<?php  echo $this->Form->control('usernami', ['label' => '','alt'=>'Myprojectz','class' => 'form-control','id' => 'validationCustomUsername','type' => 'text', 'placeholder' => 'Username','aria-describedby' => 'inputGroupPrepend','required' => false]);?></div>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
</div>
</div>








  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01"></label>
<?php  echo $this->Form->control('fonino', ['label' => 'Phone number','alt'=>'Myprojectz','class' => 'form-control','type' => 'text','id' => 'validationCustom01','placeholder' => '+1','required' => false]);?>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
</div>



 
 <div class="form-group">
    <label for="exampleFormControlInput1"></label>
    <?php  echo $this->Form->control('emali', ['label' => 'Email address','alt'=>'Myprojectz','class' => 'form-control','id' => 'exampleFormControlInput1','placeholder' => 'name@example.com','aria-describedby' => 'inputGroupPrepend','type' => 'email', 'required' => false]);?>
  </div>



<option></option>




<div class="form-group col-md-4">
<?php echo $this->Form->label('whatwantdescribe','Describe briefly about your background');?>
<?php echo $this->Form->textarea('whatwantdescribe', ['rows' => '2', 'cols' => '180', 'placeholder' => 'Allow your description to be brief and concise','escape' => false]);?>
</div> 



<option></option>




<div class="form-group">
    <label for="exampleFormControlFile1" >Upload your personal photo or documents (Please, the file dimension should not be more than 80 x 80 px) </label>
<?php echo $this->Form->file('myfoto',['class'=>'form-control-file','id'=>'exampleFormControlFile1','value'=>'']);?>
   </div>



<option></option>


<div class="form-group">
    <div class="form-check">
      <?php echo $this->Form->checkbox('agreeterms', ['value' => 1,'id' => 'invalidCheck','class' => 'form-check-input']);?>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
</fieldset>


 <?php echo $this->Form->submit('Submit form',['class' =>'btn btn-primary']);?>

 <?= $this->Form->end() ?>




<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

























 
