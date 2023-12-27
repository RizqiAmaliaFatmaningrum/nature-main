{**
 * templates/frontend/components/registrationForm.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Display the basic registration form fields
 *
 * @uses $locale string Locale key to use in the affiliate field
 * @uses $givenName string First name input entry if available
 * @uses $familyName string Last name input entry if available
 * @uses $countries array List of country options
 * @uses $country string The selected country if available
 * @uses $email string Email input entry if available
 * @uses $username string Username input entry if available
 *}
<fieldset class="identity">
	<p class="text-2xl font-bold">
		{translate key="user.profile"}
	</p>
	<hr class="my-3 w-full border-t-2 border-[#00504F]">

	<div class="fields">
		<div class="form-group given_name">
			<label>
				{translate key="user.givenName"}
				<span class="form-control-required">*</span>
				<span class="sr-only">{translate key="common.required"}</span>
				<input class="form-control rounded-2xl w-64 h-6 m-2" type="text" name="givenName" id="givenName" value="{$givenName|escape}" maxlength="255" required>
			</label>
		</div>
		<div class="form-group family_name">
			<label>
				{translate key="user.familyName"}
				<span class="form-control-required">*</span>
				<span class="sr-only">{translate key="common.required"}</span>
				<input class="form-control rounded-2xl w-64 h-6 m-2" type="text" name="familyName" id="familyName" value="{$familyName|escape}" maxlength="255" required>
			</label>
		</div>
		<div class="form-group affiliation">
			<label>
				{translate key="user.affiliation"}
				<span class="form-control-required">*</span>
				<span class="sr-only">{translate key="common.required"}</span>
				<input class="form-control rounded-2xl w-64 h-6 m-2" type="text" name="affiliation[{$primaryLocale|escape}]" id="affiliation" value="{$affiliation.$primaryLocale|escape}" required>
			</label>
		</div>
		<div class="form-group country">
			<label>
				{translate key="common.country"}
				<span class="form-control-required">*</span>
				<span class="sr-only">{translate key="common.required"}</span>
				<select class="form-control rounded-2xl w-64 h-6 m-2" name="country" id="country" required>
					<option></option>
					{html_options options=$countries selected=$country}
				</select>
			</label>
		</div>
	</div>
</fieldset>

<fieldset class="login">
	<legend class="text-lg font-bold">
		{translate key="user.login"}
	</legend>
	<div class="fields">
		<div class="form-group email">
			<label>
				{translate key="user.email"}
				<span class="form-control-required">*</span>
				<span class="sr-only">{translate key="common.required"}</span>
				<input class="form-control rounded-2xl w-64 h-6 m-2" type="text" name="email" id="email" value="{$email|escape}" maxlength="90" required>
			</label>
		</div>
		<div class="form-group username">
			<label>
				{translate key="user.username"}
				<span class="form-control-required">*</span>
				<span class="sr-only">{translate key="common.required"}</span>
				<input class="form-control rounded-2xl w-64 h-6 m-2" type="text" name="username" id="username" value="{$username|escape}" maxlength="32" required>
			</label>
		</div>
		<div class="form-group password">
			<label>
				{translate key="user.password"}
				<span class="form-control-required">*</span>
				<span class="sr-only">{translate key="common.required"}</span>
				<input class="form-control rounded-2xl w-64 h-6 m-2" type="password" name="password" id="password" password="true" maxlength="32" required>
			</label>
		</div>
		<div class="form-group password">
			<label>
				{translate key="user.repeatPassword"}
				<span class="form-control-required">*</span>
				<span class="sr-only">{translate key="common.required"}</span>
				<input class="form-control rounded-2xl w-64 h-6 m-2" type="password" name="password2" id="password2" password="true" maxlength="32" required>
			</label>
		</div>
	</div>
</fieldset>


	{* <div class="fields">
		<div class="given_name">
			<label>
				<span class="label">
					{translate key="user.givenName"}
					<span class="required" aria-hidden="true">*</span>
					<span class="pkp_screen_reader">
						{translate key="common.required"}
					</span>
				</span>
				<input type="text" name="givenName" autocomplete="given-name" id="givenName" value="{$givenName|default:""|escape}" maxlength="255" required aria-required="true">
			</label>
		</div>
		<div class="family_name">
			<label>
				<span class="label">
					{translate key="user.familyName"}
				</span>
				<input type="text" name="familyName" autocomplete="family-name" id="familyName" value="{$familyName|default:""|escape}" maxlength="255">
			</label>
		</div>
		<div class="affiliation">
			<label>
				<span class="label">
					{translate key="user.affiliation"}
					<span class="required" aria-hidden="true">*</span>
					<span class="pkp_screen_reader">
						{translate key="common.required"}
					</span>
				</span>
				<input type="text" name="affiliation" id="affiliation" value="{$affiliation|default:""|escape}" required aria-required="true">
			</label>
		</div>
		<div class="country">
			<label>
				<span class="label">
					{translate key="common.country"}
					<span class="required" aria-hidden="true">*</span>
					<span class="pkp_screen_reader">
						{translate key="common.required"}
					</span>
				</span>
				<select name="country" id="country" required aria-required="true">
					<option></option>
					{html_options options=$countries selected=$country}
				</select>
			</label>
		</div>
	</div>
</fieldset>

<fieldset class="login">
	<legend>
		{translate key="user.login"}
	</legend>
	<div class="fields">
		<div class="email">
			<label>
				<span class="label">
					{translate key="user.email"}
					<span class="required" aria-hidden="true">*</span>
					<span class="pkp_screen_reader">
						{translate key="common.required"}
					</span>
				</span>
				<input type="email" name="email" id="email" value="{$email|default:""|escape}" maxlength="90" required aria-required="true" autocomplete="email">
			</label>
		</div>
		<div class="username">
			<label>
				<span class="label">
					{translate key="user.username"}
					<span class="required" aria-hidden="true">*</span>
					<span class="pkp_screen_reader">
						{translate key="common.required"}
					</span>
				</span>
				<input type="text" name="username" id="username" value="{$username|default:""|escape}" maxlength="32" required aria-required="true" autocomplete="username">
			</label>
		</div>
		<div class="password">
			<label>
				<span class="label">
					{translate key="user.password"}
					<span class="required" aria-hidden="true">*</span>
					<span class="pkp_screen_reader">
						{translate key="common.required"}
					</span>
				</span>
				<input type="password" name="password" id="password" password="true" maxlength="32" required aria-required="true">
			</label>
		</div>
		<div class="password">
			<label>
				<span class="label">
					{translate key="user.repeatPassword"}
					<span class="required" aria-hidden="true">*</span>
					<span class="pkp_screen_reader">
						{translate key="common.required"}
					</span>
				</span>
				<input type="password" name="password2" id="password2" password="true" maxlength="32" required aria-required="true">
			</label>
		</div>
	</div>
</fieldset> *}
