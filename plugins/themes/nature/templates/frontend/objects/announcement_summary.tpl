{**
 * templates/frontend/objects/announcement_summary.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Display a summary view of an announcement
 *
 * @uses $announcement Announcement The announcement to display
 * @uses $heading string HTML heading element, default: h2
 *}
{* {if !$heading}
	{assign var="heading" value="h2"}
{/if}

<article class="obj_announcement_summary">
	<{$heading}>
		<a href="{url router=$smarty.const.ROUTE_PAGE page="announcement" op="view" path=$announcement->getId()}">
			{$announcement->getLocalizedTitle()|escape}
		</a>
	</{$heading}>
	<div class="date">
		{$announcement->getDatePosted()|date_format:$dateFormatShort}
	</div>
	<div class="summary">
		{$announcement->getLocalizedDescriptionShort()|strip_unsafe_html}
		<a href="{url router=$smarty.const.ROUTE_PAGE page="announcement" op="view" path=$announcement->getId()}" class="read_more">
			<span aria-hidden="true" role="presentation">
				{translate key="common.readMore"}
			</span>
			<span class="pkp_screen_reader">
				{translate key="common.readMoreWithTitle" title=$announcement->getLocalizedTitle()|escape}
			</span>
		</a>
	</div>
</article><!-- .obj_announcement_summary --> *}

<article class="announcement-summary media">
	<div class="media-body">
		<h2 class="media-heading">
			<a href="{url router=$smarty.const.ROUTE_PAGE page="announcement" op="view" path=$announcement->getId()}">
				{$announcement->getLocalizedTitle()|escape}
			</a>
		</h2>
		<p class="date">
			<span class="fa fa-calendar"></span>
			{if ($journalVersion >= '33')}
				{$announcement->getDatePosted()|escape|date_format:$dateFormatLong}
			{else}
				{$announcement->getDatePosted()|escape|date_format:"%e %B %Y"}
			{/if}
		</p>
		
		<a href="{url router=$smarty.const.ROUTE_PAGE page="announcement" op="view" path=$announcement->getId()}">
			{$announcement->getLocalizedDescriptionShort()|strip_unsafe_html}
		</a>
	</div>
</article><!-- .announcement-summary -->

