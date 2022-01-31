<form class="form-horizontal" action="<?php echo site_url('lists'); ?>">
    <div class="control-group searchgroup">
      <div class="controls">
        <input id="search" name="search" type="text" placeholder="search" class="input-medium" value="<?php echo $this->input->get('search'); ?>" />
      </div>
    </div>
</form>
