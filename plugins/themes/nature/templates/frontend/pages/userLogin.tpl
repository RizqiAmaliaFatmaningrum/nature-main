{**
 * templates/frontend/pages/userLogin.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2000-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * User login form.
 *
 *}
{include file="frontend/components/header.tpl" pageTitle="user.login"}

<div class="page page_login">
	{include file="frontend/components/breadcrumbs.tpl" currentTitleKey="user.login"}
	<h1>
		{translate key="user.login"}
	</h1>

	{* A login message may be displayed if the user was redireceted to the
	   login page from another request. Examples include if login is required
	   before dowloading a file. *}
	{if $loginMessage}
		<p>
			{translate key=$loginMessage}
		</p>
	{/if}

	<form class="pkp_form login" id="login" method="post" action="{$loginUrl}">
		{csrf}

		{if $error}
			<div class="pkp_form_error">
				{translate key=$error reason=$reason}
			</div>
		{/if}

		<div class="form-group">
			<label for="login-username" class="inline font-normal font-bold">
				{translate key="user.username"}
			</label>
			<input type="text" name="username" class="form-control rounded-2xl w-10 h-10" id="login-username" placeholder="{translate key='user.username'}" value="{$username|escape}" maxlenght="32" required>
		</div>

		<div class="form-group">
			<label for="login-password" class="inline font-normal font-bold">
				{translate key="user.password"}
			</label>
			<input type="password" name="password" class="form-control rounded-2xl w-10 h-10" id="login-password" placeholder="{translate key='user.password'}" password="true" maxlength="32" required="$passwordRequired">
		</div>

		<button class="bg-[#006A68] text-[#FF8E06] rounded-3xl p-3 m-2">
			<div class="form-group">
				<a href="{url page="login" op="lostPassword"}">
					{translate key="user.login.forgotPassword"}
				</a>
			</div>
		</button>

		<div class="checkbox">
			<label>
				<input type="checkbox" name="remember" id="remember" value="1" checked="$remember"> {translate key="user.login.rememberUsernameAndPassword"}
			</label>
		</div>

		<button class="text-white bg-[#006A68] font-bold py-2 px-4 rounded-3xl ">
			{if !$disableUserReg}
				{capture assign=registerUrl}{url page="user" op="register" source=$source}{/capture}
				<a href="{$registerUrl}" role="button">
					{translate key="user.login.registerNewAccount"}
				</a>
			{/if}
		</button>
				
		<button class="bg-[#FF8E06] text-white font-bold py-2 px-4 rounded-3xl" type="submit">
				{translate key="user.login"}
		</button>

		<input type="hidden" name="source" value="{$source|default:""|escape}" />

		
	</form>
</div><!-- .page -->

{* {include file="frontend/components/footer.tpl"} *}
