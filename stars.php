<?php
function __($string) {
    return $string;
}

$email = 'love@forever.com';
$sitename = 'Printerval';
?>
<html style="width:100%; margin: 0; padding: 0; font-family:-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="x-apple-disable-message-reformatting" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="telephone=no" name="format-detection" />
    <title><?= $sitename  ?></title>

</head>
<body style="background: #ffffff; width: 100%; margin: 0;  padding: 0; font-family:-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">
    <table style="width: 100%; border: 0; text-align: center; border-collapse: collapse; line-height: 1.2;">
        <tr style="padding: 0; border: none; vertical-align: center; text-align: center">
            <td style="padding: 0; border: none; font-family:-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif; font-size: 15px; text-align: center">
                <table style="width: 100%; max-width: 760px; margin: 0 auto; border: 0; text-align: center; border-collapse: collapse">
                    <tr style="padding: 0; border: none">
                        <td style="padding: 0; border: none; font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif; font-size: 15px; ">
                            <div style="width: 100%;  padding: 8px 18px; text-align: left;  line-height: 1.2;">
                                <div style="width: 100%; border-radius: 8px 8px 0 0; font-family:-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif; font-size: 15px text-align: left; color: #333333; border-bottom: 1px solid #e1e1e1">
                                    <p style="font-weight: 600; color: #333333">
                                        <img src="http://printerval.com/images/logo.png" width="160" height="40" alt="<?=  $sitename  ?>">
                                    </p>
                                </div>
                                <div style="width: 100%; border-radius: 8px 8px 0 0; font-family:-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif; font-size: 15px text-align: left; color: #333333">
                                    <p style="font-weight: 600; color: #333333">
                                        <?= sprintf(__('Dear %s!'), '<span style="text-transform: capitalize;">Customer</span>'); ?>
                                    </p>
                                </div>
                                <p style="width: 100%; border-radius: 8px 8px 0 0; font-family:-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif; font-size: 15px text-align: left; color: #333333">
                                    <?= sprintf(__('Thank you for choosing %s!'), '<strong>Printerval.com</strong>'); ?>
                                </p>

                                <p style="width: 100%; border-radius: 8px 8px 0 0; font-family:-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif; font-size: 15px text-align: left; color: #333333">
                                    <a href="https://www.trustpilot.com/evaluate/printerval.com" style="font-size: 21px; font-weight: 600; color: #1e80b8; text-decoration: none;" target="_blank"><?=  __("How did we do?")?></a>
                                </p>
                                <table style="width: 100%; max-width: 320px; margin: 0; border: 0; text-align: center; border-collapse: collapse">
                                    <?php for ($i=5; $i > 0 ; $i--) { ?>
                                        <tr>
                                            <td style="vertical-align: middle; width: 20px;">
                                                <a href="https://www.trustpilot.com/evaluate/printerval.com" target="_blank" style="auto;text-decoration: none; font-weight: 600; line-height: 16px; display: flex">
                                                    <span style="display:block; min-width: 12px; width: 12px; height: 12px; min-height: 12px;border-radius: 24px; border: 2px solid #d1d1d1; margin-right: 10px;"></span>
                                                </a>
                                            </td>
                                            <td style="vertical-align: middle; padding: 5px 0; width: 256px">
                                                <a href="https://www.trustpilot.com/evaluate/printerval.com" target="_blank" style="auto;text-decoration: none; font-weight: 600; line-height: 16px; display: flex">
                                                    <img src="https://printerval.com/images/<?= $i?>star.png" height="48" width="256" alt="">
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </table>

                                <div style="margin-top: 16px; margin-bottom: 32px; width: 100%; border-radius: 8px 8px 0 0; font-family:-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif; font-size: 15px; color: #555; text-align: lef">

                                    <?= __('Your experience is important to us and your review (whether good, bad or otherwise) will be posted on Trustpilot.com immediately to help other people make more informed decisions.
                                    ') ?>
                                </div>


                                <div style="margin: 0 0 32px; padding: 32px 0; width: 100%; border-radius: 8px 8px 0 0; font-family:-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif; font-size: 15px; color: #555; text-align: left; border-bottom: 1px dashed #d1d1d1;">
                                    <div style="color: #333333; font-size: 15px; font-family:-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif;">
                                        <?= __('Thanks for loving our designs.') ?>
                                    </div>
                                    <div style="color: #333333; font-size: 15px; font-family:-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif;">
                                        <?= __("If there is anything else that we can do for you, just don't hesitate to let us know. We will do our best.") ?>
                                    </div>
                                    <a style="font-size: 14px; color: #ff6600; text-decoration: none; margin-right: 16px" href="mailto: <?= $email ?>"><?= $email ?></a>
                                    <a style="font-size: 14px; color: #ff6600; text-decoration: none" href="/?internal_source=email-forget-item ?>">Printerval</a>
                                </div>
                                <div style="margin-top: 18px; width: 100%; border-radius: 8px 8px 0 0; font-family:-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif; font-size: 12px; color: #999; text-align: justify">
                                    <div style="margin-top: 18px; width: 100%; border-radius: 8px 8px 0 0; font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif; font-size: 11px; color: #ff6600; text-align: justify">
                                        <?= __('Do not reply to this email') ?>
                                    </div>
                                    <div style="margin-top: 4px; width: 100%; border-radius: 8px 8px 0 0; font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif; font-size: 11px; color: #999; text-align: justify">
                                        <?= __('This is an automated email message sent from our support system. Do not reply to this email as we will not receive your reply!') ?>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
    </html>
