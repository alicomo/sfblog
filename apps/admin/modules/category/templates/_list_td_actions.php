<td class="sf_admin_td_actions">
  <p class="buttons">
    <?php echo $helper->linkToEdit($category, array(  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => 'Edit',)) ?>
    <?php echo link_to(__('Deactivate', array(), 'messages'), 'category/List_deactivate?id='.$category->getId(), array(  'class' => 'sf_admin_action_deactivate',)) ?>  </p>
</td>
