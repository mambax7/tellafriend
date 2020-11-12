<{$tf_form.javascript}>
<form name="<{$tf_form.name}>" action="<{$tf_form.action}>" method="<{$tf_form.method}>" <{$tf_form.extra}>>
    <table class="outer" cellspacing="1">
        <tr>
            <th colspan="2"><{$tf_form.title}></th>
        </tr>
        <!-- start of form elements loop -->
        <{foreach item=element from=$tf_form.elements}>
            <{if $element.hidden !== true}>
                <tr>
                    <td class="head" width="20%"><{$element.caption}></td>
                    <td class="<{cycle values="even,odd"}>"><{$element.body}></td>
                </tr>
            <{else}>
                <{$element.body}>
            <{/if}>
        <{/foreach}>
        <!-- end of form elements loop -->
    </table>
</form>
