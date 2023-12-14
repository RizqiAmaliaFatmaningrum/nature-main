{**
 * templates/frontend/pages/about.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Display the page to view a journal's or press's description, contact
 *  details, policies and more.
 *
 * @uses $currentContext Journal|Press The current journal or press
 *}
{include file="frontend/components/header.tpl" pageTitle="about.aboutContext"}

<div class="page page_about">
	{include file="frontend/components/breadcrumbs.tpl" currentTitleKey="about.aboutContext"}
	<h1 class="font-bold text-2xl">
		{translate key="about.aboutContext"}
	</h1>
	<hr class="my-5 w-full border-t-2 border-[#00504F]">
	{* {include file="frontend/components/editLink.tpl" page="management" op="settings" path="context" anchor="masthead" sectionTitleKey="about.aboutContext"} *}

	<div class="bg-[#ffffff] rounded-3xl p-2 m-2 shadow-lg">
	{$currentContext->getLocalizedData('about')}
	</div>
</div><!-- .page -->

{include file="frontend/components/footer.tpl"}

