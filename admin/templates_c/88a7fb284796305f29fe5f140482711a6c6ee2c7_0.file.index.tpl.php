<?php /* Smarty version 3.1.25, created on 2016-10-12 15:42:08
         compiled from "D:\wamp\www\Web\admin\templates\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2149657fe2190158e31_69632053%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88a7fb284796305f29fe5f140482711a6c6ee2c7' => 
    array (
      0 => 'D:\\wamp\\www\\Web\\admin\\templates\\index.tpl',
      1 => 1476272521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2149657fe2190158e31_69632053',
  'variables' => 
  array (
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_57fe21901e55a5_27417131',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57fe21901e55a5_27417131')) {
function content_57fe21901e55a5_27417131 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2149657fe2190158e31_69632053';
?>
<div class="col-lg-6">
<div class="box">




		<!--	<div class="row">

				<div class="col-lg-12 text-center">
			
					<div class="box">
						
						<div class="content">
							<h1 style="color:#ff503f;font-weight: bold;">Добро пожаловать в администраторскую часть</h1>
							<h3>Здесь Вы сможете с легкостью управлять страницами Вашего сайта!</h3>
						</div>
					</div>
				</div>

			</div> -->

	<!-- Title Bar Start -->
	<div class="box-title red">
		<span>Управление страницами</span>
	</div>
	<!-- Title Bar End -->

	<!-- Content Start -->
	<div class="content">
		<div class="row">
			<div class="col-lg-12">
				<table class="regular-table non-stripped bordered hoverable">
					<thead>

					<th>Название страницы</th>
					<th>Управление</th>

					</thead>

					<tbody>

					<!-- Table Row Start -->
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
					<tr>

						<td><?php echo $_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</td>
						<td><a href="edit_pages.php?id=<?php echo $_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
">Редактировать</a></td>

					</tr>
				<?php endfor; endif; ?>
					<!-- Table Row End -->
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- Content End -->

</div>

</div><?php }
}
?>