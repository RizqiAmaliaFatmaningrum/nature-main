{**
 * templates/frontend/components/headerHead.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2000-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Common site header <head> tag and contents.
 *}
 <head>
 <meta charset="{$defaultCharset|escape}">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="generator" content="{$pageTitleTranslated|strip_tags|escape|strip|replace:'	':''}{if $requestedPage|escape|default:"index" != 'index' && $currentContext && $currentContext->getLocalizedName()} | {$currentContext->getLocalizedName()}{/if}- Novelty 1.1 by openjournaltheme.com">
	<meta name="title" content="{$pageTitleTranslated|strip_tags}{if $requestedPage|escape|default:"index" != 'index' && $currentContext && $currentContext->getLocalizedName()}	| {$currentContext->getLocalizedName()}{/if}">	
 <title>
	 {$pageTitleTranslated|strip_tags}
	 {* Add the journal name to the end of page titles *}
	 {if $requestedPage|escape|default:"index" != 'index' && $currentContext && $currentContext->getLocalizedName()} | {$currentContext->getLocalizedName()}	{/if}
 </title>
 {load_header context="frontend"}
 {* SEO *}
 {* Not index page *}
 {if $requestedOp != 'index' && $currentContext && $currentContext->getLocalizedName()}
 <meta name="description" content="{$description|strip_tags:false|regex_replace:"/(<|&(amp;)?lt;).*?(>|&(amp;)?gt;)/":""|replace:'&#039;':''}">
 <meta name="og:description" content="{$description|strip_tags:false|regex_replace:"/(<|&(amp;)?lt;).*?(>|&(amp;)?gt;)/":""|replace:'&#039;':''}">	
 <meta name="copyright" content="{$currentContext->getLocalizedName()} - {$publisherName}" />	
 {* article page *}
 {if $requestedPage == 'article'}
 <meta name="keywords" content="{if !empty($keywords[$currentLocale])}{foreach from=$keywords item=keyword}{foreach name=keywords from=$keyword item=keywordItem name=keyword}{$keywordItem|escape|trim}{if not $smarty.foreach.keyword.last},{/if}{/foreach}{/foreach}{/if}">		
 <!-- Open Graph / Facebook -->
 <meta property="og:type" content="article">
 <meta property="og:url" content="{$siteProtocol}://{$smarty.server.HTTP_HOST}{$smarty.server.REQUEST_URI}">
 <meta property="og:title" content="{$article->getLocalizedTitle()|strip_tags|trim}">
 <meta property="og:description" content="{$article->getLocalizedAbstract()|strip_tags|trim}">
 {if $article->getLocalizedCoverImage()}
 <meta property="og:image" content="{$journalPublicFolder}{$article->getLocalizedCoverImage()}">        
 {/if}
 <!-- Twitter -->
 <meta property="twitter:card" content="summary_large_image">
 <meta property="twitter:url" content="{$siteProtocol}://{$smarty.server.HTTP_HOST}{$smarty.server.REQUEST_URI}">
 <meta property="twitter:title" content="{$article->getLocalizedTitle()|strip_tags|trim}">
 <meta property="twitter:description" content="{$article->getLocalizedAbstract()|strip_tags|trim}">
 {if $article->getLocalizedCoverImage()}
 <meta property="twitter:image" content="{$journalPublicFolder}{$article->getLocalizedCoverImage()}">
 {/if}
 {/if}
 {* Index Page *}
 {else $requestedOp == 'index'}    
 <meta name="description" content="{$about|strip_tags:false}">
 <meta name="og:description" content="{$about|strip_tags:false}">
 <meta name="author" content="{$displayPageHeaderTitle}" />
 <meta name="copyright" content="{$displayPageHeaderTitle}" />  
 <meta property="og:url" content="{$siteProtocol}://{$smarty.server.HTTP_HOST}{$smarty.server.REQUEST_URI}">
 <meta property="twitter:url" content="{$siteProtocol}://{$smarty.server.HTTP_HOST}{$smarty.server.REQUEST_URI}">
 {/if}
 
 {load_stylesheet context="frontend"}

</head>
{* {if $alertValidated}
 {$alertValidated}
{/if} *}

