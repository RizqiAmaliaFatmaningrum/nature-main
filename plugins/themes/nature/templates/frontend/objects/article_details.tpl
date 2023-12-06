{**
* templates/frontend/objects/article_details.tpl
*
* Copyright (c) 2014-2021 Simon Fraser University
* Copyright (c) 2003-2021 John Willinsky
* Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
*
* @brief View of an Article which displays all details about the article.
* Expected to be primary object on the page.
*
* Many journals will want to add custom data to this object, either through
* plugins which attach to hooks on the page or by editing the template
* themselves. In order to facilitate this, a flexible layout markup pattern has
* been implemented. If followed, plugins and other content can provide markup
* in a way that will render consistently with other items on the page. This
* pattern is used in the .main_entry column and the .entry_details column. It
* consists of the following:
*
* <!-- Wrapper class which provides proper spacing between components -->
* <div class="item">
    * <!-- Title/value combination -->
    * <div class="label">Abstract</div>
    * <div class="value">Value</div>
    * </div>
*
* All styling should be applied by class name, so that titles may use heading
* elements (eg, <h3>) or any element required.
    *
    * <!-- Example: component with multiple title/value combinations -->
    * <div class="item">
        * <div class="sub_item">
            * <div class="label">DOI</div>
            * <div class="value">12345678</div>
            * </div>
        * <div class="sub_item">
            * <div class="label">Published Date</div>
            * <div class="value">2015-01-01</div>
            * </div>
        * </div>
    *
    * <!-- Example: component with no title -->
    * <div class="item">
        * <div class="value">Whatever you'd like</div>
        * </div>
    *
    * Core components are produced manually below, but can also be added via
    * plugins using the hooks provided:
    *
    * Templates::Article::Main
    * Templates::Article::Details
    *
    * @uses $article Submission This article
    * @uses $publication Publication The publication being displayed
    * @uses $firstPublication Publication The first published version of this article
    * @uses $currentPublication Publication The most recently published version of this article
    * @uses $issue Issue The issue this article is assigned to
    * @uses $section Section The journal section this article is assigned to
    * @uses $categories Category The category this article is assigned to
    * @uses $primaryGalleys array List of article galleys that are not supplementary or dependent
    * @uses $supplementaryGalleys array List of article galleys that are supplementary
    * @uses $keywords array List of keywords assigned to this article
    * @uses $pubIdPlugins Array of pubId plugins which this article may be assigned
    * @uses $licenseTerms string License terms.
    * @uses $licenseUrl string URL to license. Only assigned if license should be
    * included with published submissions.
    * @uses $ccLicenseBadge string An image and text with details about the license
    *}
    {if !$heading}
    {assign var="heading" value="h3"}
    {/if}
    <article class="obj_article_details">
        {* Indicate if this is only a preview *}
        {if $publication->getData('status') !== $smarty.const.STATUS_PUBLISHED}
        <div class="cmp_notification notice">
            {capture assign="submissionUrl"}{url page="workflow" op="access" path=$article->getId()}{/capture}
            {translate key="submission.viewingPreview" url=$submissionUrl}
        </div>
        {* Notification that this is an old version *}
        {elseif $currentPublication->getId() !== $publication->getId()}
        <div class="cmp_notification notice">
            {capture assign="latestVersionUrl"}{url page="article" op="view" path=$article->getBestId()}{/capture}
            {translate key="submission.outdatedVersion"
            datePublished=$publication->getData('datePublished')|date_format:$dateFormatShort
            urlRecentVersion=$latestVersionUrl|escape
            }
        </div>
        {/if}

        <h1 class="page_title">
            {$publication->getLocalizedTitle()|escape}
        </h1>

        {* galleys *}
        <div class="flex-2">
            <div class="w-30 h-20 bg-[#F4FEFD] rounded-2xl flex p-4 m-2" style="width: 200px; height: 80px;">
                <h1 class="text-lg m-auto text-[#00504F] font-bold pr-12">Galleys</h1>
                <div class="w-10 h-10 bg-[#00504F] rounded-full flex ">
                    <a href="#" class="text-lg m-auto text-white"><svg xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 17.25L12 21m0 0l-3.75-3.75M12 21V3" />
                        </svg>

                    </a>
                </div>
            </div>
        </div>

        {* publised *}
        {if $publication->getData('datePublished')}
        <div class="item published">
            <section class="sub_item bg-[#F4FEFD] rounded-2xl text-[#00504F] flex flex-col pl-5"
                style="width: 300px; height: 80px;">
                <h2 class="label ">
                    {translate key="submissions.published"}
                </h2>
                <div class="value">
                    {* If this is the original version *}
                    {if $firstPublication->getID() === $publication->getId()}
                    <span>{$firstPublication->getData('datePublished')|date_format:$dateFormatShort}</span>
                    {* If this is an updated version *}
                    {else}
                    <span>{translate key="submission.updatedOn"
                        datePublished=$firstPublication->getData('datePublished')|date_format:$dateFormatShort
                        dateUpdated=$publication->getData('datePublished')|date_format:$dateFormatShort}</span>
                    {/if}
                </div>
            </section>
            {if count($article->getPublishedPublications()) > 1}
            <section class="sub_item versions">
                <h2 class="label">
                    {translate key="submission.versions"}
                </h2>
                <ul class="value">
                    {foreach from=array_reverse($article->getPublishedPublications()) item=iPublication}
                    {capture assign="name"}{translate key="submission.versionIdentity"
                    datePublished=$iPublication->getData('datePublished')|date_format:$dateFormatShort
                    version=$iPublication->getData('version')}{/capture}
                    <li>
                        {if $iPublication->getId() === $publication->getId()}
                        {$name}
                        {elseif $iPublication->getId() === $currentPublication->getId()}
                        <a href="{url page="article" op="view" path=$article->getBestId()}">{$name}</a>
                        {else}
                        <a href="{url page="article" op="view"
                            path=$article->getBestId()|to_array:"version":$iPublication->getId()}">{$name}</a>
                        {/if}
                    </li>
                    {/foreach}
                </ul>
            </section>
            {/if}
        </div>
        {/if}

        {* issue *}
        {if $issue || $section || $categories}
        <div class="item issue">

            {if $issue}
            <section class="sub_item bg-[#F4FEFD] rounded-2xl text-[#00504F] flex flex-col pl-5"
                style="width: 300px; height: 80px;">
                <h2 class="label">
                    {translate key="issue.issue"}
                </h2>
                <div class="value inline-block bg-[#00504F] text-white rounded-2xl text-white px-4" style="width: 280px;">
                    <a class="title" href="{url page="issue" op="view" path=$issue->getBestIssueId()}">
                        {$issue->getIssueIdentification()}
                    </a>
                </div>
            </section>
            {/if}

            {if $section}
            <section class="sub_item bg-[#F4FEFD] rounded-2xl text-[#00504F] flex flex-col pl-5 "
                style="width: 300px; height: 80px;">
                <h2 class="label">
                    {translate key="section.section"}
                </h2>
                <div class="value inline-block bg-[#00504F] rounded-2xl text-white px-4" style="width: 230px;">
                    {$section->getLocalizedTitle()|escape}
                </div>
            </section>
            {/if}

            {if $categories}
            <section class="sub_item">
                <h2 class="label">
                    {translate key="category.category"}
                </h2>
                <div class="value">
                    <ul class="categories">
                        {foreach from=$categories item=category}
                        <li><a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="category"
                                path=$category->getPath()|escape}">{$category->getLocalizedTitle()|escape}</a>
                        </li>
                        {/foreach}
                    </ul>
                </div>
            </section>
            {/if}
        </div>
        {/if}

        {if $publication->getLocalizedData('coverImage') || ($issue && $issue->getLocalizedCoverImage())}
        <div class="item cover_image">
            <div class="sub_item">
                {if $publication->getLocalizedData('coverImage')}
                {assign var="coverImage" value=$publication->getLocalizedData('coverImage')}
                <img src="{$publication->getLocalizedCoverImageUrl($article->getData('contextId'))|escape}"
                    alt="{$coverImage.altText|escape|default:''}" style="width: 400px; height: auto;"
                    class="mx-auto border rounded-lg">
                <ul class="flex space-x-4 mt-6 mb-0 justify-center text-teal-800 font-bold">
                    <li>
                        <section class="label flex hover:bg-[#6FF7F429] border-solid">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7.5 3.75H6A2.25 2.25 0 003.75 6v1.5M16.5 3.75H18A2.25 2.25 0 0120.25 6v1.5m0 9V18A2.25 2.25 0 0118 20.25h-1.5m-9 0H6A2.25 2.25 0 013.75 18v-1.5M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <h2 class="label">
                                <a href="#">{translate key="article.abstract"}</a>
                            </h2>
                        </section>
                    </li>
                    <li>
                        <section class="sub_item citation_display flex hover:bg-[#6FF7F429]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 01-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a3.375 3.375 0 00-3.375-3.375H9.75" />
                            </svg>
                            <h2 class="label">
                                <a href="#">{translate key="submission.howToCite"}</a>
                            </h2>
                        </section>
                    </li>
                    <li>
                        <section class="sub_item flex hover:bg-[#6FF7F429]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                            </svg>
                            <h2 class="label">
                                <a href="#">Matrics</a>
                            </h2>
                        </section>
                    </li>
                    <li>
                        <section class="sub_item flex hover:bg-[#6FF7F429]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                            </svg>
                            <h2 class="label">
                                <a href="#">References</a>
                            </h2>
                        </section>
                    </li>
                </ul>
                {else}
                <a href="{url page="issue" op="view" path=$issue->getBestIssueId()}">
                    <img src="{$issue->getLocalizedCoverImageUrl()|escape}"
                        alt="{$issue->getLocalizedCoverImageAltText()|escape|default:''}">
                </a>
                {/if}
            </div>
        </div>
        {* *}
        <div class="container mx-md">
            <div class="bg-[#00504F] text-white rounded-2xl"
                style="max-width: 700px; margin: 0 auto; display: flex; align-items: center; text-align: justify;">
                {if $publication->getLocalizedData('abstract')}
                <section class="item abstract">
                    {$publication->getLocalizedData('abstract')|strip_unsafe_html}
                </section>
                {/if}
            </div>

            {* preview pdf *}
            <iframe class="mt-2 rounded-2xl" style="display: block; margin: 0 auto;"
                src="http://localhost/nature-main1/index.php/MS/article/view/3/3" width="700px"
                height="900px"></iframe>


        </div>
        {/if}
        {*
        {if $publication->getLocalizedData('subtitle')}
        <h2 class="subtitle">
            {$publication->getLocalizedData('subtitle')|escape}
        </h2>
        {/if} *}

        {* <div class="row">
            <div class="main_entry">

                {if $publication->getData('authors')}
                <section class="item authors">
                    <h2 class="pkp_screen_reader">{translate key="article.authors"}</h2>
                    <ul class="authors">
                        {foreach from=$publication->getData('authors') item=author}
                        <li>
                            <span class="name">
                                {$author->getFullName()|escape}
                            </span>
                            {if $author->getLocalizedData('affiliation')}
                            <span class="affiliation">
                                {$author->getLocalizedData('affiliation')|escape}
                                {if $author->getData('rorId')}
                                <a href="{$author->getData('rorId')|escape}">{$rorIdIcon}</a>
                                {/if}
                            </span>
                            {/if}
                            {if $author->getData('orcid')}
                            <span class="orcid">
                                {$orcidIcon}
                                <a href="{$author->getData('orcid')|escape}" target="_blank">
                                    {$author->getData('orcid')|escape}
                                </a>
                            </span>
                            {/if}
                        </li>
                        {/foreach}
                    </ul>
                </section>
                {/if} *}

                {* DOI (requires plugin) *}
                {* {foreach from=$pubIdPlugins item=pubIdPlugin}
                {if $pubIdPlugin->getPubIdType() != 'doi'}
                {continue}
                {/if}
                {assign var=pubId value=$article->getStoredPubId($pubIdPlugin->getPubIdType())}
                {if $pubId}
                {assign var="doiUrl" value=$pubIdPlugin->getResolvingURL($currentJournal->getId(), $pubId)|escape}
                <section class="item doi">
                    <h2 class="label">
                        {capture assign=translatedDOI}{translate key="plugins.pubIds.doi.readerDisplayName"}{/capture}
                        {translate key="semicolon" label=$translatedDOI}
                    </h2>
                    <span class="value">
                        <a href="{$doiUrl}">
                            {$doiUrl}
                        </a>
                    </span>
                </section>
                {/if}
                {/foreach} *}

                {* Keywords *}
                {* {if !empty($publication->getLocalizedData('keywords'))}
                <section class="item keywords">
                    <h2 class="label">
                        {capture assign=translatedKeywords}{translate key="article.subject"}{/capture}
                        {translate key="semicolon" label=$translatedKeywords}
                    </h2>
                    <span class="value">
                        {foreach name="keywords" from=$publication->getLocalizedData('keywords') item="keyword"}
                        {$keyword|escape}{if !$smarty.foreach.keywords.last}{translate
                        key="common.commaListSeparator"}{/if}
                        {/foreach}
                    </span>
                </section>
                {/if} *}

                {* Abstract *}
                {* {if $publication->getLocalizedData('abstract')}
                <section class="item abstract">
                    <h2 class="label">{translate key="article.abstract"}</h2>
                    {$publication->getLocalizedData('abstract')|strip_unsafe_html}
                </section>
                {/if}

                {call_hook name="Templates::Article::Main"} *}

                {* Author biographies
                {assign var="hasBiographies" value=0}
                {foreach from=$publication->getData('authors') item=author}
                {if $author->getLocalizedData('biography')}
                {assign var="hasBiographies" value=$hasBiographies+1}
                {/if}
                {/foreach}
                {if $hasBiographies}
                <section class="item author_bios">
                    <h2 class="label">
                        {if $hasBiographies > 1}
                        {translate key="submission.authorBiographies"}
                        {else}
                        {translate key="submission.authorBiography"}
                        {/if}
                    </h2>
                    {foreach from=$publication->getData('authors') item=author}
                    {if $author->getLocalizedData('biography')}
                    <section class="sub_item">
                        <h3 class="label">
                            {if $author->getLocalizedData('affiliation')}
                            {capture assign="authorName"}{$author->getFullName()|escape}{/capture}
                            {capture assign="authorAffiliation"}<span
                                class="affiliation">{$author->getLocalizedData('affiliation')|escape}</span>{/capture}
                            {translate key="submission.authorWithAffiliation" name=$authorName
                            affiliation=$authorAffiliation}
                            {else}
                            {$author->getFullName()|escape}
                            {/if}
                        </h3>
                        <div class="value">
                            {$author->getLocalizedData('biography')|strip_unsafe_html}
                        </div>
                    </section>
                    {/if}
                    {/foreach}
                </section>
                {/if} *}

                {* References *}
                {* {if $parsedCitations || $publication->getData('citationsRaw')}
                <section class="item references">
                    <h2 class="label">
                        {translate key="submission.citations"}
                    </h2>
                    <div class="value">
                        {if $parsedCitations}
                        {foreach from=$parsedCitations item="parsedCitation"}
                        <p>{$parsedCitation->getCitationWithLinks()|strip_unsafe_html}
                            {call_hook name="Templates::Article::Details::Reference" citation=$parsedCitation}</p>
                        {/foreach}
                        {else}
                        {$publication->getData('citationsRaw')|escape|nl2br}
                        {/if}
                    </div>
                </section>
                {/if}

            </div><!-- .main_entry --> *}
            {*
            <div class="entry_details"> *}

                {* Article/Issue cover image *}
                {* {if $publication->getLocalizedData('coverImage') || ($issue && $issue->getLocalizedCoverImage())}
                <div class="item cover_image">
                    <div class="sub_item">
                        {if $publication->getLocalizedData('coverImage')}
                        {assign var="coverImage" value=$publication->getLocalizedData('coverImage')}
                        <img src="{$publication->getLocalizedCoverImageUrl($article->getData('contextId'))|escape}"
                            alt="{$coverImage.altText|escape|default:''}">
                        {else}
                        <a href="{url page="issue" op="view" path=$issue->getBestIssueId()}">
                            <img src="{$issue->getLocalizedCoverImageUrl()|escape}"
                                alt="{$issue->getLocalizedCoverImageAltText()|escape|default:''}">
                        </a>
                        {/if}
                    </div>
                </div>
                {/if} *}
                {* Article Galleys *}
                {* {if $primaryGalleys}
                <div class="item galleys">
                    <h2 class="pkp_screen_reader">
                        {translate key="submission.downloads"}
                    </h2>
                    <ul class="value galleys_links">
                        {foreach from=$primaryGalleys item=galley}
                        <li>
                            {include file="frontend/objects/galley_link.tpl" parent=$article publication=$publication
                            galley=$galley purchaseFee=$currentJournal->getData('purchaseArticleFee')
                            purchaseCurrency=$currentJournal->getData('currency')}
                        </li>
                        {/foreach}
                    </ul>
                </div>
                {/if}
                {if $supplementaryGalleys}
                <div class="item galleys">
                    <h3 class="pkp_screen_reader">
                        {translate key="submission.additionalFiles"}
                    </h3>
                    <ul class="value supplementary_galleys_links">
                        {foreach from=$supplementaryGalleys item=galley}
                        <li>
                            {include file="frontend/objects/galley_link.tpl" parent=$article publication=$publication
                            galley=$galley isSupplementary="1"}
                        </li>
                        {/foreach}
                    </ul>
                </div>
                {/if}

                {if $publication->getData('datePublished')}
                <div class="item published">
                    <section class="sub_item">
                        <h2 class="label">
                            {translate key="submissions.published"}
                        </h2>
                        <div class="value"> *}
                            {* If this is the original version *}
                            {* {if $firstPublication->getID() === $publication->getId()}
                            <span>{$firstPublication->getData('datePublished')|date_format:$dateFormatShort}</span> *}
                            {* If this is an updated version *}
                            {* {else}
                            <span>{translate key="submission.updatedOn"
                                datePublished=$firstPublication->getData('datePublished')|date_format:$dateFormatShort
                                dateUpdated=$publication->getData('datePublished')|date_format:$dateFormatShort}</span>
                            {/if}
                        </div>
                    </section>
                    {if count($article->getPublishedPublications()) > 1}
                    <section class="sub_item versions">
                        <h2 class="label">
                            {translate key="submission.versions"}
                        </h2>
                        <ul class="value">
                            {foreach from=array_reverse($article->getPublishedPublications()) item=iPublication}
                            {capture assign="name"}{translate key="submission.versionIdentity"
                            datePublished=$iPublication->getData('datePublished')|date_format:$dateFormatShort
                            version=$iPublication->getData('version')}{/capture}
                            <li>
                                {if $iPublication->getId() === $publication->getId()}
                                {$name}
                                {elseif $iPublication->getId() === $currentPublication->getId()}
                                <a href="{url page="article" op="view" path=$article->getBestId()}">{$name}</a>
                                {else}
                                <a href="{url page="article" op="view"
                                    path=$article->getBestId()|to_array:"version":$iPublication->getId()}">{$name}</a>
                                {/if}
                            </li>
                            {/foreach}
                        </ul>
                    </section>
                    {/if}
                </div>
                {/if} *}

                {* How to cite *}
                {* {if $citation}
                <div class="item citation">
                    <section class="sub_item citation_display">
                        <h2 class="label">
                            {translate key="submission.howToCite"}
                        </h2>
                        <div class="value">
                            <div id="citationOutimageput" role="region" aria-live="polite">
                                {$citation}
                            </div>
                            <div class="citation_formats">
                                <button class="cmp_button citation_formats_button" aria-controls="cslCitationFormats"
                                    aria-expanded="false" data-csl-dropdown="true">
                                    {translate key="submission.howToCite.citationFormats"}
                                </button>
                                <div id="cslCitationFormats" class="citation_formats_list" aria-hidden="true">
                                    <ul class="citation_formats_styles">
                                        {foreach from=$citationStyles item="citationStyle"}
                                        <li>
                                            <a aria-controls="citationOutput" href="{url page="citationstylelanguage"
                                                op="get" path=$citationStyle.id params=$citationArgs}"
                                                data-load-citation data-json-href="{url page="citationstylelanguage"
                                                op="get" path=$citationStyle.id params=$citationArgsJson}">
                                                {$citationStyle.title|escape}
                                            </a>
                                        </li>
                                        {/foreach}
                                    </ul>
                                    {if count($citationDownloads)}
                                    <div class="label">
                                        {translate key="submission.howToCite.downloadCitation"}
                                    </div>
                                    <ul class="citation_formats_styles">
                                        {foreach from=$citationDownloads item="citationDownload"}
                                        <li>
                                            <a href="{url page="citationstylelanguage" op="download"
                                                path=$citationDownload.id params=$citationArgs}">
                                                <span class="fa fa-download"></span>
                                                {$citationDownload.title|escape}
                                            </a>
                                        </li>
                                        {/foreach}
                                    </ul>
                                    {/if}
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                {/if} *}

                {* Issue article appears in *}
                {* {if $issue || $section || $categories}
                <div class="item issue">

                    {if $issue}
                    <section class="sub_item">
                        <h2 class="label">
                            {translate key="issue.issue"}
                        </h2>
                        <div class="value">
                            <a class="title" href="{url page="issue" op="view" path=$issue->getBestIssueId()}">
                                {$issue->getIssueIdentification()}
                            </a>
                        </div>
                    </section>
                    {/if}

                    {if $section}
                    <section class="sub_item">
                        <h2 class="label">
                            {translate key="section.section"}
                        </h2>
                        <div class="value">
                            {$section->getLocalizedTitle()|escape}
                        </div>
                    </section>
                    {/if}

                    {if $categories}
                    <section class="sub_item">
                        <h2 class="label">
                            {translate key="category.category"}
                        </h2>
                        <div class="value">
                            <ul class="categories">
                                {foreach from=$categories item=category}
                                <li><a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="category"
                                        path=$category->getPath()|escape}">{$category->getLocalizedTitle()|escape}</a>
                                </li>
                                {/foreach}
                            </ul>
                        </div>
                    </section>
                    {/if}
                </div>
                {/if} *}

                {* PubIds (requires plugins) *}
                {* {foreach from=$pubIdPlugins item=pubIdPlugin}
                {if $pubIdPlugin->getPubIdType() == 'doi'}
                {continue}
                {/if}
                {assign var=pubId value=$article->getStoredPubId($pubIdPlugin->getPubIdType())}
                {if $pubId}
                <section class="item pubid">
                    <h2 class="label">
                        {$pubIdPlugin->getPubIdDisplayType()|escape}
                    </h2>
                    <div class="value">
                        {if $pubIdPlugin->getResolvingURL($currentJournal->getId(), $pubId)|escape}
                        <a id="pub-id::{$pubIdPlugin->getPubIdType()|escape}"
                            href="{$pubIdPlugin->getResolvingURL($currentJournal->getId(), $pubId)|escape}">
                            {$pubIdPlugin->getResolvingURL($currentJournal->getId(), $pubId)|escape}
                        </a>
                        {else}
                        {$pubId|escape}
                        {/if}
                    </div>
                </section>
                {/if}
                {/foreach} *}

                {* Licensing info *}
                {* {if $currentContext->getLocalizedData('licenseTerms') || $publication->getData('licenseUrl')}
                <div class="item copyright">
                    <h2 class="label">
                        {translate key="submission.license"}
                    </h2>
                    {if $publication->getData('licenseUrl')}
                    {if $ccLicenseBadge}
                    {if $publication->getLocalizedData('copyrightHolder')}
                    <p>
                        {translate key="submission.copyrightStatement"
                        copyrightHolder=$publication->getLocalizedData('copyrightHolder')
                        copyrightYear=$publication->getData('copyrightYear')}
                    </p>
                    {/if}
                    {$ccLicenseBadge}
                    {else}
                    <a href="{$publication->getData('licenseUrl')|escape}" class="copyright">
                        {if $publication->getLocalizedData('copyrightHolder')}
                        {translate key="submission.copyrightStatement"
                        copyrightHolder=$publication->getLocalizedData('copyrightHolder')
                        copyrightYear=$publication->getData('copyrightYear')}
                        {else}
                        {translate key="submission.license"}
                        {/if}
                    </a>
                    {/if}
                    {/if}
                    {$currentContext->getLocalizedData('licenseTerms')}
                </div>
                {/if}

                {call_hook name="Templates::Article::Details"}
            </div><!-- .entry_details --> *}
            {*
        </div><!-- .row -->

    </article> *}
