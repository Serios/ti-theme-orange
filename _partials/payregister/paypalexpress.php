<div class="radio">
    <label>
        <?php if (!$paymentMethod->isApplicable($order->order_total, $paymentMethod)) { ?>
            <input type="radio" name="payment" value="" disabled/>
        <?php } else { ?>
            <input
                type="radio"
                name="payment"
                value="paypalexpress"
            />
        <?php } ?>
        <?= $paymentMethod->name; ?>
    </label>
    <?php if (!$paymentMethod->isApplicable($order->order_total, $paymentMethod)) { ?>
        <span class="text-info"><?= sprintf(
                lang('sampoyigi.payregister::default.alert_min_order_total'),
                currency_format($paymentMethod->order_total),
                $paymentMethod->name
            ); ?></span>
    <?php } ?>
</div>