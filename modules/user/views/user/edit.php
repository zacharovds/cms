<?php defined('SYSPATH') OR die('No direct script access.'); ?>

<?php echo Form::open(Route::get('user')->uri($params), array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data')); ?>
    <?php include Kohana::find_file('views', 'errors/partial'); ?>

    <div class="control-group <?php echo isset($errors['name']) ? 'error': ''; ?>">
        <?php echo Form::label('name', __('Username'), array('class' => 'control-label')) ?>
        <div class="controls">
            <?php echo Form::input('name', $user->name, array('class' => 'input-large disabled', 'disabled')); ?>
            <p class="help-block"><?php echo __('Username for logging in can\'t be changed.') ?></p>
        </div>
    </div>

	<div class="control-group <?php echo isset($errors['nick']) ? 'error': ''; ?>">
		<?php echo Form::label('nick', __('Display Name'), array('class' => 'control-label')) ?>
        <div class="controls">
		    <?php echo Form::input('nick', $user->nick, array('class' => 'input-large')); ?>
        </div>
	</div>

	<div class="control-group <?php echo isset($errors['mail']) ? 'error': ''; ?>">
		<?php echo Form::label('mail', __('Mail'), array('class' => 'control-label')) ?>
        <div class="controls">
		    <?php echo Form::input('mail', $user->mail, array('class' => 'input-large')); ?>
        </div>
	</div>

	<div class="control-group <?php echo isset($errors['gender']) ? 'error': ''; ?>">
		<?php echo Form::label('gender', __('Gender'), array('class' => 'control-label')) ?>
		<div class="controls">
			<?php echo Form::label('gender1', Form::radio('gender', 1, $male).__('Male'), array('class' => 'radio')) ?>
		    <?php echo Form::label('gender2', Form::radio('gender', 2, $female).__('Female'), array('class' => 'radio')) ?>
        </div>
	</div>

	<div class="control-group <?php echo isset($errors['dob']) ? 'error': ''; ?>">
		<?php echo Form::label('dob', __('Birthday'), array('class' => 'control-label')) ?>
        <div class="controls">
            <?php echo Form::select('month', Date::months(Date::MONTHS_SHORT), date('n', $user->dob), array('class' => 'span1')); ?>
            <?php echo Form::select('days',  Date::days(Date::DAY), date('j', $user->dob), array('class' => 'span1')); ?>
            <?php echo Form::select('years', Date::years(date('Y') - 95,date('Y') - 5), date('Y', $user->dob), array('class' => 'input-small')); ?>
        </div>
	</div>

	<?php echo Form::submit('user_edit', __('Update Profile'), array('class' => 'btn btn-primary pull-right')) ?>
    <div class="clearfix"></div><br>
<?php echo Form::close() ?>
