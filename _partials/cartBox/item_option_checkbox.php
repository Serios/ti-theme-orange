<?php foreach ($optionValues as $optionValue) { ?>
    <?php
    $optionIndex = $optionValue->menu_option_value_id;
    $isChecked = ($cartItem AND $cartItem->hasOptionValue($optionIndex));
    ?>
    <div
        class="custom-control custom-checkbox"
    >
        <input
            type="checkbox"
            class="custom-control-input"
            id="menuOptionCheck<?= $optionIndex; ?>"
            name="menu_options[<?= $index; ?>][option_values][]"
            value="<?= $optionValue->menu_option_value_id; ?>"
            data-option-price="<?= $optionValue->price; ?>"
            <?= ($isChecked OR $optionValue->isDefault()) ? 'checked="checked"' : ''; ?>
        >
        <label
            class="custom-control-label w-100"
            for="menuOptionCheck<?= $optionIndex; ?>"
        >
            <?= $optionValue->name; ?>
            <?php if ($optionValue->price > 0 || !$hideZeroOptionPrices) {?>
                <span class="pull-right"><?= lang('main::lang.text_plus').currency_format($optionValue->price); ?></span>
            <?php } ?>
        </label>
    </div>
<?php } ?>
