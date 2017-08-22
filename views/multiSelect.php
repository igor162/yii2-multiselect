<?php
use yii\helpers\Html;
use kartik\icons\Icon;

/* @var $list \igor162\Multiselect\MultiSelect[] */
/* @var $table \igor162\Multiselect\MultiSelect[] */
/* @var $label \igor162\Multiselect\MultiSelect */
/* @var $id \igor162\Multiselect\MultiSelect */
/* @var $name \igor162\Multiselect\MultiSelect */
/* @var $ajax \igor162\Multiselect\MultiSelect */
/* @var $sortable \igor162\Multiselect\MultiSelect */

?>
<div class="multi-select" id="<?= $id; ?>">
    <?php if($label){ ?>
        <label class="control-label" for=""><?= $label; ?></label>
    <?php } ?>

	<?= Html::dropDownList('', null, $list, ['class' => 'form-control list', 'id' => 'rules']); ?>
<!--	--><?//= kartik\select2\Select2::widget([
//        'name' => 'rules',
//        'id' => 'rules',
//        'data' => $list,
//        'hideSearch' => true,
//        'options' => ['placeholder' => 'Select a state ...'],
//        'pluginOptions' => [
//            'allowClear' => false
//        ],
//    ]); ?>
	<table class="table table-striped table-bordered table-condensed">
        <tbody>
            <tr class="hidden">
                <td></td>
                <td style="width: 30px;"><a href="#" class="remove"><?= Icon::show('trash-o', ['class' => 'fa-lg']) ?></a></td>
            </tr>
            <?php $isFirst = true; ?>
            <?php foreach($table as $dataId => $dataName): ?>
            <?php
                $class = '';
                if ($isFirst && $sortable) {
                    $class = 'success';
                    $isFirst = false;
                }
            ?>
            <tr data-id="<?= $dataId; ?>" class="<?= $class ?>">
                <td><?= $dataName; ?></td>
                <td style="width: 30px;"><a href="#" class="remove"><?= Icon::show('trash-o', ['class' => 'fa-lg']) ?></a></td>
                <?= Html::input('hidden', $name, $dataId) ?>
            </tr>
            <?php endforeach; ?>
        </tbody>
	</table>
</div>