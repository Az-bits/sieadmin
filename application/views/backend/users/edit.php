<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="row">
	<div class="col-lg-12">
		<?php echo form_open(current_url()); ?>
		<div class="row">
			<div class="col-md-4">
				<?php echo form_label('{lang_first_name}', 'first_name'); ?>
				<?php echo form_input($first_name); ?>
			</div>
			<div class="col-md-8">
				<?php echo form_label('{lang_last_name}', 'last_name'); ?>
				<?php echo form_input($last_name); ?>
			</div>
		</div>
		<div class="row mt-3">
			<div class="form-group col-lg-12">
				<?php echo form_label('{lang_company_name}', 'company'); ?>
				<?php echo form_input($company); ?>
			</div>
		</div>

		<div class="row">
			<div class="col-12 col-md-6">
				<?php echo form_label('{lang_email}', 'email'); ?>
				<?php echo form_input($email); ?>
			</div>
			<div class="col-12 col-md-6">
				<?php echo form_label('{lang_phone}', 'phone'); ?>
				<?php echo form_input($phone); ?>
			</div>
		</div>
		<div class="has-warning row mt-3">
			<div class="col-12 col-md-6">
				<?php echo form_label('{lang_password}', 'password'); ?>
				<?php echo form_input($password); ?>
				<div class="form-control-feedback">{lang_password_if_change}</div>
			</div>
			<div class="col-12 col-md-6">
				<?php echo form_label('{lang_password_confirm}', 'password_confirm'); ?>
				<?php echo form_input($password_confirm); ?>
				<div class="form-control-feedback">{lang_password_if_change}</div>
			</div>
		</div>

		<?php if ($this->ion_auth->is_admin()) : ?>
			<div class="form-group">
				<p><?php echo lang('edit_user_groups_heading'); ?></p>
				<?php foreach ($groups as $group) : ?>
					<div class="form-check form-check-inline">
						<label class="custom-control custom-checkbox">
							<?php
							$checked  = NULL;
							$disabled = NULL;
							$item     = NULL;

							foreach ($currentGroups as $grp) {
								if ($group['id'] == $grp->id) {
									$checked = ' checked';
								}

								if ($user_id == 1) {
									$disabled = ' disabled';
								}
							}
							?>
							<div class="form-check">
								<label class="form-check-label">
									<input <?php echo $checked . $disabled; ?> class="form-check-input" type="checkbox" name="groups[]" value="<?php echo $group['id']; ?>">
									<?php echo htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8'); ?>
									<span class="form-check-sign">
										<span class="check"></span>
									</span>
								</label>
							</div>
						</label>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
		<div class="form-group">
			<?php
			echo form_hidden('id', $user_id);
			echo form_hidden($csrf);
			echo form_submit('submit', '{lang_save}', array('class' => 'btn btn-primary'));
			echo anchor(base_url(Hasher::make(21)), '{lang_cancel}', array('class' => 'btn btn-primary'));
			?>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>

<div class="row">
	<div class="col-12">
		{message}
	</div>
</div>