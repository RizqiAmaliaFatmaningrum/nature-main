{**
 * templates/frontend/pages/editorialTeam.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Display the page to view the editorial team.
 *
 * @uses $currentContext Journal|Press The current journal or press
 *}
{include file="frontend/components/header.tpl" pageTitle="about.editorialTeam"}

<div class="page page_editorial_team">
	{include file="frontend/components/breadcrumbs.tpl" currentTitleKey="about.editorialTeam"}
	<h1 class="font-bold text-2xl">
		{translate key="about.editorialTeam"}
	</h1>
	<hr class="my-5 w-full border-t-2 border-[#00504F]">
	{* {include file="frontend/components/editLink.tpl" page="management" op="settings" path="context" anchor="masthead" sectionTitleKey="about.editorialTeam"} *}
	{$currentContext->getLocalizedData('editorialTeam')}
</div><!-- .page -->

{include file="frontend/components/footer.tpl"}
