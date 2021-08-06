<div class='d-flex flex-column text-center my-5'>
  <h2 class="mb-4">Add user</h2>
	<div class='align-middle text-center'>
		<?php
			echo $this->Form->create('Users', array('id' => 'userAddForm','inputDefaults' => array('class' => 'm-2 form-control')));
			echo $this->Form->input('username');
			echo $this->Form->input('email');
			echo $this->Form->input('f_name', array( 'label' => 'First name' ));
			echo $this->Form->input('l_name', array( 'label' => 'Last name' ));
			echo $this->Form->submit('Add user', array('class' => 'm-3 btn btn-success', 'title' => 'Add user'));
			echo $this->Form->end();
		?>
	</div>
</div>
