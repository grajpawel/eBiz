{** Copyright 2018 Sakis Gkiokas
 *
 * This file is part of codwfeeplus module for Prestashop.
 *
 * Codwfeeplus is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Codwfeeplus is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * For any recommendations and/or suggestions please contact me
 * at sakgiok@gmail.com
 *
 *  @author    Sakis Gkiokas <sakgiok@gmail.com>
 *  @copyright 2018 Sakis Gkiokas
 *  @license   https://opensource.org/licenses/GPL-3.0  GNU General Public License version 3
 *}

{capture name='tr_count'}{counter name='tr_count'}{/capture}
{$cols = 0}
<tbody>
{if count($list)}
{foreach $list AS $index => $tr}
    {$cols = 0}
	<tr{if $position_identifier} id="tr_{$position_group_identifier}_{$tr.$identifier}_{if isset($tr.position['position'])}{$tr.position['position']}{else}0{/if}"{/if} class="{if isset($tr.class)}{$tr.class}{/if} {if $tr@iteration is odd by 1}odd{/if}"{if isset($tr.color) && $color_on_bg} style="background-color: {$tr.color}"{/if} >
		{if $bulk_actions && $has_bulk_actions}
                    {$cols = $cols +1}
			<td class="row-selector text-center">
				{if isset($list_skip_actions.delete)}
					{if !in_array($tr.$identifier, $list_skip_actions.delete)}
						<input type="checkbox" name="{$list_id}Box[]" value="{$tr.$identifier}"{if isset($checked_boxes) && is_array($checked_boxes) && in_array({$tr.$identifier}, $checked_boxes)} checked="checked"{/if} class="noborder" />
					{/if}
				{else}
					<input type="checkbox" name="{$list_id}Box[]" value="{$tr.$identifier}"{if isset($checked_boxes) && is_array($checked_boxes) && in_array({$tr.$identifier}, $checked_boxes)} checked="checked"{/if} class="noborder" />
				{/if}
			</td>
		{/if}
		{foreach $fields_display AS $key => $params}
			{block name="open_td"}
				<td
					{if isset($params.position)}
						id="td_{if !empty($position_group_identifier)}{$position_group_identifier}{else}0{/if}_{$tr.$identifier}{if $smarty.capture.tr_count > 1}_{($smarty.capture.tr_count - 1)|intval}{/if}"
					{/if}
					class="{strip}{if !$no_link}pointer{/if}
					{if isset($params.position) && $order_by == 'position'  && $order_way != 'DESC'} dragHandle{/if}
					{if isset($params.class)} {$params.class}{/if}
					{if isset($params.align)} {$params.align}{/if}{/strip}"
					{if (!isset($params.position) && !$no_link && !isset($params.remove_onclick))}
						onclick="document.location = '{$current_index|escape:'html':'UTF-8'}&amp;{$identifier|escape:'html':'UTF-8'}={$tr.$identifier|escape:'html':'UTF-8'}{if $view}&amp;view{else}&amp;update{/if}{$table|escape:'html':'UTF-8'}{if $page > 1}&amp;page={$page|intval}{/if}&amp;token={$token|escape:'html':'UTF-8'}'">
					{else}
					>
				{/if}
			{/block}
			{block name="td_content"}
				{if isset($params.prefix)}{$params.prefix}{/if}
				{if isset($params.badge_success) && $params.badge_success && isset($tr.badge_success) && $tr.badge_success == $params.badge_success}<span class="badge badge-success">{/if}
				{if isset($params.badge_warning) && $params.badge_warning && isset($tr.badge_warning) && $tr.badge_warning == $params.badge_warning}<span class="badge badge-warning">{/if}
				{if isset($params.badge_danger) && $params.badge_danger && isset($tr.badge_danger) && $tr.badge_danger == $params.badge_danger}<span class="badge badge-danger">{/if}
				{if isset($params.color) && isset($tr[$params.color])}
					<span class="label color_field" style="background-color:{$tr[$params.color]};color:{if Tools::getBrightness($tr[$params.color]) < 128}white{else}#383838{/if}">
				{/if}
				{if isset($tr.$key)}
					{if isset($params.active)}
						{$tr.$key}
					{elseif isset($params.callback)}
						{if isset($params.maxlength) && Tools::strlen($tr.$key) > $params.maxlength}
							<span title="{$tr.$key}">{$tr.$key|truncate:$params.maxlength:'...'}</span>
						{else}
							{$tr.$key}
						{/if}
					{elseif isset($params.activeVisu)}
						{if $tr.$key}
							<i class="icon-check-ok"></i> {l s='Enabled' mod='codwfeeplus'}
						{else}
							<i class="icon-remove"></i> {l s='Disabled' mod='codwfeeplus'}
						{/if}
					{elseif isset($params.position)}
						{if !$filters_has_value && $order_by == 'position' && $order_way != 'DESC'}
							<div class="dragGroup">
								<div class="positions">
									{$tr.$key.position + 1}
								</div>
							</div>
						{else}
							{$tr.$key.position + 1}
						{/if}
					{elseif isset($params.image)}
						{$tr.$key}
					{elseif isset($params.icon)}
						{if is_array($tr[$key])}
							{if isset($tr[$key]['class'])}
								<i class="{$tr[$key]['class']}"></i>
							{else}
								<img src="../img/admin/{$tr[$key]['src']}" alt="{$tr[$key]['alt']}" title="{$tr[$key]['alt']}" />
							{/if}
						{/if}
					{elseif isset($params.type) && $params.type == 'price'}
						{if isset($tr.id_currency)}
							{displayPrice price=$tr.$key currency=$tr.id_currency}
						{else}
							{displayPrice price=$tr.$key}
						{/if}
					{elseif isset($params.float)}
						{$tr.$key}
					{elseif isset($params.type) && $params.type == 'date'}
						{dateFormat date=$tr.$key full=0}
					{elseif isset($params.type) && $params.type == 'datetime'}
						{dateFormat date=$tr.$key full=1}
					{elseif isset($params.type) && $params.type == 'decimal'}
						{$tr.$key|string_format:"%.2f"}
					{elseif isset($params.type) && $params.type == 'percent'}
						{$tr.$key} {l s='%' mod='codwfeeplus'}
					{* If type is 'editable', an input is created *}
					{elseif isset($params.type) && $params.type == 'editable' && isset($tr.id)}
						<input type="text" name="{$key}_{$tr.id}" value="{$tr.$key|escape:'html':'UTF-8'}" class="{$key}" />
					{elseif $key == 'color'}
						{if !is_array($tr.$key)}
						<div style="background-color: {$tr.$key};" class="attributes-color-container"></div>
						{else} {*TEXTURE*}
						<img src="{$tr.$key.texture}" alt="{$tr.name}" class="attributes-color-container" />
						{/if}
					{elseif isset($params.maxlength) && Tools::strlen($tr.$key) > $params.maxlength}
						<span title="{$tr.$key|escape:'html':'UTF-8'}">{$tr.$key|truncate:$params.maxlength:'...'|escape:'html':'UTF-8'}</span>
					{elseif isset($params.html)}
                                            {$tr.$key}
                                        {else}
						{$tr.$key|escape:'html':'UTF-8'}
					{/if}
				{else}
					{block name="default_field"}--{/block}
				{/if}
				{if isset($params.suffix)}{$params.suffix}{/if}
				{if isset($params.color) && isset($tr.color)}
					</span>
				{/if}
				{if isset($params.badge_danger) && $params.badge_danger && isset($tr.badge_danger) && $tr.badge_danger == $params.badge_danger}</span>{/if}
				{if isset($params.badge_warning) && $params.badge_warning && isset($tr.badge_warning) && $tr.badge_warning == $params.badge_warning}</span>{/if}
				{if isset($params.badge_success) && $params.badge_success && isset($tr.badge_success) && $tr.badge_success == $params.badge_success}</span>{/if}
			{/block}
			{block name="close_td"}
				</td>
			{/block}
		{/foreach}

	{if $shop_link_type}
		<td title="{$tr.shop_name}">
			{if isset($tr.shop_short_name)}
				{$tr.shop_short_name}
			{else}
				{$tr.shop_name}
			{/if}
		</td>
	{/if}
	{if $has_actions}
            {$cols = $cols + 1}
		<td class="text-right">
			{assign var='compiled_actions' value=array()}
			{foreach $actions AS $key => $action}
				{if isset($tr.$action)}
					{if $key == 0}
						{assign var='action' value=$action}
					{/if}
					{if $action == 'delete' && $actions|@count > 2}
						{$compiled_actions[] = 'divider'}
					{/if}
					{$compiled_actions[] = $tr.$action}
				{/if}
			{/foreach}
			{if $compiled_actions|count > 0}
				{if $compiled_actions|count > 1}<div class="btn-group-action">{/if}
				<div class="btn-group pull-right">
					{$compiled_actions[0]}
					{if $compiled_actions|count > 1}
					<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						<i class="icon-caret-down"></i>&nbsp;
					</button>
						<ul class="dropdown-menu">
						{foreach $compiled_actions AS $key => $action}
							{if $key != 0}
							<li{if $action == 'divider' && $compiled_actions|count > 3} class="divider"{/if}>
								{if $action != 'divider'}{$action}{/if}
							</li>
							{/if}
						{/foreach}
						</ul>
					{/if}
				</div>
				{if $compiled_actions|count > 1}</div>{/if}
			{/if}
		</td>
	{/if}
	</tr>
        {if isset($tr.id_codwfeeplus_trans) && isset($tr.codwfeeplus_result)}
        <tr>
            <td colspan="{count($fields_display)+$cols}">
                <div class="codwfeeplus_result" id="codwfeeplus_result_{$tr.id_codwfeeplus_trans}" style="display: none;">
                    {$tr.codwfeeplus_result}
                </div>
            <td>
        </tr>
        {/if}
{/foreach}
{else}
	<tr>
		<td class="list-empty" colspan="{count($fields_display)+1}">
			<div class="list-empty-msg">
				<i class="icon-warning-sign list-empty-icon"></i>
				{l s='No records found' mod='codwfeeplus'}
			</div>
		</td>
	</tr>
{/if}
</tbody>