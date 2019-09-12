{extends file='parent:frontend/index/index.tpl'}

{block name="frontend_index_header_javascript_jquery_lib" prepend}
<script type="text/javascript">
  var mobCatMenu = `
  {foreach $sMainCategories as $category}
    <li class="navigation--entry{if $category.flag} is--active{/if}{if $category.subcategories} has--sub-categories{/if}{if $category.childrenCount} has--sub-children{/if}" role="menuitem">
        <a class="navigation--link{if $category.flag} is--active{/if}{if $category.subcategories} has--sub-categories{/if}{if $category.childrenCount} link--go-forward{/if}"
        href="{$category.link}"
        data-categoryId="{$category.id}"
        data-fetchUrl="{url module=widgets controller=listing action=getCategory categoryId={$category.id}}"
        title="{$category.description|escape}"
        {if $category.external} target="{$category.externalTarget}"{/if}>
            {$category.description}
            {if $category.childrenCount}
                <span class="is--icon-right">
                    <i class="icon--arrow-right"></i>
                </span>
            {/if}
        </a>
    </li>
  {/foreach}`;
</script>
{/block}
