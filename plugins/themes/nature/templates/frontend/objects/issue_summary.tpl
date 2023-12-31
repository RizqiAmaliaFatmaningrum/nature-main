{**
 * templates/frontend/objects/issue_summary.tpl
 *
 * Copyright (c) 2020 OpenJournalTheme Team
 * Copyright (c) https://openjournaltheme.com
 * Read this term of use of this theme here : https://openjournaltheme.com/term-of-conditions/
 *
 *
 *
 * @brief View of an Issue which displays a summary for use in lists
 *
 * @uses $issue Issue The issue
 *}
 {* <div class="issue-summary media"> *}

 {* Retrieve separate entries for $issueTitle and $issueSeries *}
 {assign var=issueTitle value=$issue->getLocalizedTitle()}
 {assign var=issueSeries value=$issue->getIssueSeries()}

 {* Show cover image and use cover description *}
<div class="flex flex-wrap">
 <div class="w-80 h-80 bg-white rounded-3xl p-4 m-2">
	{if $issue->getLocalizedCoverImage()}
		<div class="media-left">
			<a class="cover" href="{url|escape op="view" path=$issue->getBestIssueId($currentJournal)}">
				<img class="media-object w-48 h-32 rounded-3xl items-center" src="{$issue->getLocalizedCoverImageUrl()|escape}">
			</a>
		</div>
	{/if}

	<div class="media-body">
		<h2 class="media-heading">
			<a class="title" href="{url|escape op="view" path=$issue->getBestIssueId($currentJournal)}">
				{if $issueTitle}
					{$issueTitle|escape}
				{else}
					{$issueSeries|escape}
				{/if}
			</a>
			{if $issueTitle}
				<div class="series lead">
					{$issueSeries|escape}
				</div>
			{/if}
		</h2>
		<div class="description">
			{$issueDescription|strip_unsafe_html|nl2br}
		</div>
	</div>
 </div>
</div>
{* </div><!-- .issue-summary --> *}
