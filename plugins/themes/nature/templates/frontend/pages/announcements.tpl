{**
 * templates/frontend/pages/announcements.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Display the page to view the latest announcements
 *
 * @uses $announcements array List of announcements
 *}
{include file="frontend/components/header.tpl" pageTitle="announcement.announcements"}

<div class="page page_announcements">
	{include file="frontend/components/breadcrumbs.tpl" currentTitleKey="announcement.announcements"}
	<h1 class="font-bold text-2xl">
		{translate key="announcement.announcements"}
	</h1>
	<hr class="my-5 w-full border-t-2 border-[#00504F]">
	{include file="frontend/components/editLink.tpl" page="management" op="settings" path="announcements" anchor="announcements" sectionTitleKey="announcement.announcements"}

	{$announcementsIntroduction}

	{include file="frontend/components/announcements.tpl"}
</div><!-- .page -->

{include file="frontend/components/footer.tpl"}
