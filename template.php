<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="https://cdn.tailwindcss.com"></script>
        <title><?= $code; ?> - <?= $site['name']; ?></title>
    </head>
    <body>
        <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 mt-12">
            <h1 class="xl:text-4xl text-3xl my-2 text-center">
                Error <?= $code; ?><br>
                <strong><?= $error['name']; ?></strong>
            </h1>
        </div>

        <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 mt-12">
            <div class="md:flex md:space-x-4 w-full">
                <div class="border border-neutral-300 rounded-xl w-full mb-4 md:mb-0">
                    <div class="px-6 py-6">
                        <?php if ($error['description'] != NULL) { ?>
                        <h2 class="xl:text-xl text-lg mb-4">
                            <?= $error['description']; ?>
                        </h2>
                        <?php } if ($error['image'] != NULL) { ?>
                        <p class="my-2">
                            <img src="<?= $error['image']; ?>" class="mx-auto w-1/2 md:w-1/3 lg:w-1/4" alt="<?= $error['name']; ?> Image">
                        </p>
                        <?php } if ($error['tip'] != NULL) { ?>
                        <h2 class="xl:text-xl text-lg mb-4 py-1 px-2 bg-blue-100 border-l-2 border-blue-500 rounded-r-md">
                            <?= $error['tip']; ?>
                        </h2>
                        <?php } if ($site['support_contact'] != NULL) { ?>
                        <p>
                            <?= $site['support_contact']; ?>
                        </p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 text-xs">
            Powered by <a href="https://github.com/LMWNWeb/Bonfire" target="_blank">Bonfire</a>.
        </div>
    </body>
</html>
