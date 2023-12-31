{**
 * templates/frontend/pages/privacy.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Display the page to view the privacy policy.
 *
 * @uses $currentContext Journal|Press The current journal or press
 *}
{include file="frontend/components/header.tpl" pageTitle="manager.setup.privacyStatement"}

<div class="page page_privacy">
	{include file="frontend/components/breadcrumbs.tpl" currentTitleKey="manager.setup.privacyStatement"}
	<h1 class="font-bold text-2xl">
		{translate key="manager.setup.privacyStatement"}
	</h1>
	<hr class="my-5 w-full border-t-2 border-[#00504F]">
	{$privacyStatement}
</div><!-- .page -->

{include file="frontend/components/footer.tpl"}
