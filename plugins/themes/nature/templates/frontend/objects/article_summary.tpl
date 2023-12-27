{**
 * templates/frontend/objects/article_summary.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief View of an Article summary which is shown within a list of articles.
 *
 * @uses $article Article The article
 * @uses $hasAccess bool Can this user access galleys for this context? The
 *       context may be an issue or an article
 * @uses $showDatePublished bool Show the date this article was published?
 * @uses $hideGalleys bool Hide the article galleys for this article?
 * @uses $primaryGenreIds array List of file genre ids for primary file types
 * @uses $heading string HTML heading element, default: h2
 *}
{assign var=articlePath value=$article->getBestId()}
{if !$heading}
	{assign var="heading" value="h2"}
{/if}

{if (!$section.hideAuthor && $article->getHideAuthor() == $smarty.const.AUTHOR_TOC_DEFAULT) || $article->getHideAuthor() == $smarty.const.AUTHOR_TOC_SHOW}
	{assign var="showAuthor" value=true}
{/if}

{assign var=publication value=$article->getCurrentPublication()}
<div class="">
	{* {if $publication->getLocalizedData('coverImage')}
		<div class="cover ">
			<a {if $journal}href="{url journal=$journal->getPath() page="article" op="view" path=$articlePath}"{else}href="{url page="article" op="view" path=$articlePath}"{/if} class="file">
				{assign var="coverImage" value=$article->getCurrentPublication()->getLocalizedData('coverImage')}
				<img class="h-64 w-full object-cover object-center mb-4 rounded-3xl"
					src="{$article->getCurrentPublication()->getLocalizedCoverImageUrl($article->getData('contextId'))|escape}"
					alt="{$coverImage.altText|escape|default:''}"
				>
			</a>
		</div>
	{/if} *}

	<{$heading} class="title">
		<a id="article-{$article->getId()}" {if $journal}href="{url journal=$journal->getPath() page="article" op="view" path=$articlePath}"{else}href="{url page="article" op="view" path=$articlePath}"{/if}>
			<span class="text-2xl font-bold">
			{$article->getLocalizedTitle()|strip_unsafe_html}
			</span>
			{if $article->getLocalizedSubtitle()}
				<span class="subtitle">
					{$article->getLocalizedSubtitle()|escape}
				</span>
			{/if}
		</a>
	</{$heading}>


	{if $showAuthor || $article->getPages()}
        {if $showAuthor && !$activeTheme->getOption('author_affiliation')}
          <div class="meta">
            {if $showAuthor}
              <div class="authors font-bold text-[#006A68] border-2 border-[#006A68] rounded-3xl px-4 mb-2">
                {$article->getAuthorString()|escape|truncate:100}
              </div>
            {/if}
          </div>
        {/if}
        {if $showAuthor && $activeTheme->getOption('author_affiliation') && $publication->getData('authors')}
			<div class="author">
				<span class="flex items-center authors ">
					<svg xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512" class="h-4 w-5">
						<path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
					</svg>
					{* <i class="fas fa-users fa-fw mr-1" aria-hidden="true"></i> *}
					{foreach from=$publication->getData('authors') item=author}
						
						<a class="text-decoration-none" href="{$journalUrl}search?authors={$author->getFullName()}">{$author->getFullName()}</a>
						{* <sup class="mr-1">({$author@iteration})</sup>{if $author@iteration !== $publication->getData('authors')|@count},{/if} *}
					{/foreach}
				</span>
				{foreach name=authors from=$publication->getData('authors') item=author}
				<div class="italic text-sm text-gray-600">
					({$author@iteration})
					<span class="" data-author-id="{$author->getId()}">
					{$author->getLocalizedData('affiliation')}</span>{if $author->getData('country')}<span
						class=""
						data-author-id="{$author->getId()}">,&nbsp;{$author->getCountryLocalized()}</span>{/if}{if not $smarty.foreach.authors.last}<span>,</span>{/if}
				</div>
				{/foreach}
			</div>
        {/if}

        <div class="row py-4">
            {if $enableDimensionCitation && !$hideDimensionsCitation}
				<div class="col-md-8 col-xs-6">
					{if $doi}
					<span class="__dimensions_badge_embed__" data-doi="{$doi}" data-style="large_rectangle"></span>
					{else}
					<small class="font-italic text-grey ">DOI record not available </small>
					{/if}
				</div>
            {/if}

            {if $article->getPages()}
				<div class="{if $enableDimensionCitation && !$hideDimensionsCitation}col-md-4 {else} col-md-12 {/if} col-xs-6 text-right page_number ">
					{* Page numbers for this article *}
					<span class="flex items-center">
					<svg class="icon line-color mr-2" width="14" height="14" id="file-search" data-name="line color"
					xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
					<path id="primary"
						d="M8,20H4a1,1,0,0,1-1-1V4A1,1,0,0,1,4,3h8.59a1,1,0,0,1,.7.29l3.42,3.42a1,1,0,0,1,.29.7V8"
						style="fill: none; stroke: rgb(101, 45, 144); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5;">
					</path>
					<path id="secondary" d="M17,17.6,21,21m-7-2a4,4,0,1,0-4-4A4,4,0,0,0,14,19Z"
						style="fill: none; stroke: rgb(246, 146, 30); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5;">
					</path>
					</svg>
					{$article->getPages()|escape}
					</span>
				</div>
            {/if}

            {if $enableStatistic}
				<div class="col-md-8 col-xs-12 article_statistic mt-3 px-0">
					<div class="col-md-7 col-xs-6 abstract_count pr-0">
					<span class="article_stat">
						<svg class="icon line-color" width="18" height="18" id="statistic-grow" data-name="Line Color"
						xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<line id="secondary" x1="3" y1="19" x2="21" y2="19"
							style="fill: none; stroke: rgb(246, 146, 30); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5;">
						</line>
						<path id="primary" d="M21,5l-7,7L8,9,3,15m18-5V5H16"
							style="fill: none; stroke: rgb(101, 45, 144); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5;">
						</path>
						</svg>
						{translate key="submission.abstractViews"} : {$article->getViews()}
					</span>
					</div>
					{if $article->getGalleys()}
					<div class="col-md-5 col-xs-6 pdf_count  text-right text-sm-left px-md-0">
						{assign var=totalDownloadGalley value=0}
						{foreach from=$article->getGalleys() item=galley}
						{assign var=totalDownloadGalley value=$galley->getViews()+$totalDownloadGalley }
						{/foreach}
						<svg class="icon line-color" width="15" height="15" id="down" data-name="Line Color"
						xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<line id="secondary" x1="12" y1="21" x2="12" y2="3"
							style="fill: none; stroke: rgb(246, 146, 30); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5;">
						</line>
						<polyline id="primary" points="19 14 12 21 5 14"
							style="fill: none; stroke: rgb(101, 45, 144); stroke-linecap: round; stroke-linejoin: round; stroke-width: 1.5;">
						</polyline>
						</svg>
						<span class="galley_stat"> {translate key="common.download"} :{$totalDownloadGalley} </span>
					</div>
					{/if}
				</div>
            {/if}


            <div class="{if $enableStatistic}col-md-4{else}col-md-12 {/if} col-xs-12 pl-0 text-right pr-0 pr-sm-1 pr-md-2">
				{if $doi}
					<div class="doi_container">
					{* <span class="doi_logo"> </span>				 *}
					<a href="https://www.doi.org/{$doi}" class="doi_link"> {$doi} </a>
					</div>
				{/if}
            </div>
        </div>
    {/if}

	{* {if $showAuthor || $article->getPages() || ($article->getDatePublished() && $showDatePublished)}
	<div class="meta">
		{if $showAuthor}
		<div class="authors">
			{$article->getAuthorString()|escape}
		</div>
		{/if} *}

		{* Page numbers for this article *}
		{* {if $article->getPages()}
			<div class="pages">
				{$article->getPages()|escape}
			</div>
		{/if}

		{if $showDatePublished && $article->getDatePublished()}
			<div class="published">
				{$article->getDatePublished()|date_format:$dateFormatShort}
			</div>
		{/if}

	</div>
	{/if} *}

	{* {if !$hideGalleys}
		<ul class="galleys_links">
			{foreach from=$article->getGalleys() item=galley}
				{if $primaryGenreIds}
					{assign var="file" value=$galley->getFile()}
					{if !$galley->getRemoteUrl() && !($file && in_array($file->getGenreId(), $primaryGenreIds))}
						{continue}
					{/if}
				{/if}
				<li>
					{assign var="hasArticleAccess" value=$hasAccess}
					{if $currentContext->getSetting('publishingMode') == $smarty.const.PUBLISHING_MODE_OPEN || $publication->getData('accessStatus') == $smarty.const.ARTICLE_ACCESS_OPEN}
						{assign var="hasArticleAccess" value=1}
					{/if}
					{include file="frontend/objects/galley_link.tpl" parent=$article labelledBy="article-{$article->getId()}" hasAccess=$hasArticleAccess purchaseFee=$currentJournal->getData('purchaseArticleFee') purchaseCurrency=$currentJournal->getData('currency')}
				</li>
			{/foreach}
		</ul>
	{/if}

	{call_hook name="Templates::Issue::Issue::Article"} *}
</div>


