<div class="modal hide hidden_remove" id="campaign_address_modal">
  <form class="ajax_form" action="<?php echo url_for('campaign_address', array('id' => $form->getObject()->getId())) ?>" method="post">
    <div class="modal-header">
      <a class="close" data-dismiss="modal">&times;</a>
      <h3>Edit Address</h3>
    </div>
    <div class="modal-body">
        <?php echo $form ?>
    </div>
    <div class="modal-footer">
      <a class="btn" data-dismiss="modal">Close</a>
      <button class="btn btn-primary" type="submit">Submit</button>
    </div>
  </form>
</div>