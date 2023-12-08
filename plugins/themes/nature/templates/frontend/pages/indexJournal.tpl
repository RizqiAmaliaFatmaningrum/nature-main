{**
 * templates/frontend/pages/indexJournal.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Display the index page for a journal
 *
 * @uses $currentJournal Journal This journal
 * @uses $journalDescription string Journal description from HTML text editor
 * @uses $homepageImage object Image to be displayed on the homepage
 * @uses $additionalHomeContent string Arbitrary input from HTML text editor
 * @uses $announcements array List of announcements
 * @uses $numAnnouncementsHomepage int Number of announcements to display on the
 *       homepage
 * @uses $issue Issue Current issue
 *}
{include file="frontend/components/header.tpl" pageTitleTranslated=$currentJournal->getLocalizedName()}

<div class="page_index_journal">

	{call_hook name="Templates::Index::journal"}

	{if !$activeTheme->getOption('useHomepageImageAsHeader') && $homepageImage}
		<div class="homepage_image">
			<img src="{$publicFilesDir}/{$homepageImage.uploadName|escape:"url"}"{if $homepageImage.altText} alt="{$homepageImage.altText|escape}"{/if}>
		</div>
	{/if}

	{* Journal Description *}
	{* {if $journalDescription}
		<div class="journal-description">
			{$journalDescription}
		</div>
	{/if} *}
	{* {if $activeTheme->getOption('showDescriptionInJournalIndex')}
		<section class="homepage_about">
			<a id="homepageAbout"></a>
			<h2>{translate key="about.aboutContext"}</h2>
			{$currentContext->getLocalizedData('description')}
		</section>
	{/if} *}

	{* Announcements *}
	{if $numAnnouncementsHomepage && $announcements|@count}
		<section class="cmp_announcements highlight_first">
			<a id="homepageAnnouncements"></a>
			<h2>
				{translate key="announcement.announcements"}
			</h2>
			{foreach name=announcements from=$announcements item=announcement}
				{if $smarty.foreach.announcements.iteration > $numAnnouncementsHomepage}
					{break}
				{/if}
				{if $smarty.foreach.announcements.iteration == 1}
					{include file="frontend/objects/announcement_summary.tpl" heading="h3"}
					<div class="more">
				{else}
					<article class="obj_announcement_summary">
						<h4>
							<a href="{url router=$smarty.const.ROUTE_PAGE page="announcement" op="view" path=$announcement->getId()}">
								{$announcement->getLocalizedTitle()|escape}
							</a>
						</h4>
						<div class="date">
							{$announcement->getDatePosted()|date_format:$dateFormatShort}
						</div>
					</article>
				{/if}
			{/foreach}
			</div><!-- .more -->
		</section>
	{/if}

	{* Latest issue *}
	<div class="flex">
		<div class="flex-2 bg-[#00504F] text-white rounded-3xl p-2 m-2">
			{assign var=issueCover value=$issue->getLocalizedCoverImageUrl()}
			{if $issueCover}
				<a class="cover" href="{url op="view" page="issue" path=$issue->getBestIssueId()}">
					{capture assign="defaultAltText"}
						{translate key="issue.viewIssueIdentification" identification=$issue->getIssueIdentification()|escape}
					{/capture}
					<img src="{$issueCover|escape}" alt="{$issue->getLocalizedCoverImageAltText()|escape|default:$defaultAltText}" class="w-64 h-auto rounded-3xl">
				</a>
			{/if}
		</div>
		<div class="flex-1 bg-[#00504F] text-white rounded-3xl p-10 m-2">
			{if $issue}
				<section class="current_issue">
					<a id="homepageIssue"></a>
					<p class="font-bold text-2xl mt-0">
						{translate key="journal.currentIssue"}
					</p>
					<div class="current_issue_title">
						{$issue->getIssueIdentification()|strip_unsafe_html}
					</div>

					{* Description *}
					{if $issue->hasDescription()}
						<div class="description text-justify pb-6">
							{$issue->getLocalizedDescription()|strip_unsafe_html}
						</div>
					{/if}

					{* Published date *}
					{if $issue->getDatePublished()}
						<div class="published">
							{* <span class="label">
								{translate key="submissions.published"}:
							</span> *}
							<button class="bg-[#006A68] text-[#FF8E06] font-bold py-2 px-4 rounded-3xl">
								<span class="label">
									{translate key="submissions.published"}:
								</span>
								<span class="value">
									{$issue->getDatePublished()|date_format:$dateFormatShort}
								</span>
							</button>
							<button class="bg-[#FF8E06] text-white font-bold py-2 px-4 rounded-3xl">
								<a href="https://openjournaltheme.com/novelty-ojs3-theme" target="_blank" rel="noopener">Read More</a>
							</button>
							{* <span class="value">
								{$issue->getDatePublished()|date_format:$dateFormatShort}
							</span> *}
						</div>
					{/if}
				</section>
			{/if}
		</div>
	</div>
	{* Show issue toc *}
	{include file="frontend/objects/issue_toc.tpl" heading="h3"}
		<a href="{url router=$smarty.const.ROUTE_PAGE page="issue" op="archive"}" class="read_more">
			{translate key="journal.viewAllIssues"}
		</a>

	{* Additional Homepage Content *}
	{* {if $additionalHomeContent}
		<div class="additional_content">
			{$additionalHomeContent}
		</div>
	{/if} *}
</div><!-- .page -->

{include file="frontend/components/footer.tpl"}
